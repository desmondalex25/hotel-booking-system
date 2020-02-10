@extends('layouts.main')


@section('content')
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <h4 class="page-title">{{ isset($room) ? 'Edit Booking' : 'Add Booking' }}</h4>
        </div>
        {{--@if($errors->any())--}}
          {{--if($count($errors) > 0 )--}}

          {{--<ul class="list-group">--}}
            {{--@foreach($errors->all() as $error)--}}

              {{--<li class="list-group-item text-danger">--}}
                {{--{{ $error }}--}}
              {{--</li>--}}
            {{--@endforeach--}}
          {{--</ul>--}}
        {{--@endif--}}
      </div>
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <form method="post" action="{{ isset($booking) ? route('bookings.update', $booking->id) : route('bookings.store') }}">
           {{ csrf_field() }}
            @if(isset($booking))
              {{ method_field('PUT') }}
            @endif
            <div class="row">
              <div class="col-md">
                <div class="form-group">
                  <label>Room number</label>
                  <select name="customer_id" class="select">
                    <option value="">select customer</option>
                    @foreach($customers as $customer)
                      <option value="{{ $customer->id }}"
                              @if(isset($booking))
                              @if($booking->customer_id == $customer->id)
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

            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Room type</label>
                  <select name="category_id" class="select">
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}"
                              @if(isset($booking))
                              @if($booking->category_id == $category->id)
                              selected
                              @endif
                              @endif
                      >{{ $category->type }}</option>

                    @endforeach
                  </select>
                  <div class="text-danger">
                    <strong>{{ $errors->first('category_id') }}</strong>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Room number</label>
                  <select name="room_id" class="select">
                    <option value="">select room</option>
                    @foreach($rooms as $room)
                      <option value="{{ $room->id }}"
                              @if(isset($booking))
                              @if($booking->room_id == $room->id)
                              selected
                              @endif
                              @endif
                      >{{ $room->room_number }}</option>

                    @endforeach
                  </select>
                  <div class="text-danger">
                    <strong>{{ $errors->first('room_id') }}</strong>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Arrival Date </label>
                  <div class="cal-icon">
                    <input name="arrival" type="text" value="{{ isset($booking) ? $booking->arrival : '' }}" class="form-control datetimepicker ">
                 <div class="text-danger">
                   <strong>{{ $errors->first('arrival') }}</strong>
                 </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Departure Date </label>
                  <div class="cal-icon">
                    <input type="text" name="departure" value="{{ isset($booking) ? $booking->departure : '' }}" class="form-control datetimepicker">
                    <div class="text-danger">
                      <strong>{{ $errors->first('departure') }}</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                <div class="form-group">
                  <label> Email</label>
                  <input class="form-control" value="{{ isset($booking) ? $booking->email : '' }}" name="email" type="email">
                  <div class="text-danger">
                    <strong>{{ $errors->first('email') }}</strong>
                  </div>
                </div>
              </div>

            </div>
            <div class="custom-file mb-3">
              <input type="file" class="custom-file-input" name="filename">
              <label class="custom-file-label">Choose file (Photo)</label>
            </div>

            <div class="form-group">
              <label class="display-block">Booking Status</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="product_active" value="option1" checked>
                <label class="form-check-label" for="product_active">
                  Active
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="product_inactive" value="option2">
                <label class="form-check-label" for="product_inactive">
                  Inactive
                </label>
              </div>
            </div>
            <div class="m-t-20 text-center">
              <button type="submit" class="btn btn-primary submit-btn">{{ isset($booking) ? 'Update Booking' : 'Create Booking' }}</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
@endsection