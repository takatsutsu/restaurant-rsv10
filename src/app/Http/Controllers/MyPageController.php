<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Shop;
use App\Models\Reservation;

class MyPageController extends Controller
{
    public function my_page()
    {
        $user = Auth::user();
        $reservations = $user->reservations()->with('shop')->get();
        $favorites = $user->favorites()->with('shop')->get();

        return view('my_page', compact('user', 'reservations', 'favorites'));
    }
}
