@extends('layouts.app')
     @section('content')

      {{--   <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div> --}}
         @include('widgets.slider')

<!-- nos coiffeuses-->
      @include('widgets.coiffeuses')

        <!--// nos coiffeuses-->
     @include('widgets.testimonials')
     
      @include('widgets.blog')
      @include('widgets.clients')
   
@stop
