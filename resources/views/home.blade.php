@extends('layouts.app')
@section('content')
<section>
    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
                </div>
                <div class="social-links d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
        <!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
             
                    
                    <h1 class="sitename">Bianca Cinema</h1>
                    <span>.</span>
                

                <nav id="navmenu" class="navmenu ">
                    <ul>
                        <li><a href="{{ route('home') }}" class="active text-decoration-none">Home</a></li>
                        @guest
                        <li><a href="{{ route('login') }}" class="text-decoration-none">{{ __('Login') }}</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="text-decoration-none">{{ __('Register') }}</a></li>
                        @endif
                        @endguest

                        @auth
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endauth

                        <li><a href="#team" class="text-decoration-none">Team</a></li>
                        <li><a href="#contact" class="text-decoration-none">Contact</a></li>

                        @auth
                        <li><a href="{{url('rooms')}}" class="text-decoration-none">{{__('Rooms')}}</a></li>
                        @endauth
                    </ul>

                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                        <h1>Welcome to <span>Cinema Bianca</span></h1>
                        <div class="d-flex">
                            @auth
                            <a href="{{ route('home') }}" class="btn-get-started scrollto text-decoration-none">Get Started</a>
                            @endauth
                            @guest
                            <a href="{{ route('login') }}" class="btn-get-started scrollto text-decoration-none">Get Started</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /Hero Section -->







</section>
@endsection