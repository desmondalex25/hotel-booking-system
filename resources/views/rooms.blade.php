@extends('layouts.frontend')

@section('content')

    <header id="header" class="header-content header-content-4" role="banner">
        @include('includes.nav')

            <label class="toggle-nav-label" for="toggle-main-nav"><i class="fa fa-bars fa-lg"></i> Menu</label>
            <label class="toggle-nav-label" for="toggle-secondary-nav"><i class="fa fa-info-circle fa-lg"></i>Services</label>
        </div>
        <div id="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-title">Rooms &amp; Suites</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article id="content">
        <section class="container content-padding-lg animated">
            <div class="row">
                @foreach($rooms as $room)
                <div class="col-sm-6">
                    <h3 class="text-center">{{ $room->category->type }}</h3>
                       <p>{{ $room->description }}.</p>
                    <a href="room-view.html" class="btn btn-primary">Make a Reservation</a>

                </div>
                <div class="col-sm-6">
                    <a href="{{ Storage::url($room->image) }}">
                        <img src="{{ Storage::url($room->image) }}" class="wp-image" alt="" />

                    </a>
                </div>
                    @endforeach
            </div>
            <div class="text-center">
                {{ $rooms->links() }}
            </div>

        </section>
        <section class="fullwidth-row bg-15 fixed">
            <div class="container content-padding-xl content-padding-mobile-xs">
                <div class="row animated">
                    <div class="col-sm-6">
                        <img src="{{ asset("front/images/content-rooms-3.jpg") }}" class="wp-image equal-height" alt="">
                    </div>

                            <div class="white-box content-padding col-sm-6 text-center">
                                <h2 class="text-center">PRICES</h2>
                                <table class="table table-responsive">
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>

                                            <td class="text-left"><strong>{{ $category->type }}</strong></td>
                                            <td class="text-right">${{ $category->price }}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                <br>
                                {{--Make a booking modal here on this button--}}
                                <a href="room-view.html" class="btn btn-primary">Make a Reservation</a>
                            </div>

                </div>
            </div>
        </section>


        <section class="container content-padding-lg">
            <div class="row animated">
                <div class="white-box content-padding col-sm-6 col-sm-offset-3 text-center">
                    <h2 class="text-center">PRICES</h2>
                    <form role="form" method="post" action="{{ route('frontBooking.store') }}">
                        {{ csrf_field() }}
                        <div class="col-md-2 col-sm-6">
                            <label class="sr-only" for="email">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <label class="sr-only" for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="col-md-2 col-sm-6 icon-calendar">
                            <label class="sr-only" for="arrival-date">Arrival</label>
                            <input type="text" name="arrival" class="form-control" contenteditable="false" data-provide="datepicker" data-date-autoclose="true" data-date-format="yyyy/mm/dd" id="arrival-date" placeholder="Arrival Date">
                        </div>
                        <div class="col-md-2 col-sm-6 icon-calendar">
                            <label class="sr-only" for="departure-date">Departure</label>
                            <input type="text" name="departure" class="form-control" contenteditable="false" data-provide="datepicker" data-date-autoclose="true" data-date-format="yyyy/mm/dd" id="departure-date" placeholder="Departure Date">
                        </div>

                        <div class="col-md-2 col-sm-4 icon-arrow">
                            <label class="sr-only" for="room">Room</label>
                            <select class="form-control" name="category_id" id="room">
                                <option selected disabled>Room</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->type }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <input type="submit" class="btn btn-primary btn-block" value="Book a Room">
                        </div>
                    </form>
                </div>
            </div>
        </section>


    </article>
    @endsection