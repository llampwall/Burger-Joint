<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Reservation;
use App\FoodCategory;
use App\FoodItem;


class StaticPagesController extends Controller
{
    public function home() {
        return view('home');
    }

    public function menu() {
        $foodcategories = FoodCategory::All();
        return view('menu/index', [
            'categories' => $foodcategories
        ]);
        return view('menu/index');
    }

    public function singleMenu($slug) {
        $category = FoodCategory::where('title', $slug)->first();
        $items = FoodItem::where('category_id', $category->id)->get();
        return view('menu/single-menu', [
            'category' => $category, 
            'items' => $items
        ]);
    }

    public function about() {
        return view('pages/about');
    }

    public function reservations() {
        return view('pages/reservations');
    }

    public function contact() {
        return view('pages/contact');
    }

    public function offers() {
        return view('pages/offers');
    }

    public function registerMember() {
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_number' => ['required', 'string', 'min:10'],
        ]);
        $member = new Member();
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();
        return redirect('/offers/thankyou');
    }

    public function thankYou() {
        return view('pages/thankyou');
    }

    public function reserve() {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests' => ['required', 'integer'],
            'time' => ['required'],
        ]);
        $reservation = new Reservation();
        $reservation->name = request('name');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guests = request('guests');
        $reservation->time = request('time');
        $reservation->save();
        return redirect('reservations/reserved');
    }

    public function reserved() {
        return view('pages/reserved');
    }
}
