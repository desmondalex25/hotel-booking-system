@extends('layouts.frontend')

@section('content')
    <header id="header" class="header-content header-content-3" role="banner">
        @include('includes.nav')

            <label class="toggle-nav-label" for="toggle-main-nav"><i class="fa fa-bars fa-lg"></i> Menu</label>
            <label class="toggle-nav-label" for="toggle-secondary-nav"><i class="fa fa-info-circle fa-lg"></i> Services</label>
        </div>
        <div id="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-title">Events</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <article id="content">
        <section class="container content-padding-lg">
            <div class="row animated">

                {{--<div class="services-carousel">--}}
                    {{--@foreach($events as $event)--}}

                        {{--<div class="item">--}}
                            {{--<div class="col-sm-6"><br />--}}
                                {{--<h2>{{ $event->title }}</h2>--}}
                                {{--<p>{{ $event->description }}.</p>--}}
                                {{--<a href="#" class="btn btn-inline">Plan Your Dream Wedding</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6 text-center">--}}
                                {{--<img src="{{ Storage::url($event->image) }}" class="wp-image" alt="" />--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}

                {{--</div>--}}
            @if($events)
                @foreach($events as $event)
                <div class="col-sm-6"><br />
                    <h2>{{ $event->title }}</h2>
                    <p>{{ $event->description }}.</p>
                    <a href="#" class="btn btn-inline">Plan Your Dream Wedding</a>
                </div>
                <div class="col-sm-6 text-center">
                    <img src="{{ Storage::url($event->image) }}" class="wp-image" alt="" />
                </div>
                @endforeach

            </div>
            <div class="text-center">
                {{ $events->links() }}
            </div>
            @else
                <div class="col-md-12">
                    <h3 class="text-center">
                        Watch out for our Events
                    </h3>
                </div>

                @endif
        </section>
        <section class="fullwidth-row bg-10 cover fixed parallax-bg " data-stellar-background-ratio="0.423123"></section>
        <section class="fullwidth-row bg-11 cover fixed">
            <div class="container content-padding-xxl">
                <div class="row animated">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="gallery-carousel">
                            {{--@foreach($events->take(2) as $event)--}}
                            {{--<div class="item"><img src="{{ Storage::url($event->image) }}" alt="" class="wp-image"></div>--}}
                            {{--@endforeach--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fullwidth-row bg-12 cover fixed dark-overlay" style="">
            <div class="container animated content-padding-xl">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <blockquote>“I experienced the fairytale wedding that I always dreamed of at Leisure, thanks to the staff and their five-star hospitality!”<cite>Jessica Howard on TripAdvisor</cite></blockquote>
                    </div>
                </div>
            </div>
        </section>

    </article>
    @endsection