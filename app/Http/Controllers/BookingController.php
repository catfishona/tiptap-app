<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Storage;
use Carbon\Carbon;

use Auth;

use Illuminate\Http\Request;

class BookingController extends Controller
{
     /**
     * Belum login, ga bisa masuk
     */
    public function __construct()
    {
        $this->middleware('auth'); // changed guest to auth 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $storage = Storage::where('id', $id)->first(); // first krn cuma ngambil 1 data

        return view('booking.index', compact('storage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $storage = Storage::where('id', $id)->first(); // we are storing to booking db


        $date = Carbon::now();     

        $booking = new Booking;

        // foreign keys
        $booking->idUser = Auth::user()->id;
        $booking->idStorage = $storage->id;

        $booking->duration = $request->duration;
        $booking->total = $request->duration * $storage->price;
        $booking->startDate = $request->startDate;

        // $booking->endDate = $request->addDays($request->duration*30); // asumsi 1 bulan 30 hari
        $booking->created_at = $date;
        $booking->save();

        // return view('checkout/index');
        return redirect()->route('checkout');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect(route('historyi'));
    }
}
