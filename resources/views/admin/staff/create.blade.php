@extends('layouts.main')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">{{ isset($staff) ? 'Update Staff' : 'Add Staff' }}</h4>
                </div>


            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form method="post" action="{{ isset($staff) ? route('staff.update', $staff->id) : route('staff.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if(isset($staff))
                            {{ method_field('PUT') }}
                        @endif
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="firstname" value="{{ isset($staff) ? $staff->firstname : '' }}">
                                <div class="text-danger">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" name="lastname"  value="{{ isset($staff) ? $staff->lastname : '' }}">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Username <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="username"  value="{{ isset($staff) ? $staff->username : '' }}">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="email"  value="{{ isset($staff) ? $staff->email : '' }}">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="text" name="password"  value="{{ isset($staff) ? $staff->password : '' }}">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control" id="" cols="3" rows="2">{{ isset($staff) ? $staff->address : ''}}</textarea>
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Staff ID <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="staff_id"  value="{{ isset($staff) ? $staff->staff_id : 'ST-' }}">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('staff_id') }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Joining Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text" name="reg"  value="{{ isset($staff) ? $staff->reg : '' }}">
                                        <div class="text-danger">
                                            <strong>{{ $errors->first('reg') }}</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone </label>
                                    <input class="form-control" type="text" name="phone"  value="{{ isset($staff) ? $staff->phone : '' }}">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="select" name="role">
                                        @if(isset($staff))
                                            <option value="{{ $staff->id }}">{{ $staff->role }}</option>
                                        @else
                                        {{--<option>Admin</option>--}}
                                        <option>Manager</option>
                                        <option>Receptionist</option>
                                        <option>Accountant</option>
                                        <option>Staff</option>
                                        <option>Cleaners</option>
                                        <option>Servants</option>
                                        @endif
                                    </select>
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label">Choose file</label>
                                <div class="text-danger">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </div>
                            </div>
                        </div>

                        <div class="m-t-20 text-center">
                            <button type="submit" class="btn btn-primary submit-btn">{{ isset($staff) ? 'Update Staff' : 'Add Staff' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection