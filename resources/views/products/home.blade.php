@extends ('master')

@section ('page-title')
<title>@lang('navi.products-bottom') - @lang('navi.title')</title>
@endsection

@section('content')

<section class="hero is-light is-large is-relative">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title is-size-1 use-noto-900">{{ __('Self Bonding Wire') }}</h1>
            <h2 class="subtitle is-size-3 is-pad-top-10 use-noto-500">{{ __('for automotive equipment, electro-acoustic devices, sensors, VCM motor') }}</h2>
            <a href="/products/bec" class="button is-link is-outlined is-large use-noto-500">{{ __('Learn More') }}</a>
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
            <h1 class="title is-size-1 use-noto-900">{{ __('Ultra-High Temperature Wire') }}</h1>
            <h2 class="subtitle is-size-3 is-pad-top-10 use-noto-500">{{ __('for computer motherboards, car inductance, industrial equipment, etc') }}</h2>
            <a href="/products/uht" class="button is-link is-outlined is-large use-noto-500">{{ __('Learn More') }}</a>
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
            <h1 class="title is-size-1 use-noto-900">{{ __('LITZ Wire') }}</h1>
            <h2 class="subtitle is-size-3 is-pad-top-10 use-noto-500">{{ __('for wireless charging, transformers, lighting systems') }}</h2>
            <a href="/products/litz" class="button is-link is-outlined is-large use-noto-500">{{ __('Learn More') }}</a>
        </div>
    </div>
    <div class="hero-foot">
        <div class="image resize-image-28 has-image-centered">
            <img class="at-bottom" src="{{asset('img/component/product/litz-background.png')}}" alt="">
        </div>
    </div>
</section>

@endsection
