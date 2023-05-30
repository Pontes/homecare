@extends('site.layout')
@section('title','Página Home')
@section('content')
    <div class="container">
        <div class="principal">
            <div class="row">
                <div class="col-md-12 pb-3">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <a href="/google-auth/redirect" class="btn btn-light"><i class="bi bi-google"></i> Entrar com Google</a>
                                <a href="{{ route('login') }}" class="btn btn-light">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn - btn-light">Cadastrar</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div id="banner-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#banner-carousel" data-slide-to="1"></li>
                        <li data-target="#banner-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="background-image: url('{{asset("caroussel/banner1.jpg")}}');"></div>
                        <div class="carousel-item" style="background-image: url('{{asset("caroussel/banner2.jpg")}}');"></div>
                        <div class="carousel-item" style="background-image: url('{{asset("caroussel/banner3.jpg")}}');"></div>
                    </div>
                    <a class="carousel-control-prev" href="#banner-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#banner-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
