@extends ('master')

@section ('page-title')
<title>@lang('navi.title')</title>
@endsection

@section('content')

{{-- Welcome Image Slider --}}
<section class="hero is-light is-large">
    <div class="home-video-section">
        <video  loop controls id="home-video-content">
            <source src="http://pqpazom17.bkt.clouddn.com/testVideo.mp4">
        </video>
        <div class="has-text-white-bis is-size-1 is-size-5-mobile has-text-weight-bold has-text-centered video-text">
            <div id="typed-strings">
                <p>HUAYE TECHNOLOGY<br>Dongguan China</p>
            </div>
            <span id="typed"></span>
        </div>
    </div>
</section>

{{-- Our Products --}}
<section class="section is-medium light-grey">
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child box has-text-centered">
                <p class="title">@lang('navi.prod1')</p>
                <p class="subtitle">Self bonding enameled copper wire is a special type of enameled wire.</p>
                <figure class="image is-4by3">
                    <img src="{{asset('img/component/product-detail/bec/sw-red-thick-horizon.jpg')}}" alt="Bonding Enameled Cooper Wire">
                </figure>
            </article>
        </div>
        <div class="tile is-parent has-text-centered">
            <article class="tile is-child box">
                <p class="title">@lang('navi.prod2')</p>
                <p class="subtitle">Enameled copper wire is one of main varieties of winding wire.</p>
                <figure class="image is-4by3">
                    <img src="{{asset('img/component/product-detail/uht/lb-gold-thin-horizon.jpg')}}" alt="Ultra-High-Temperature Wire">
                </figure>
            </article>
        </div>
        <div class="tile is-parent has-text-centered">
        <article class="tile is-child box">
            <p class="title">@lang('navi.prod3')</p>
            <p class="subtitle">Litz wire is a winding wire consisting of a number of small diameter </p>
            <figure class="image is-4by3">
                <img src="{{asset('img/component/product-detail/litz/lb-pink-thin-horizon.jpg')}}" alt="LITZ Wire / Silk Served LITZ Wire">
            </figure>
        </article>
        </div>
    </div>
</section>

{{-- Production Line Video --}}
{{-- <section class="hero is-light is-large">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">Production Line</h1>
            <h2 class="subtitle">Video</h2>
        </div>
    </div>
</section> --}}

{{-- Team --}}
<section class="section">
    <div class="container">
        <h1 class="title is-size-2 has-text-centered has-text-weight-bold">Our Team</h1>
    </div>
    <figure class="image">
        <img src="{{asset('img/component/home/our-team.png')}}" alt="huaye team">
    </figure>
</section>

{{-- Our Patents --}}
<section class="section is-medium">
    <div class="container">
        <h1 class="title is-size-2 has-text-centered has-text-weight-bold">Our Clients</h1>
    </div>
    <div class="section is-medium container">
        <div class="columns is-multiline is-vcentered has-text-centered">
            <div class="column">
                <figure class="">
                    <img src="{{asset('img/clients/client-01.png')}}" alt="huaye-patents">
                </figure>
            </div>
            <div class="column">
                <figure class="">
                    <img src="{{asset('img/clients/client-02.png')}}" alt="huaye-patents">
                </figure>
            </div>
            <div class="column">
                <figure class="">
                    <img src="{{asset('img/clients/client-03.png')}}" alt="huaye-patents">
                </figure>
            </div>
            <div class="column">
                <figure class="">
                    <img src="{{asset('img/clients/client-04.png')}}" alt="huaye-patents">
                </figure>
            </div>
        </div>
        <div class="columns is-multiline is-vcentered has-text-centered">
            <div class="column">
                <figure class="">
                    <img src="{{asset('img/clients/client-05.png')}}" alt="huaye-patents">
                </figure>
            </div>
            <div class="column">
                <figure class="">
                    <img src="{{asset('img/clients/client-06.png')}}" alt="huaye-patents">
                </figure>
            </div>
            <div class="column">
                <figure class="">
                    <img src="{{asset('img/clients/client-07.png')}}" alt="huaye-patents">
                </figure>
            </div>
            <div class="column">
                <figure class="">
                    <img class="is-square" src="{{asset('img/clients/client-08.png')}}" alt="huaye-patents">
                </figure>
            </div>
        </div>
        <div class="columns is-multiline is-vcentered has-text-centered">
            <div class="column">
                <figure class="">
                    <img class="is-square" src="{{asset('img/clients/client-09.png')}}" alt="huaye-patents">
                </figure>
            </div>
            <div class="column">
                <figure class="">
                    <img class="is-square" src="{{asset('img/clients/client-10.png')}}" alt="huaye-patents">
                </figure>
            </div>
            <div class="column">
                <figure class="">
                    <img class="is-square" src="{{asset('img/clients/client-11.png')}}" alt="huaye-patents">
                </figure>
            </div>
            <div class="column">
                <figure class="">
                    <img class="is-square" src="{{asset('img/clients/client-12.png')}}" alt="huaye-patents">
                </figure>
            </div>
        </div>
        <div class="columns is-multiline is-vcentered has-text-centered">
            <div class="column">
                <figure class="">
                    <img class="is-square" src="{{asset('img/clients/client-13.png')}}" alt="huaye-patents">
                </figure>
            </div>
            <div class="column">
                <figure class="">
                    <img class="is-square" src="{{asset('img/clients/client-14.png')}}" alt="huaye-patents">
                </figure>
            </div>
            <div class="column">
                <figure class="">
                    <img class="is-square" src="{{asset('img/clients/client-15.png')}}" alt="huaye-patents">
                </figure>
            </div>
            <div class="column">
                <figure class="">
                    <img class="is-square" src="{{asset('img/clients/client-16.png')}}" alt="huaye-patents">
                </figure>
            </div>
        </div>
    </div>
</section>
@endsection
