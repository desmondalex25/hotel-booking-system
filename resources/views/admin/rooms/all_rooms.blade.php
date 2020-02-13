@extends('layouts.main')

@section('content')

    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-4">
                    <h4 class="page-title">All Rooms</h4>
                </div>
                <div class="col-sm-8 col-8 text-right m-b-20">
                    <a href="{{ route('rooms.create') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Room</a>
                </div>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
                @if(session()->has('info'))
                    <div class="alert alert-info">
                        {{session()->get('info')}}
                    </div>
                @endif

                @if($errors->any)
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                            <li class="list-group-item">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                            <tr>
                                <th style="width:10%;">Room number</th>
                                <th style="width:10%;">Img</th>
                                <th>Room type</th>
                                <th>Description</th>
                                <th>Bed Count</th>
                                <th style="width:10%;">Phone</th>
                                <th style="width:10%;">Rent</th>
                                <th style="width:10%;">Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($rooms as $room)

                            <tr>
                                <td>{{ $room->room_number }}</td>
                                <td>
                                    <img src="{{ Storage::url($room->image) }}" width="50" height="50" alt="">
                                </td>
                                <td>{{ $room->category->type }}</td>
                                <td>{{ str_limit($room->description, 50) }}</td>
                                <td>{{ $room->bed_count }}</td>
                                <td>{{ $room->phone }}</td>
                                <td>{{ $room->category->price }}</td>
                                <td>
                                    {{--@if($room->booking->room_id == $room->id)--}}
                                        @if($room->status)
                                        <a href="{{ route('rooms.makeUnAvailable', $room->id) }}" class="btn btn-sm btn-primary">Free</a>
                                        {{--<a href="" class="btn btn-sm btn-primary">Free</a>--}}

                                        @else
                                        <a href="{{ route('rooms.makeAvailable', $room->id) }}" class="btn btn-sm btn-danger">Occupied</a>

                                        @endif
                                        {{--@endif--}}
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('rooms.edit', $room->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <form action="{{ route('rooms.destroy', $room->id) }}" method="post">
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