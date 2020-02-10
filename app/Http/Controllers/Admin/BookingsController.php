<?php

namespace App\Http\Controllers\Admin;

use Mail;
use App\Booking;
use App\Category;
use App\Customer;
use App\Room;
use Illuminate\Auth\Middleware\Authorize;
use App\Http\Requests\CreateBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Null_;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.bookings.all_bookings')
            ->with('bookings', Booking::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booking = DB::table('bookings')
            ->join('rooms', 'bookings.room_id', '=', 'rooms.id')
            ->join('categories', 'bookings.category_id', '=', 'categories.id')
            ->where('bookings.room_id', '=', 'rooms.id')
            ->select('bookings.room_id', 'bookings.category_id')
            ->first();
        return view('admin.bookings.create')
            ->with('booking', $booking)
            ->with('categories', Category::all())
            ->with('customers', Customer::all())
            ->with('rooms', Room::where('status', 1)->get());





    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBookingRequest $request)
    {
//        dd($request->all());

        Booking::Create([
            'category_id' => $request->category_id,
            'room_id' => $request->room_id,
            'customer_id' => $request->customer_id,
            'arrival' => $request->arrival,
            'departure' => $request->departure,
            'email' => $request->email,
            'approve' => 0
        ]);



        session()->flash('success', 'Booking successful');

        Mail::to('iwambealex25@gmail.com')->send(new \App\Mail\BookingSuccessful());


        return redirect(route('bookings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('admin.bookings.create')
            ->with('booking', $booking)
            ->with('categories', Category::all())
            ->with('customers', Customer::all())
            ->with('rooms', Room::where('status', 1)->get());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $data = $request->only(['category_id', 'room_id', 'customer_id', 'arrival', 'departure', 'email',]);

        $booking->update($data);

        session()->flash('success', 'Booking updated successfully');

        Mail::to('00c272a1b7-b4649c@inbox.mailtrap.io')->send(new \App\Mail\BookingSuccessful());


        return redirect(route('bookings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
//       if ($booking->departure - $booking->arrival == 0) {

        $booking->delete();


        return redirect()->back();

    }

    public function unapprove($id)
    {

        $booking = Booking::find($id);

        // dd($booking);
        $booking->approve = false;
        $booking->room_id = NULL;
        $booking->save();

        return redirect()->back();
    }

    public function approve($id)
    {

        $booking = Booking::find($id);

        if ($booking->room_id && $booking->customer_id) {
            $booking->approve = true;
            $booking->room->status = false;
            $booking->room->save();
            $booking->save();



            return redirect()->back();

        }
        else {
            session()->flash('info', 'Please select a Customer and a room this booking');

            return redirect(route('bookings.index'));

        }



    }
}
