<div class="header-row clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 absolute-header text-uppercase">
                <div class="pull-left"><i class="fa fa-map-marker"></i>Kano State, Nigeria</div>
                <div class="pull-right">
                    <span class="weather">Friday <i data-icon="B"></i> 24&deg;C</span>
                    <span class="weather">Saturday <i data-icon="F"></i> 21&deg;C</span>

                        <a href="{{ url('/signUp') }}"><i class="fa fa-sign-out "></i>SignUp</a>
                        <a href="{{ url('/signIn') }}"><i class="fa fa-sign-in"></i>Login</a>

                </div>
            </div>
        </div>
    </div>
    <nav role="navigation" id="main-nav">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="{{ route('index') }}" id="logo"><img src="{{ asset('front/images/logo-leisure.png') }}" alt=""></a>
                    <input type="checkbox" id="toggle-main-nav" class="toggle-nav-input">
                    <ul id="menu-main-menu" class="menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item current_page_item">
                            <a href="{{ route('index') }}"><i class="fa fa-home hidden-xs"></i><span class="visible-xs-inline">Home</span></a>
                        </li>

                        <li class="menu-item menu-item-type-custom menu-item-object-custom">
                            <a href="{{ route('index') }}">Home</a>
                        </li>

                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-parent-item">
                            <a href="#">Rooms</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ route('rooms') }}">Rooms Listing</a>
                                </li>

                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ route('room.category') }}">Pricing</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item menu-item-type-custom menu-item-object-custom">
                            <a href="{{ route('event.index') }}">Events</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="{{ route('gallery') }}">Gallery</a>
                        </li>


                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-parent-item">
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="search-button hidden-xs"><i class="fa fa-search"></i></a>
                            <form id="search-form-inline" action="https://demo.curlythemes.com/html/leisure/search.html" class="visible-xs-block" role="search">
                                <input type="text" class="search-field" placeholder="Type something to search  ...">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <form id="search-form" action="https://demo.curlythemes.com/html/leisure/search.html" class="hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <input type="text" class="search-field" placeholder="Type something to search  ...">
                        <a href="#" class="close-search fa fa-search"></a>
                    </div>
                </div>
            </div>
        </form>
    </nav>
    <nav role="navigation" id="secondary-nav">
        <div class="container">
            <input type="checkbox" class="toggle-nav-input" id="toggle-secondary-nav">
            <ul class="menu">
                <li class="menu-item">

                    <a href="{{ route('rooms') }}">Accomodation <em>Rooms &amp; Suites</em></a>
                    <ul class="sub-menu bg-accomodation">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Standard Rooms</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Deluxe Suites</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Beach Bungalow</a>
                        </li>

                    </ul>
                </li>

                <li class="menu-item pull-right">
                    <a href="{{ route('gallery') }}">Swimming Pools <em>Outdoor &amp; Indoor</em></a>
                    <ul class="sub-menu bg-pool">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Day &amp; Night Pool</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Outdoor Pools</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Indoor Pools</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </nav>