@extends ('master')

@section ('page-title')
<title>@lang('navi.products-bottom') - @lang('navi.title')</title>
@endsection

@section('content')
<section class="product-card tile is-vertical has-text-centered  has-background-light">
    <div class="section is-medium">
        <div class="section">
            <p><strong class="is-size-1 has-text-black use-noto-900">{{ __('Self Bonding Wire') }}</strong></p>
            <p class="product-text-m-t is-size-3 has-text-black use-noto-500">{{ __('for automotive equipment, electro-acoustic devices, sensors, VCM motor') }}</p>
        </div>
        <div class="section">
            <a href="/products/bec" class="has-text-link"><p class="is-size-4 use-noto-900">{{ __('Learn More') }}</p></a>
        </div>
    </div>
    <div class="container">
        <img class="product-img" src="{{asset('img/component/product/bec-background.png')}}" alt="Bonding Enameled Cooper Wire">
    </div>
</section>

<section class="product-card tile is-vertical has-text-centered  has-background-light">
    <div class="section is-medium">
        <div class="section">
            <p><strong class="is-size-1 has-text-black use-noto-900">超 高 耐 温 漆 包 线</strong></p>
            <p class="product-text-m-t is-size-3 has-text-black use-noto-500">用于电脑主板、车用电感、工业设备等</p>
        </div>
        <div class="section">
            <a href="/products/uht" class="has-text-link"><p class="is-size-4 use-noto-900">{{ __('Learn More') }}</p></a>
        </div>
    </div>
    <div class="container">
        <img class="product-img" src="{{asset('img/component/product/uht-background.png')}}" alt=" Ultra-High-Temperature Wire">
    </div>
    </section>

<section class="product-card tile is-vertical has-text-centered  has-background-light">
    <div class="section is-medium">
        <div class="section">
            <p><strong class="is-size-1 has-text-black use-noto-900">LITZ 线</strong></p>
            <p class="product-text-m-t is-size-3 has-text-black use-note-500">用于无线充电、变压器、照明系统</p>
        </div>
        <div class="section">
            <a href="/products/litz" class="has-text-link"><p class="is-size-4 use-noto-900">{{ __('Learn More') }}</p></a>
        </div>
    </div>
    <div class="container">
        <img class="product-img" src="{{asset('img/component/product/litz-background.png')}}" alt="LITZ Wire / Silk Served LITZ Wire">
    </div>
</section>

@endsection
