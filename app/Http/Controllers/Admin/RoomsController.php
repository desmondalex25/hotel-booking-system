<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Mail;
use Session;
use App\Room;
use App\Category;
use App\Booking;
use App\Http\Requests\CreateRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.rooms.all_rooms')
            ->with('rooms', Room::all())
            ->with('booking', Booking::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $room = DB::table('rooms')
            ->join('categories', 'rooms.category_id', '=', 'categories.id')
            ->where('rooms.category_id', '=', 'category.id')
            ->select('categories.*', 'rooms.category_id')
            ->first();
        return view('admin.rooms.create')
            ->with('room', $room)
            ->with('categories', Category::all());


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoomRequest $request)
    {
                if ($request->hasFile('image'))
                {
//                    $image = image->store('public/images');

                        Room::Create([
                            'category_id' => $request->category_id,
                            'room_number' => $request->room_number,
                            'description' => $request->description,
                            'bed_count' => $request->bed_count,
                            'phone' => $request->phone,
                            'image' => $request->image->store('public/images/rooms'),
                            'status' => true
                        ]);
                }




        session::flash('success', 'Room created successfully');


        return redirect(route('rooms.index'));
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
    public function edit(Room $room)
    {
        return view('admin.rooms.create')
            ->with('room', $room)
            ->with('categories', Category::all());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        if ($request->hasFile('image'))
        {
            $room->update([
                'category_id' => $request->category_id,
                'room_number' => $request->room_number,
                'description' => $request->description,
                'bed_count' => $request->bed_count,
                'phone' => $request->phone,
                'image' => $request->image->store('public/images/rooms'),
            ]);

        }
        else{
            $data = $request->only(['category_id', 'description', 'room_number', 'bed_count', 'phone']);

            $room->update($data);
        }


        session()->flash('success', 'Room updated successfully');

        return redirect(route('rooms.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {

        if (file_exists($room->image)){
            unlink($room->image);
        }
         $room->delete();

        session()->flash('danger', 'Room deleted successfully');

        return redirect()->back();
    }


    /**
     * Make available the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function makeAvailable($id)
    {

        $rooms = Room::find($id);

        if ($rooms->booking->approve)
        {
            session()->flash('info', 'Sorry, this room is assigned to a customer');

        }
        else
        {
            $rooms->status = true;

            $rooms->save();

        }

        return redirect(route('rooms.index'));
    }

    /**
     * Make unavailable the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function makeUnAvailable($id)
    {
        $rooms = Room::find($id);

                $rooms->status = false;
                $rooms->save();

                session()->flash('success', 'Room successfully made unavailable');

        return redirect(route('rooms.index'));

    }
}
