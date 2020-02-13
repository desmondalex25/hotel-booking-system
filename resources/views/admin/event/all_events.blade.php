@extends('layouts.main')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Event</h4>

                    @if(session()->has('info'))
                        <div class="alert alert-danger">
                            {{ session()->get('info') }}
                        </div>
                    @endif
                </div>
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ route('events.create') }}" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Event</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Starts</th>
                                <th>Ends</th>
                                <th>Customer</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $event)
                            <tr>
                            <td>
                                <img src="{{ Storage::url($event->image) }}" height="50" width="80" alt="">
                            </td>
                            <td>{{ $event->title }}</td>
                            <td>{{ str_limit($event->description, 50) }}</td>
                            <td>{{ $event->begin }}</td>
                            <td>{{ $event->end }}</td>
                                @if($event->customer)
                                <td>{{ $event->customer->name }}</td>
                                    @else
                                    <td>Select Customer</td>
                                @endif
                                <td>
                                    @if($event->status)
                                        <a href="{{ route('event.unapprove', $event->id) }}" class="btn btn-sm btn-danger">Unapprove</a>
                                    @else
                                        <a href="{{ route('event.approve', $event->id) }}" class="btn btn-sm btn-success">Approve</a>
                                    @endif
                                </td>

                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('events.edit', $event->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="{{ route('events.destroy', $event->id) }}" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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