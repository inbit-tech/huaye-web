@extends ('master')

@section ('page-title')
<title>@lang('navi.title')</title>
@endsection

@section('content')

{{-- Welcome Image Slider --}}
<section class="hero is-light is-large with-video-bg">
    <div class="hero-video">
        <video poster="{{asset('img/component/home/video-poster.jpg')}}" playsinline autoplay muted loop>
            <source src="{{asset('video/welcome.mp4')}}" type="video/mp4">
        </video>
    </div>
    <div class="hero-body is-large">
        <div class="container is-size-1 is-size-5-mobile has-text-centered use-noto-900 has-text-white">
            <div id="typed-strings">
                <p>@lang('home.welcome')</p>
                <p>@lang('home.company')</p>
                <p>@lang('home.domain')</p>
                <p>@lang('home.location')</p>
                <p>@lang('home.huaye')</p>
            </div>
            <span id="typed"></span>
        </div>
    </div>
</section>

{{-- Our Products --}}
<section class="section is-medium light-grey">
    <div class="tile is-ancestor is-size-2">
        <div class="tile is-parent">
            <article class="tile is-child box has-text-centered">
                <p class="title use-noto-900">@lang('navi.prod1')</p>
                <figure class="image is-4by3">
                    <img src="{{asset('img/component/product-detail/bec/sw-red-thick-horizon.jpg')}}" alt="Bonding Enameled Cooper Wire">
                </figure>
            </article>
        </div>
        <div class="tile is-parent has-text-centered">
            <article class="tile is-child box">
                <p class="title use-noto-900">@lang('navi.prod2')</p>
                <figure class="image is-4by3">
                    <img src="{{asset('img/component/product-detail/uht/lb-gold-thin-horizon.jpg')}}" alt="Ultra-High-Temperature Wire">
                </figure>
            </article>
        </div>
        <div class="tile is-parent has-text-centered">
        <article class="tile is-child box">
            <p class="title use-noto-900">@lang('navi.prod3')</p>
            <figure class="image is-4by3">
                <img src="{{asset('img/component/product-detail/litz/lb-pink-thin-horizon.jpg')}}" alt="LITZ Wire / Silk Served LITZ Wire">
            </figure>
        </article>
        </div>
    </div>
</section>

{{-- Team --}}
<section class="section">
    <div class="container">
        <h1 class="title is-size-1 has-text-centered use-noto-900">@lang('home.team')</h1>
    </div>
    <figure class="team-bg-section image">
        <img src="{{asset('img/component/home/team-member-cover.png')}}" alt="huaye team">
    </figure>
</section>

{{-- Our Patents --}}
<section class="section is-medium">
    <div class="section container is-medium">
        <h1 class="title is-size-1 has-text-centered use-noto-900">@lang('home.client')</h1>
    </div>
    <div class="container">
        <div class="columns is-multiline is-vcentered has-text-centered">
            <div class="column">
                <img class="resize-smaller-52" src="{{asset('img/clients/client-01.png')}}" alt="huaye-patents">
            </div>
            <div class="column">
                <img class="resize-smaller-42" src="{{asset('img/clients/client-02.png')}}" alt="huaye-patents">
            </div>
            <div class="column">
                <img class="resize-smaller-36" src="{{asset('img/clients/client-03.png')}}" alt="huaye-patents">
            </div>
            <div class="column">
                <img class="resize-smaller-52" src="{{asset('img/clients/client-04.png')}}" alt="huaye-patents">
            </div>
            <div class="column">
                <img src="{{asset('img/clients/client-05.png')}}" alt="huaye-patents">
            </div>
            <div class="column">
                <img src="{{asset('img/clients/client-06.png')}}" alt="huaye-patents">
            </div>        
        </div>
        <div class="columns is-multiline is-vcentered has-text-centered">
            <div class="column">
                <img class="resize-smaller-50" src="{{asset('img/clients/client-07.png')}}" alt="huaye-patents">
            </div>
            <div class="column">
                <img src="{{asset('img/clients/client-08.png')}}" alt="huaye-patents">
            </div>
            <div class="column">
                <img src="{{asset('img/clients/client-09.png')}}" alt="huaye-patents">
            </div>
            <div class="column">
                <img src="{{asset('img/clients/client-10.png')}}" alt="huaye-patents">
            </div>          
            <div class="column">
                <img class="resize-smaller-42" src="{{asset('img/clients/client-11.png')}}" alt="huaye-patents">
            </div>  
            <div class="column">
                <img src="{{asset('img/clients/client-12.png')}}" alt="huaye-patents">
            </div>
        </div>
        <div class="columns is-multiline is-vcentered has-text-centered">
            <div class="column">
                <img class="resize-smaller-50" src="{{asset('img/clients/client-13.png')}}" alt="huaye-patents">
            </div>
            <div class="column">
                <img src="{{asset('img/clients/client-14.png')}}" alt="huaye-patents">
            </div>
            <div class="column">
                <img src="{{asset('img/clients/client-15.png')}}" alt="huaye-patents">
            </div>
            <div class="column">
                <img src="{{asset('img/clients/client-16.png')}}" alt="huaye-patents">
            </div>
            <div class="column">
                <img src="{{asset('img/clients/client-17.png')}}" alt="huaye-patents">
            </div>
            <div class="column">
                <img class="resize-smaller-52" src="{{asset('img/clients/client-18.png')}}" alt="huaye-patents">
            </div>
        </div>
    </div>
</section>
@endsection
