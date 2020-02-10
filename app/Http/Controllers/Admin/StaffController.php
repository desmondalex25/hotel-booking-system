<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Staff;
use App\Http\Requests\UpdateStaffRequest;
use App\Http\Requests\CreateStaffRequest;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.staff.all_staff')
            ->with('staffs', Staff::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStaffRequest $request)
    {

        if ($request->hasFile('image')) {
            Staff::Create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'staff_id' => $request->staff_id,
                'reg' => $request->reg,
                'address' => $request->address,
                'phone' => $request->phone,
                'role' => $request->role,
                'slug' => str_slug($request->username),
                'image' => $request->image->store('public/images/staff'),


            ]);
        }

        else{
            Staff::Create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'staff_id' => $request->staff_id,
                'address' => $request->address,
                'reg' => $request->reg,
                'phone' => $request->phone,
                'role' => $request->role,
                'slug' => str_slug($request->username),
                ]);
        }
        return redirect(route('staff.index'));
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
    public function edit(Staff $staff)
    {
        return view('admin.staff.create')
            ->with('staff', $staff);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffRequest $request, Staff $staff)
    {

        if ($request->hasFile('image'))
        {
            $staff->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'address' => $request->address,
                'staff_id' => $request->staff_id,
                'reg' => $request->reg,
                'phone' => $request->phone,
                'role' => $request->role,
                'slug' => str_slug($request->username),
                'image' => $request->image->store('public/images/staff'),


            ]);
        }
        else{

            $data = $request->only(['firstname', 'lastname', 'username', 'address', 'email', 'password', 'role', 'staff_id', 'reg', 'phone',  ]);
            $staff->update($data);
        }
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        $staff->save();

    }
}
