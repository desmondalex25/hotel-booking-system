@extends('layouts.main')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">

                <div class="col-sm-4 col-3">
                    <example></example>

                    <h4 class="page-title">Bookings</h4>

                @if(session()->has('info'))
                        <div class="alert alert-danger">
                            {{ session()->get('info') }}
                        </div>
                    @endif
                </div>
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ route('bookings.create') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Booking</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable table-bordered table-condensed" id="data_table">
                            <thead>
                            <tr>
                                <th style="width:5%;">Booking ID</th>
                                <th style="width:5%;">Customer Name</th>
                                <th style="width:5%;">Room type</th>
                                <th style="width:5%;">Number</th>
                                <th style="width:5%;">Arrive</th>
                                <th style="width:5%;">Depart</th>
                                <th style="width:5%;">Email</th>
                                <th style="width:5%;">Phone</th>
                                <th style="width:5%;">Booked Time</th>
                                <th style="width:5%;">Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($bookings as $booking)
                                    <td>BK00-{{ $booking->id }}</td>

                                    @if(isset($booking->customer_id))
                                        {{--//if this booking is assigned to a customer--}}
                                        <td>{{ $booking->customer->name }}</td>
                                        <td>{{ $booking->category->type }}</td>
                                        @if(isset($booking->room->room_number))
                                            <td>{{ $booking->room->room_number }}</td>
                                        @else
                                            <td class="text-danger">Select room</td>
                                        @endif
                                        <td>{{ $booking->arrival }}</td>
                                        <td>{{ $booking->departure }}</td>
                                        <td>{{ $booking->customer->email }}</td>
                                        <td>{{ $booking->customer->phone }}</td>
                                        <td>{{ $booking->created_at->diffForHumans() }}</td>
                                    @else
                                        {{-- //if this booking has no customer assigned to it--}}
                                        <td></td>
                                        <td>{{ $booking->category->type }}</td>
                                        @if(isset($booking->room_id))
                                            <td>{{ $booking->room->room_number }}</td>
                                        @else
                                            <td class="text-danger">Select room</td>
                                        @endif
                                        <td>{{ $booking->arrival }}</td>
                                        <td>{{ $booking->departure }}</td>
                                        <td>{{ $booking->email }}</td>
                                        <td>{{ $booking->phone }}</td>
                                        <td>{{ $booking->created_at->diffForHumans() }}</td>
                                    @endif
                                        <td>
                                            @if($booking->approve)
                                                <a href="{{ route('booking.unapprove', $booking->id) }}" class="btn btn-sm btn-danger">Unapprove</a>
                                            @else
                                                <a href="{{ route('booking.approve', $booking->id) }}" class="btn btn-sm btn-primary">Approve</a>
                                            @endif
                                        </td>

                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ route('bookings.edit', $booking->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="post">
                                                       {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button class="btn fa fa-trash-o m-r-5 mr-2" onsubmit="return confirm('Are you sure?')">Delete</button>

                                                    </form>
                                                </div>
                                            </div>
                                        </td>

                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection