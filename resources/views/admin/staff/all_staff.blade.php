@extends('layouts.main')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Staff</h4>
                </div>
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ route('staff.create') }}" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Staff</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Staff ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>User Name</th>
                                <th>Email</th>
                                {{--<th>Password</th>--}}
                                <th>Join Date</th>
                                <th>Mobile</th>
                                <th style="min-width: 110px;">Role</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($staffs as $staff)
                            <tr>
                                <td>
                                    <a href="{{ Storage::url($staff->image) }}">
                                        <img src="{{ Storage::url($staff->image) }}" width="70" height="50" alt="">
                                    </a>
                                </td>
                                <td>{{ $staff->staff_id }}</td>
                                <td>{{ $staff->firstname }}</td>
                                <td>{{ $staff->lastname }}</td>
                                <td>{{ $staff->username }}</td>
                                <td>{{ $staff->email }}</td>
                                {{--<td>{{ $staff->password }}</td>--}}
                                <td>{{ $staff->reg }}</td>
                                <td>{{ $staff->phone }}</td>
                                <td>{{ $staff->role }}</td>


                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('staff.edit', $staff->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <form action="{{ route('staff.destroy', $staff->id) }}" method="post">
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
            <div id="delete_employee" class="modal fade delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <img src="assets/img/sent.png" alt="" width="50" height="46">
                            <h3>Are you sure want to delete this Employee?</h3>
                            <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection