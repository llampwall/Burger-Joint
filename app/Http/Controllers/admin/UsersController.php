<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

// handles user admin pages

class UsersController extends Controller
{
    // ensure user is logged in to view this page
    public function __construct() {
        $this->middleware('auth');
    }
    
    // get all users
    public function index() {
        $users = User::paginate(10);
        return view('admin/users/all', [
            'users' => $users
        ]);
    }

    // get the create page
    public function create() {
        $roles = Role::All();
        return view('admin/users/create', [
            'roles' => $roles
        ]);
    }

    // post a new user to database
    public function store() {
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required']
        ]);
        $user = new User();
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();

        // role-user relationship
        $user->roles()->attach(request('role_id'));

        return redirect('/admin/users');
    }

    // view edit user page
    public function edit($id) {
        $user = User::find($id);
        $roles = Role::All();
        return view('admin/users/edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    // update an existing user
    public function update($id) {
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required']
        ]);
        $user = User::find($id);
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        $user->roles()->sync([request('role_id')]);
        return redirect('/admin/users');
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users');
    }

}
