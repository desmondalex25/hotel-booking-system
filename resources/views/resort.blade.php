@extends('layouts.frontend')

@section('content')
    <div id="site">

    <header id="header" class="header-content" role="banner">
        @include('includes.nav')

            <label class="toggle-nav-label" for="toggle-main-nav"><i class="fa fa-bars fa-lg"></i> Menu</label>
            <label class="toggle-nav-label" for="toggle-secondary-nav"><i class="fa fa-info-circle fa-lg"></i>Services</label>
        </div>
        <div id="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-title">Our Resort</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article id="content">
        <section class="container content-padding-lg">
            <div class="row animated">
                <div class="col-sm-6">
                    <p class="lead">Unam incolunt Belgae, aliam Aquitani, tertiam. Idque Caesaris facere voluntate liceret: sese habere. Quis aute iure reprehenderit in voluptate velit esse. Ab illo tempore, ab est sed immemorabili. Quam temere in vitiis legem. </p>
                    <p>Salutantibus vitae elit libero, a pharetra augue. At nos hinc posthac, sitientis piros Afros. Quisque ut dolor gravida, placerat libero vel, euismod. Ut enim ad minim veniam, quis nostrud exercitation.
                        Unam incolunt Belgae, aliam Aquitani, tertiam. Unam incolunt Belgae, aliam Aquitani, tertiam. Tityre, tu patulae recubans sub tegmine fagi dolor. Curabitur est gravida.</p>
                    <h3>Curabitur blandit tempus ardua</h3>
                    <p>Idque Caesaris facere voluntate liceret: sese habere. Tu quoque, Brute, fili mi, nihil timor populi, nihil! Unam incolunt Belgae, aliam Aquitani, tertiam. Contra legem facit qui id facit quod lex prohibet. Idque Caesaris facere voluntate liceret: sese habere. Tu quoque, Brute, fili mi, nihil timor populi, nihil! Unam incolunt Belgae, aliam Aquitani, tertiam. Contra legem facit qui id facit quod lex prohibet.</p>
                </div>
                <div class="col-sm-6">
                    <ul class="block-grid-2">
                        <li><a href="images/content-gallery-11-large.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod"><img class="wp-image" src="images/content-gallery-11.jpg" alt="" /></a>
                        </li>
                        <li><a href="images/content-gallery-12-large.jpg" rel="lightbox" class="link-image" title="Praeterea iter est quasdam res quas ex communi"><img class="wp-image" src="images/content-gallery-12.jpg" alt="" /></a>
                        </li>
                        <li><a href="images/content-gallery-7-large.jpg" rel="lightbox" class="link-image" title="Prima luce, cum quibus mons aliud  consensu ab eo"><img class="wp-image" src="images/content-gallery-7.jpg" alt="" /></a>
                        </li>
                        <li><a href="images/content-gallery-6-large.jpg" rel="lightbox" class="link-image" title="Nihilne te nocturnum praesidium Palati, nihil urbis vigiliae."><img class="wp-image" src="images/content-gallery-6.jpg" alt="" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="video-bg" class="video-bg">
            <div class="container content-padding-lg content-padding-mobile-none">
                <div class="row animated">
                    <div class="col-sm-8 col-sm-offset-2 content-padding text-center white-box">
                        <h2 class="text-center"><small>What people like about us</small>TESTIMONIALS</h2>
                        <div class="testimonials-carousel">
                            <div class="testimonial">
                                <h4 class="testimonial-title">Amanda Reed<small>Sep. 2011</small></h4>
                                <p>Tu quoque, Brute, fili mi, nihil timor populi, nihil paenitet nullum senatus!</p>
                                <a href="members.html" class="btn-inline btn">View Story</a>
                            </div>
                            <div class="testimonial">
                                <h4 class="testimonial-title">Heather White<small>Jun. 2014</small></h4>
                                <p>Me non paenitet nullum festiviorem excogitasse ad hoc senatus non paenitet.</p>
                                <a href="members.html" class="btn-inline btn">View Story</a>
                            </div>
                            <div class="testimonial">
                                <h4 class="testimonial-title">Wayne Bell<small>Jan. 2012</small></h4>
                                <p>Morbi odio eros, volutpat nihil timor populi, ut pharetra vitae, lobortis.</p>
                                <a href="members.html" class="btn-inline btn">View Story</a>
                            </div>
                            <div class="testimonial">
                                <h4 class="testimonial-title">Gloria Alexander<small>Mar. 2010</small></h4>
                                <p>Ut enim ad minim veniam, nihil timor populi, quis nostrud exercitation.</p>
                                <a href="members.html" class="btn-inline btn">View Story</a>
                            </div>
                            <div class="testimonial">
                                <h4 class="testimonial-title">Stephen Evans<small>Oct. 2013</small></h4>
                                <p>Pendisse condimentum nihil timor populi, libero tempus, accumsan augue et.</p>
                                <a href="members.html" class="btn-inline btn">View Story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-padding-lg">
            <div class="row animated">
                <aside class="col-sm-12">
                    <h2 class="text-center"><small>What can you do at the Leisure Template?</small>LEISURE CLUB ACTIVITIES</h2>
                    <div class="services-carousel">
                        <div class="item">
                            <a href="activities.html" class="link-image"><img src="images/spa.jpg" alt=""></a>
                            <div class="item-content">
                                <h4><a href="activities.html">Welness &amp; Spa Gateaway Weekend</a></h4>
                                <p>Curabitur est gravida et libero vitae dictum. Magna pars studiorum, prodita quaerimus. </p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="activities.html" class="link-image"><img src="images/pool.jpg" alt=""></a>
                            <div class="item-content">
                                <h4><a href="activities.html">Indoor &amp; Outdoor Swimming Pools</a></h4>
                                <p>Quam diu etiam furor iste tuus nos eludet? Curabitur est gravida et libero vitae dictum. </p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="dining.html" class="link-image"><img src="images/food.jpg" alt=""></a>
                            <div class="item-content">
                                <h4><a href="dining.html">International Cuisine for all Your Tastes</a></h4>
                                <p>A communi observantia non est recedendum. Cum ceteris in veneratione tui montes. </p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="activities.html" class="link-image"><img src="images/sail.jpg" alt=""></a>
                            <div class="item-content">
                                <h4><a href="activities.html">Take our Yacht and Visit the Surroundings</a></h4>
                                <p>Prima luce, cum quibus mons aliud consensu ab eo. Quid securi etiam tamquam eu fugiat. </p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="rooms.html" class="link-image"><img src="images/room.jpg" alt=""></a>
                            <div class="item-content">
                                <h4><a href="rooms.html">Studios &amp; VIP Exclusive Apartments</a></h4>
                                <p>Magna pars studiorum, prodita quaerimus. Quid securi etiam tamquam eu fugiat nulla. </p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="activities.html" class="link-image"><img src="images/fitness.jpg" alt=""></a>
                            <div class="item-content">
                                <h4><a href="activities.html">Pro Fitness Instructor for Every Day Classes</a></h4>
                                <p>Praeterea iter est quasdam res quas ex communi. Vivamus sagittis lacus vel augue laoreet. </p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </article>
    <footer id="footer" role="contentinfo">
        <div class="container">
            <div class="row" id="main-footer">
                <aside class="col-lg-2 col-md-3 col-sm-4 widget">
                    <h5 class="widget-title">Leisure Club</h5>
                    <p>St Andrews Scotland,
                        United Kingdom KY16 8PN<br><br>
                        Tel +44 (0) 1334 837000<br>
                        Fax +44 (0) 1334 837099</p>
                </aside>
                <aside class="col-lg-2 col-md-3 col-sm-4 widget">
                    <h5 class="widget-title">The Resort</h5>
                    <p>
                        <a href="members.html">Member Bookings</a><br>
                        <a href="events.html">Open Competitions</a><br>
                        <a href="contact.html">Location</a><br>
                        <a href="contact.html">Contact us</a><br>
                        <a href="resort.html">Our Team</a><br>
                    </p>
                </aside>
                <aside class="col-lg-2 col-md-3 col-sm-4 widget">
                    <h5 class="widget-title">The Club</h5>
                    <p>
                        <a href="resort.html">Clubhouse</a><br>
                        <a href="resort.html">Officers &amp; Council </a><br>
                        <a href="resort.html">History</a><br>
                        <a href="resort.html">Locality</a><br>
                        <a href="media-gallery.html">Gallery</a><br>
                    </p>
                </aside>
                <aside class="col-lg-2 col-md-3 col-sm-4 widget">
                    <h5 class="widget-title">The Courses</h5>
                    <p>
                        <a href="activities.html">Headfort Old</a><br>
                        <a href="activities.html">Headfort New</a><br>
                        <a href="activities.html">Rankings</a><br>
                        <a href="activities.html">Practice Facilities</a><br>
                        <a href="media-gallery.html">Flora and Fauna</a><br>
                    </p>
                </aside>
                <aside class="col-lg-2 col-md-3 col-sm-4 widget">
                    <h5 class="widget-title">Visitors</h5>
                    <p>
                        <a href="room-view.html">Visitor Booking</a><br>
                        <a href="members.html">Green Fees</a><br>
                        <a href="resort.html">Societies / Groups</a><br>
                        <a href="members.html">Testimonials</a><br>
                    </p>
                </aside>
                <aside class="col-lg-2 col-md-3 col-sm-4 widget">
                    <a href="index-2.html"><img src="images/logo-leisure.png" alt=""></a>
                </aside>
            </div>

    @endsection