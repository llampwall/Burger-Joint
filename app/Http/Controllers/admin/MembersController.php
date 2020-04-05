<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;

class MembersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $members = Member::paginate(10);
        return view('admin/members/all-emails', [
            'members' => $members
        ]);
    }

    public function edit($id) {
        $member = Member::find($id);
        return view('admin/members/edit', [
            'member' => $member
        ]);
    }
        
    public function update($id) {
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_number' => ['required', 'string', 'min:10'],
        ]);
        $member = Member::find($id);
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();
        return redirect('/admin/members');
    }

    public function delete($id) {
        $member = Member::find($id);
        $member->delete();
        return redirect('admin/members');
    }
}