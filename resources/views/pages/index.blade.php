@extends('layouts.app')
    @section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md tracking-in-expand" id="masthead">
                {{$title}}
                <h4></h4>
            </div>

            <div class="links tracking-in-expand">
                <a href="{{url('/posts')}}">Blog</a>
                <a href="{{url('/services')}}">Services</a>
                <a href="{{url('/about')}}">About</a>
                <a href="{{url('/contact')}}">Contact</a>
                <a href="{{url('/portfolio')}}">Portfolio</a>
            </div>
        </div>
    </div>
    @endsection
                
            
        