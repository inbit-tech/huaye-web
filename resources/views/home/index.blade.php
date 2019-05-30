@extends ('master')

@section ('page-title')
<title>@lang('navi.title')</title>
@endsection

@section('content')

{{-- Welcome Video --}}
<section class="hero is-large has-background-video is-marginless is-paddingless has-text-centered">
    <div class="hero-video">
        <video poster="{{asset('img/component/home/video-poster.jpg')}}" playsinline autoplay muted loop>
            <source src="{{asset('video/welcome.mp4')}}" type="video/mp4">
        </video>
    </div>
    <div class="hero-body">
        <div class="container is-size-1 is-size-5-mobile use-noto-900 has-text-white">
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
<section class="section is-medium">
    <div class="columns">
        {{-- Column 1 --}}
        <div class="column container">
            <div class="card">
                <div class="card-content has-text-centered">
                    <p class="title use-noto-900 is-size-2 has-text-black is-pad-top-25">{{ __('Self Bonding Wire') }}</p>
                    <p class="subtitle is-size-5 use-noto-500 has-text-centered is-pad-top-25"><a href="/bec">{{ __('Learn More') }}</a></p>
                </div>
                <div class="card-image">
                    <figure class="image is-3by2">
                        <img src="{{asset('img/component/product-detail/bec/sw-red-thick-horizon.jpg')}}" alt="Placeholder image">
                    </figure>
                </div>
            </div>
        </div>
        {{-- Column 2 --}}
        <div class="column">
            <div class="card">
                <div class="card-content has-text-centered">
                    <p class="title use-noto-900 is-size-2 has-text-black is-pad-top-25">{{ __('Ultra-High Temperature Wire') }}</p>
                    <p class="subtitle is-size-5 use-noto-500 has-text-centered is-pad-top-25"><a href="/uht">{{ __('Learn More') }}</a></p>
                </div>
                <div class="card-image">
                    <figure class="image is-3by2">
                        <img src="{{asset('img/component/product-detail/uht/lb-gold-thin-horizon.jpg')}}" alt="Placeholder image">
                    </figure>
                </div>
            </div>
        </div>
        {{-- Column 3 --}}
        <div class="column">
            <div class="card">
                <div class="card-content has-text-centered">
                    <p class="title use-noto-900 is-size-2 has-text-black is-pad-top-25">{{ __('LITZ Wire') }}</p>
                    <p class="subtitle is-size-5 use-noto-500 has-text-centered is-pad-top-25"><a href="/litz">{{ __('Learn More') }}</a></p>
                </div>
                <div class="card-image">
                    <figure class="image is-3by2">
                        <img src="{{asset('img/component/product-detail/litz/lb-pink-thin-horizon.jpg')}}" alt="Placeholder image">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Our Team --}}
<section class="hero is-fullheight">
    <div class="hero-body team-background-image is-marginless is-paddingless image is-16by9">
        <div class="container">
            <h1 class="title use-noto-900 is-size-1 has-text-centered has-text-white is-shadow-8">@lang('home.team')</h1>
            <h2 class="subtitle use-note-500 is-size-3 has-text-centered has-text-white is-pad-top-25 is-shadow-8">{{ __('Be Excellence, Branding Impact, Intelligent Future') }}</h2>
            <div class="buttons is-centered is-pad-top-25">
                <a href="/about" class="button is-link is-large">{{ __('Learn More') }}</a>
            </div>
        </div>
    </div>
</section>

{{-- Our Clients --}}
<section class="section">
    <div class="section is-medium">
        <h1 class="title is-size-1 has-text-centered has-text-black use-noto-900">@lang('home.client')</h1>
    </div>
    <div class="section">
        <div class="columns is-multiline is-vcentered has-text-centered">
            <div class="column">
                <img class="resize-smaller-52" src="{{asset('img/clients/client-18.png')}}" alt="huaye-patents">
            </div>
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
        </div>
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
    </div>
</section>
@endsection
