@extends('layouts.main')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">{{ isset($room) ? 'Edit Room' : 'Add Room' }}</h4>
                </div>
                @if($errors->any())
                    {{--if($count($errors) > 0 )--}}

                    <ul class="list-group">
                        @foreach($errors->all() as $error)

                            <li class="list-group-item text-danger">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form method="post" action="{{ isset($room) ? route('rooms.update', $room->id) : route('rooms.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if(isset($room))
                           {{ method_field('PUT') }}
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Room Number</label>
                                    <input class="form-control" name="room_number" value="{{ isset($room) ? $room->room_number : '' }}" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Room type</label>
                                    <select name="category_id" class="select">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"
                                                    @if(isset($room))
                                                    @if( $room->category_id == $category->id)
                                                    selected
                                                    @endif
                                                    @endif
                                            >  {{ $category->type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input class="form-control" type="text" name="phone" value="{{ isset($room) ? $room->phone : '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bed Count</label>
                                    <input type="text" class="form-control" name="bed_count" value="{{ isset($room) ? $room->bed_count : '' }}">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <input type="file" class="custom-file-input form-control" name="image">
                            <label class="custom-file-label">Choose file (Room Photo)</label>
                            @if(isset($room))
                                <div class="thumbnail text-center">
                                    <img class="img-thumbnail" src="{{ Storage::url($room->image) }}" width="400" height="150" alt="">
                                </div>
                                @endif

                        </div>

                        <div class="m-t-20 text-center">
                            <button type="submit" class="btn btn-primary submit-btn">{{ isset($room) ? 'Update' : 'Save' }}</button>
                            <button type="reset" class="btn btn-danger submit-btn">Cancel</button>
                        </div>
                    </form>
                    {{--@endforeach--}}
                </div>
            </div>
        </div>

    </div>
@endsection