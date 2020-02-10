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
                        <h1 class="page-title">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article id="content">
        <section class="container content-padding-xl">
            <div class="row animated">
                <div class="col-sm-6 col-md-6">
                    <div class="pricing-table text-center">
                        <div class=" one-three">
                            {{--@foreach($categories as $category)--}}
                            <div class="pricing-header">
                                {{--<h3>{{ $category->type }}</h3>--}}
                                <div class="pricing-row">
                                    {{--<h3>${{ $category->price }}</h3>--}}
                                </div>
                            </div>
                            <div class="pricing-table-content">
                                Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. A corporis culpa, debitis dignissimos esse est ex ipsum laudantium
                                libero molestias odit officiis possimus provident, quasi quo recusandae rem suscipit vitae.
                            </div>
                            <div class="pricing-footer" style="display: block;">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href=""><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            {{--@endforeach--}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="pricing-table text-center">
                        <div class=" one-three">
                            {{--@foreach($categories as $category)--}}
                            <div class="pricing-header">
                                {{--<h3>{{ $category->type }}</h3>--}}
                                <div class="pricing-row">
                                    {{--<h3>${{ $category->price }}</h3>--}}
                                </div>
                            </div>
                            <div class="pricing-table-content">
                                <span>One Hour Weekend Hack or Lesson Every Week</span>
                                <span>Golf Pro Mark Williams DVD Included</span>
                                <span>Horse Riding&nbsp;with our Instructor for 1 week</span>
                                <span>1 Year of Industry Newsletter</span>
                            </div>
                            <div class="pricing-footer">
                                <a href="#" title="Add a Button Title" target="_self" class="btn btn-default"> Button Text </a>
                            </div>
                            {{--@endforeach--}}
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </article>
@endsection