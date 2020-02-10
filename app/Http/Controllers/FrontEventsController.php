<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class FrontEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::where('status', '=', 1 )->paginate(1);
        return view('events')
            ->with('events', $event);
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

//        return $request->all();


       $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'begin' => 'required',
            'end' => 'required',
            'slug' => str_slug($request->title),
        ]);


        Event::Create([
            'title' => $request->title,
            'description' => $request->description,
            'begin' => $request->begin,
            'end' => $request->end,
            'customer_id' => $request->customer_id,
            'slug' => str_slug($request->title),
            'status' => false
        ]);


        return redirect()->back();
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
