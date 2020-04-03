<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

//handles user admin pages

class UsersController extends Controller
{
    // ensure user is logged in to view this page
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $users = User::paginate(10);
        return view('admin/users/all', [
            'users' => $users
        ]);
    }

    // public function update(id) {
    //     $user = User[id];
    //     return view('admin/users/{{id}}', [
    //         'roles' => $roles
    //     ]);
    // }

    // get the create page
    public function create() {
        $roles = Role::All();
        return view('admin/users/create', [
            'roles' => $roles
        ]);
    }

    // post a new user to database
    public function store() {
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

    public function edit() {
        return view('admin/users/edit');
    }

}
