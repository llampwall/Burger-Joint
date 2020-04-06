<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Reservation;
use App\Member;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard() {

        $estimated_income_per_plate = 27;

        $reservations_last_30 = DB::select(DB::raw('
            SELECT
                count(*) as total
            FROM restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY and CURDATE()
        '))[0]->total;

        $plates_last_30 = DB::select(DB::raw('
            SELECT
                sum(guests) as total
            FROM restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY and CURDATE()
        '))[0]->total;

        $employees_last_30 = DB::select(DB::raw('
            SELECT count(*) as total
            FROM restaurant.users
            inner join role_user on role_user.user_id = users.id
            inner join roles on roles.id = role_user.role_id
            WHERE role_id = 2
        '))[0]->total;

        $estimated_income_last_30 = $plates_last_30 * $estimated_income_per_plate;

        $latestReservations = Reservation::where('guests', '>', 0)->limit(5)->orderBy('created_at', 'desc')->get();

        // data for the four cards at the top of the dashboard
        return view('admin/dashboard', [
            'reservations' => $reservations_last_30,
            'customers' => $plates_last_30,
            'revenue' => $estimated_income_last_30,
            'employees' => $employees_last_30,
            'latestReservations' => $latestReservations
        ]);
    }

    // data for the Daily Revenue chart
    public function dailyRevenueLast30() {
        return $est_daily_income_data = DB::select(DB::raw('
            SELECT
                DATE_FORMAT(created_at, "%Y-%m-%d") as reserved_day, 
                (sum(guests) * 27) as estimated_earnings,
                count(*) as total_reservations,
                sum(guests) as total_guests
            FROM restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY and CURDATE()
            group by reserved_Day desc;
        '));
    }

    public function index() {
        $reservations = Reservation::paginate(10);
        return view('admin/reservations/all', [
            'reservations' => $reservations
        ]);
    }

}
