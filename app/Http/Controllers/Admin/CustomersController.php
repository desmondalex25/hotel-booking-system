<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Booking;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.customers.all_customers')
            ->with('customers', Customer::all())
            ->with('bookings', Booking::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.create');
//            ->with('bookings', Booking::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCustomerRequest $request)
    {

//       dd($request->all());
        if($request->hasFile('image')) {





            Customer::Create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'country' => $request->country,
                'state' => $request->state,
                'address' => $request->address,
                'slug' => str_slug($request->name),
                'image'=> $request->image->store('public/images/customers'),
            ]);

        }
        else
        {
            Customer::Create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'country' => $request->country,
                'state' => $request->state,
                'address' => $request->address,
                'slug' => str_slug($request->name),
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
    public function edit(Customer $customer)
    {
        return view('admin.customers.create')
            ->with('customer', $customer);
//            ->with('bookings', Booking::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {

        if( $request->hasFile('image')) {

          $customer->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'country' => $request->country,
                'state' => $request->state,
                'address' => $request->address,
                'slug' => str_slug($request->name),
                'image'=> $request->image->store('public/images/customers'),
            ]);

        }
        else
        {
            $data = $request->only(['name', 'email', 'phone', 'gender', 'country', 'state', 'address']);

            $customer->update($data);

        }

        return redirect(route('customers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        $customer->save();

        return redirect(route('customers.index'));
    }
}
