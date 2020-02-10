<?php

namespace App\Http\Controllers;


use App\Booking;
use App\Category;
use App\Room;
use App\Event;
use App\Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')
            ->with('categories', Category::all())
            ->with('events', Event::all());
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
    public function store(Request $request)
    {

        $this->validate($request, [
            'category_id' => 'required',
            'arrival' => 'required',
            'departure' => 'required',
            'email' => 'required',
        ]);

        $room = Room::where('id', '!==', null );
        if ($room)
        {
            Booking::Create([
                'category_id' => $request->category_id,
                'arrival' => $request->arrival,
                'departure' => $request->departure,
                'email' => $request->email,
                'approve' => false,
            ]);

            session()->flash('success', 'Booking successful please check your email for your booking number');

            return redirect()->back();
        }
        else {

            session()->flash('info', 'Booking currently not available');

            return redirect()->back();
        }


    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewGallery()
    {
        return view('gallery')
            ->with('galleries', Gallery::simplePaginate(9));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
//            ->with('galleries', Gallery::all());
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
