@extends('layouts.frontend')


@section('content')
    <header id="header" role="banner">
{{--    <header id="header" role="banner" style="background-image:url({{ asset('front/images/splash.jpg') }}) ;">--}}


@include('includes.nav')
                <label class="toggle-nav-label" for="toggle-main-nav"><i class="fa fa-bars fa-lg"></i> Menu</label>
                <label class="toggle-nav-label" for="toggle-secondary-nav"><i class="fa fa-info-circle fa-lg"></i> Services</label>
            </div>
            <div class="booking-row content-padding-xs">
                <div class="container">
                    <div class="row">

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>
                        @endif

                            <form id="booking-form" role="form" method="post" action="{{ route("frontBooking.store") }}">
                           {{ csrf_field() }}
                            <div class="col-md-2 col-sm-6">
                                <label class="sr-only" for="email">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                           <div class="text-danger">
                               <strong>{{ $errors->first('email') }}</strong>
                           </div>
                            </div>

                            <div class="col-md-2 col-sm-6 icon-calendar">
                                <label class="sr-only" for="arrival-date">Arrival</label>
                                <input type="text" name="arrival" class="form-control" contenteditable="false" data-provide="datepicker" data-date-autoclose="true" data-date-format="yyyy/mm/dd" id="arrival-date" placeholder="Arrival Date">
                                <div class="text-danger">
                                    <strong>{{ $errors->first('arrival') }}</strong>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 icon-calendar">
                                <label class="sr-only" for="departure-date">Departure</label>
                                <input type="text" name="departure" class="form-control" contenteditable="false" data-provide="datepicker" data-date-autoclose="true" data-date-format="yyyy/mm/dd" id="departure-date" placeholder="Departure Date">
                                <div class="text-danger">
                                    <strong>{{ $errors->first('departure') }}</strong>
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-4 icon-arrow">
                                <label class="sr-only" for="room">Room</label>
                                <select class="form-control" name="category_id" id="room">
                                    <option selected disabled>Room</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->type }}</option>

                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    <strong>{{ $errors->first('category_id') }}</strong>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <input type="submit" class="btn btn-primary btn-block" value="Book a Room">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <article id="content">
            <section class="container content-padding-lg">
                <div class="row animated">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <h1 class="text-center"><small>What can you do with the Leisure Template?</small>AWARD WINNING RESORT</h1>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut.
                        </p>
                        <p>Duis diam eros, dignissim sed condimentum ac, vehicula nec nisl. Suspendisse condimentum libero tempus, accumsan augue et, varius dui. Morbi justo tortor, tincidunt ornare magna ut, molestie mattis enim. Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan.
                        </p>
                        <a href="resort.html" class="btn btn-inline">What's happening at the Leisure Center?</a>
                    </div>
                </div>
            </section>
            <section class="fullwidth-row">
                <div class="container content-padding-xl">
                    <div class="row animated">
                        <div class="col-sm-12 parallax-container" data-stellar-offset-parent="true" data-stellar-vertical-offset="150">
                            <div class="content-column half text-center">
                                <img src="{{ asset('front/images/content-gallery-7-large.jpg') }}" class="parallax-image img-responsive" data-stellar-ratio="1.15123" alt="">
                                <img src="{{ asset('front/images/photo2.jpg') }}" class="parallax-image img-responsive" data-stellar-ratio="0.94456456" alt="">
                                <img src="{{ asset('front/images/photo1.jpg') }}" class="parallax-image img-responsive" data-stellar-ratio="1.111111" alt="">
                            </div>
                            <div class="content-column half last">
                                <h2><small>Discover Nature at it's Finest</small>PLAY GOLF LIKE A PRO</h2>
                                <p>Duis diam eros, dignissim sed condimentum ac, vehicula nec nisl. Suspendissecondimentum libero tempus, accumsan augue et, varius dui. Morbi justo tortor, tincidunt ornare magna ut, molestie mattis enim.
                                </p>
                                <p>Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                </p>
                                <a href="resort.html" class="btn btn-inline">Explore our Deluxe Golf Course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container content-padding-lg">
                <div class="row animated">
                    <aside class="col-sm-12">
                        <h2 class="text-center"><small>Book for your events now and have a wonderful experience?</small>EVENTS</h2>
                        <div class="services-carousel">
                            @foreach($events as $event)

                            <div class="item">
                                <a href="{{ Storage::url('$event->image') }}" class="link-image"><img src="{{ Storage::url($event->image) }}" alt=""></a>
                                <div class="item-content">
                                    <h4><a href="activities.html">{{ $event->title }}</a></h4>
                                    <p>{{ str_limit($event->description, 150) }}. </p>
                                </div>
                            </div>
                            @endforeach

                        </div>

                        <br>
                        <hr>
                        <br>
                        <div class="row text-center">

                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{session()->get('success')}}
                                </div>
                            @endif

                            <form id="booking-form" role="form" method="post" action="{{ route('event.store') }}">
                                {{ csrf_field() }}
                                <div class="col-md-2 col-sm-6">
                                    <label class="sr-only" for="email">Event Name</label>
                                    <input type="text" name="title" class="form-control" placeholder="Event Name">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-6 icon-calendar">
                                    <label class="sr-only" for="arrival-date">Description</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>                                    <div class="text-danger">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-6 icon-calendar">
                                    <label class="sr-only" for="arrival-date">Starts</label>
                                    <input type="text" name="begin" class="form-control" contenteditable="false" data-provide="datepicker" data-date-autoclose="true" data-date-format="yyyy/mm/dd" id="arrival-date" placeholder="Event Starts Date">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('begin') }}</strong>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-6 icon-calendar">
                                    <label class="sr-only" for="departure-date">Departure</label>
                                    <input type="text" name="end" class="form-control" contenteditable="false" data-provide="datepicker" data-date-autoclose="true" data-date-format="yyyy/mm/dd" id="departure-date" placeholder="Event end Time">
                                    <div class="text-danger">
                                        <strong>{{ $errors->first('end') }}</strong>
                                    </div>
                                </div>


                                <div class="col-md-2 col-sm-4">
                                    <input type="submit" class="btn btn-primary btn-block" value="Book a Event">
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
            </section>
        </article>
    </div>
@endsection