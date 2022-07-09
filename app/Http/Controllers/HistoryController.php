<?php

namespace App\Http\Controllers;
use App\Booking;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $bookings = Booking::where('idUser', \Auth::user()->id)->get();

        return view('history.index', compact('bookings'));
    }

}
