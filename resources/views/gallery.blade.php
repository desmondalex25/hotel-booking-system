@extends('layouts.frontend')

@section('content')
    <header id="header" class="header-content" role="banner">
        @include('includes.nav')


            <label class="toggle-nav-label" for="toggle-main-nav"><i class="fa fa-bars fa-lg"></i> Menu</label>
            <label class="toggle-nav-label" for="toggle-secondary-nav"><i class="fa fa-info-circle fa-lg"></i>Services</label>
        </div>
        <div id="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-title">Media Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article id="content">
        <section class="container content-padding-lg">

                <div class="row animated" style="display: inline">
                    @foreach($galleries as $gallery)

                <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 m-b-20">
                    <ul class="">
                        <li>
                            <a href="{{ Storage::url($gallery->image_name) }}" rel="lightbox" class="link-image">
                                <img class="wp-image" src="{{ Storage::url($gallery->image_name) }}" alt="" />
                            </a>
                            <div>
                                <div><small>{{ $gallery->image_title }}</small></div>
                                <div>{{ str_limit($gallery->description, 80) }}</div>
                            </div>

                        </li>
                    </ul>
                </div>
                    @endforeach

                </div>

            {{--{{ $galleries->links() }}--}}
        </section>
    </article>
    @endsection