@extends('layouts.main')


@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Customer</h4>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form method="post" action="{{ isset($customer) ? route('customers.update', $customer->id) : route('customers.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if(isset($customer))
                            {{ method_field('PUT') }}
                        @endif

                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">

                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" value="{{ isset($customer) ? $customer->name : ''}}">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" {{ $errors->has('email') ? 'is-invalid' : '' }} type="text" name="email" value="{{ isset($customer) ? $customer->email : ''}}">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>phone</label>
                                    <input class="form-control" type="text" name="phone" value="{{ isset($customer) ? $customer->phone : ''}}">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="select" name="gender">
                                        @if(isset($customer))
                                        @if($customer->gender == 1)
                                            <option value="1">Male</option>
                                            <option value="0">Female</option>
                                        @elseif($customer->gender == 0)
                                            <option value="0">Female</option>
                                            <option value="1">Male</option>

                                        @endif
                                        @endif
                                            <option value="1">Male</option>
                                            <option value="0">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="country" value="{{ isset($customer) ? $customer->country : '' }}">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" name="state" value="{{ isset($customer) ? $customer->state : '' }}">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ isset($customer) ? $customer->address : '' }}">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label">Choose file (Photo)*OPTIONAL</label>
                            </div>

                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">{{ isset($booking) ? 'Update Customer' : 'Create Customer' }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection