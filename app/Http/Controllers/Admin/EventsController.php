<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Customer;
use App\Http\Requests\CreateEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.event.all_events')
            ->with('events', Event::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create')
            ->with('customers', Customer::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventsRequest $request)
    {
        if ($request->hasFile('image')) {
            Event::Create([
                'title' => $request->title,
                'description' => $request->description,
                'begin' => $request->begin,
                'end' => $request->end,
                'customer_id' => $request->customer_id,
                'slug' => str_slug($request->title),
                'image' => $request->image->store('public/images/events'),
                'status' => false
            ]);
        }
        else
        {
            Event::Create([
                'title' => $request->title,
                'description' => $request->description,
                'begin' => $request->begin,
                'end' => $request->end,
                'customer_id' => $request->customer_id,
                'slug' => str_slug($request->title),
                'status' => false
            ]);
        }

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
    public function edit(Event $event)
    {
        return view('admin.event.create')
            ->with('event', $event)
//            ->with('event', Event::where('slug', '=', $slug))
            ->with('customers', Customer::all());


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventsRequest $request, Event $event)
    {

        if ($request->hasFile('image')) {
            $event->update([
                'title' => $request->title,
                'description' => $request->description,
                'begin' => $request->begin,
                'end' => $request->end,
                'customer_id' => $request->customer_id,
                'slug' => str_slug($request->title),
                'image' => $request->image->store('public/images/events'),
                'status' => false
            ]);
        }
        else
        {
            $data = $request->only([ 'customer_id', 'title', 'description', 'begin', 'end',]);
            $event->update($data);
        }

        return redirect(route('events.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function unapprove($id)
    {

        $event = Event::find($id);

        // dd$event);
        $event->status = false;
        $event->save();

        return redirect(route('events.index'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function approve($id)
    {


        $event = Event::find($id);

        if ($event->customer_id) {
            $event->status = true;
            $event->save();


            return redirect(route('events.index'));

        }
        else {
            session()->flash('info', 'Please select a Customer who has this event');

            return redirect(route('events.index'));

        }



    }
}
