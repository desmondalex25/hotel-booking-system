@extends('layouts.main')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">{{ isset($event) ? 'Update Event' : 'Add Event' }}</h4>
                </div>


            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form method="post" action="{{isset($event) ? route('events.update', $event->id) : route('events.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if(isset($event))
                            {{ method_field('PUT') }}
                        @endif
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Customer</label>
                                    <select class="select" name="customer_id">
                                        @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}"
                                                    @if(isset($event))
                                                    @if($event->customer_id == $customer->id)
                                                    selected
                                                    @endif
                                                    @endif
                                            >{{ $customer->name }}</option>
                                        @endforeach

                                    </select>
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('customer_id') }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Event Title <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="title" value="{{ isset($event) ? $event->title : '' }}">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" type="text" name="description">{{ isset($event) ? $event->description : '' }}</textarea>
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Starts <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text" name="begin"  value="{{ isset($event) ? $event->begin : '' }}">
                                        <div class="text-danger">
                                            <strong>{{ $errors->first('begin') }}</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ends <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text" name="end"  value="{{ isset($event) ? $event->end: '' }}">
                                        <div class="text-danger">
                                            <strong>{{ $errors->first('end') }}</strong>
                                        </div>
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
                            <button type="submit" class="btn btn-primary submit-btn">{{ isset($event) ? 'Update Event' : 'Create Event' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection