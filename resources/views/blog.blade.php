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
                        <h1 class="page-title">Blog</h1>
                    </div>
                </div>
            </div>
        </div>
            </div>

        <article id="content">
            <section class="container content-padding-lg animated">
                <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-01.jpg" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title"><a href="blog-details.html">Do You Know the ABCs of  Hotel?</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit laboris.</p>
                            <a href="blog-details.html" class="read-more"><i class="fa fa-long-arrow-right"></i> Read More</a>
                            <div class="clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li><a href="#."><i class="fa fa-calendar"></i> <span>December 6, 2017</span></a></li>
                                    </ul>
                                </div>
                                <div class="post-right"><a href="#."><i class="fa fa-heart-o"></i>21</a> <a href="#."><i class="fa fa-eye"></i>8</a> <a href="#."><i class="fa fa-comment-o"></i>17</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-02.jpg" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title"><a href="blog-details.html">Do You Know the ABCs of Hotel?</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit laboris.</p>
                            <a href="blog-details.html" class="read-more"><i class="fa fa-long-arrow-right"></i> Read More</a>
                            <div class="blog-info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li><a href="#."><i class="fa fa-calendar"></i> <span>December 6, 2017</span></a></li>
                                    </ul>
                                </div>
                                <div class="post-right"><a href="#."><i class="fa fa-heart-o"></i>21</a> <a href="#."><i class="fa fa-eye"></i>8</a> <a href="#."><i class="fa fa-comment-o"></i>17</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </article>

    @endsection