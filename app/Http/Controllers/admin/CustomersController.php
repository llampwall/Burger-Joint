<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function allEmails() {
        return view('admin/customers/all-emails');
    }

    public function allReservations() {
        return view('admin/customers/all-reservations');
    }
}
