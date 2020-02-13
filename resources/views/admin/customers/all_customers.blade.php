@extends('layouts.main')

@section('content')

    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Customers</h4>
                </div>
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ route('customers.create') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Customer</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                            <tr>
                                <th style="width:20%;">Photo</th>
                                <th style="width:20%;">Name</th>
                                <th style="width:20%;">Gender</th>
                                <th>Country</th>
                                <th>State</th>
                                <th>Address</th>
                                <th style="width:20%;">Email</th>
                                <th>phone</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>
                                        <img src="{{ Storage::url($customer->image) }}" width="100" height="100" alt="">
                                    </td>
                                    <td>{{ $customer->name }}</td>
                                    @if($customer->gender == 1)
                                        <td>Male</td>
                                    @else
                                        <td>Female</td>
                                    @endif
                                    <td>{{ $customer->country }}</td>
                                    <td>{{ $customer->state }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('customers.edit', $customer->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
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