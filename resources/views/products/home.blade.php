@extends ('master')

@section ('page-title')
<title>@lang('navi.products-bottom') - @lang('navi.title')</title>
@endsection

@section('content')

<section class="hero is-light is-large is-relative">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title is-size-1 use-noto-900 has-text-black">{{ __('Self Bonding Wire') }}</h1>
            <h2 class="subtitle is-size-4 is-pad-top-10 use-noto-500 has-text-grey-dark">{{ __('for automotive equipment, electro-acoustic devices, sensors, VCM motor') }}</h2>
            <a href="/bec" class="button is-link is-outlined is-large use-noto-500">{{ __('Learn More') }}</a>
        </div>
    </div>

    <div class="hero-foot">
        <div class="image resize-image-28 has-image-centered">
            <img class="at-bottom" src="{{asset('img/component/product/bec-background.png')}}" alt="">
        </div>
    </div>
</section>

<section class="hero is-light is-large is-relative is-margin-top-100">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title is-size-1 use-noto-900 has-text-black">{{ __('Ultra-High Temperature Wire') }}</h1>
            <h2 class="subtitle is-size-4 is-pad-top-10 use-noto-500 has-text-grey-dark">{{ __('for computer motherboards, car inductance, industrial equipment, etc') }}</h2>
            <a href="/uht" class="button is-link is-outlined is-large use-noto-500">{{ __('Learn More') }}</a>
        </div>
    </div>
    <div class="hero-foot">
        <div class="image resize-image-28 has-image-centered">
            <img class="at-bottom" src="{{asset('img/component/product/uht-background.png')}}" alt="">
        </div>
    </div>
</section>

<section class="hero is-light is-large is-relative is-margin-top-100">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title is-size-1 use-noto-900 has-text-black">{{ __('LITZ Wire') }}</h1>
            <h2 class="subtitle is-size-4 is-pad-top-10 use-noto-500 has-text-grey-dark">{{ __('for wireless charging, transformers, lighting systems') }}</h2>
            <a href="/litz" class="button is-link is-outlined is-large use-noto-500">{{ __('Learn More') }}</a>
        </div>
    </div>
    <div class="hero-foot">
        <div class="image resize-image-28 has-image-centered">
            <img class="at-bottom" src="{{asset('img/component/product/litz-background.png')}}" alt="">
        </div>
    </div>
</section>

@endsection
