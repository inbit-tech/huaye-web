@extends ('master')

@section ('page-title')
<title>@lang('navi.about') - @lang('navi.title')</title>
@endsection

@section('content')
<section class="hero is-light is-large about-background-image is-marginless is-paddingless">
    <div class="hero-body">
        <div class="container">
            <h1 class="title use-noto-900 is-size-1 has-text-white has-text-centered is-shadow-8">@lang('navi.about')</h1>
        </div>
    </div>
</section>

<section id="our-quality" class="section is-medium container">
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child box has-text-centered">
                <p class="title use-noto-900 is-size-2 is-uppercase has-text-black">{{__('Belief') }}</p>
                <div class="content is-size-4 use-not0-500 has-text-grey-dark">
                    <p>{{__('Quality is the life of enterprises') }}</p>
                </div>
            </article>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child box has-text-centered">
                <p class="title use-noto-900 is-size-2 is-uppercase has-text-black">{{__('System') }}</p>
                <div class="content is-size-4 use-not0-500 has-text-grey-dark">
                    <p>{{__('Whole process monitoring and perfect quality assurance system') }}</p>
                </div>
            </article>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child box has-text-centered">
                <p class="title use-noto-900 is-size-2 is-uppercase has-text-black">{{__('Hardware') }}</p>
                <div class="content is-size-4 use-not0-500 has-text-grey-dark">
                    <p>{{__('Standardized testing center and serious data sources control') }}</p>
                </div>
            </article>
        </div>
    </div>

    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child box has-text-centered">
                <p class="title use-noto-900 is-size-2 is-uppercase has-text-black">{{__('Security') }}</p>
                <div class="content is-size-4 use-not0-500 has-text-grey-dark">
                    <p>{{__('Scientific data analysis method, ensure quality precision') }}</p>
                </div>
            </article>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child box has-text-centered">
                <p class="title use-noto-900 is-size-2 is-uppercase has-text-black">{{__('Control') }}</p>
                <div class="content is-size-4 use-not0-500 has-text-grey-dark">
                    <p>{{__('High quality control standards and every spool checking to keep products in high consistency') }}</p>
                </div>
            </article>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child notification is-link">
                <p class="title is-size-1 use-noto-900 is-uppercase">{{ __('Quality Assurance') }}</p>
            </article>
        </div>
    </div>
</section>

<section id="our-story" class="section hero is-light is-fullheight history-background-image is-marginless is-paddingless">
    <div class="hero-body has-text-centered has-text-white">
        <div class="container">
            <h1 class="title has-text-white use-noto-900 is-sizie-2 is-uppercase is-shadow-8">{{ __('Huaye Technology') }}</h1>
        </div>
    </div>
</section>

<section id="our-service" class="section container is-large">
    <p class="has-text-centered is-size-1 has-text-black use-noto-900">{{ __('Sincere Trust, Unity, Create, Share')}}<br>{{ __('Customer Experience, Client Needs Adoption, Quick Respond, Customizable Production') }}</p> 
</section>

<section class="section is-small">
    <div class="section container team-advantages-margin">
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-7">
                <div class="tile is-parent">
                    <article class="tile is-child has-text-left">
                        <p class="services-description-big-text has-text-black use-noto-900">{{ __('Specializing') }}</p>
                        <p class="is-size-2 is-size-3-mobile has-text-grey use-noto-500">{{ __('in customized production, meet the special requirement of the product') }}</p>
                    </article>
                </div>
            </div>
            <div class="tile is-parent is-5">
                <article class="tile is-child has-text-right">
                    <img src="{{asset('img/component/about/services-img-1.png')}}" alt="advantages of Huaye">
                </article>
            </div>
        </div>
    </div>

    <div class="section container is-medium">
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-5">
                <div class="tile is-parent">
                    <article class="tile is-child has-text-left">
                        <img src="{{asset('img/component/about/services-img-2.png')}}" alt="advantages of Huaye">
                    </article>
                </div>
            </div>
            <div class="tile is-parent is-7">
                <article class="tile is-child has-text-right">
                    <p class="services-description-big-text has-text-black use-noto-900">{{ __('Rapid') }}</p>
                    <p class="is-size-2 is-size-3-mobile has-text-grey use-noto-500">{{ __('response, provide efficiency benefits') }}</p>
                </article>
            </div>
        </div>
    </div>

    <div class="section container is-medium">
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-7">
                <div class="tile is-parent">
                    <article class="tile is-child has-text-left">
                        <p class="services-description-big-text has-text-black use-noto-900">{{ __('Free') }}</p>
                        <p class="is-size-2 is-size-3-mobile has-text-grey use-noto-500">{{ __('sample mode, reduce customer development costs') }}</p>
                    </article>
                </div>
            </div>
            <div class="tile is-parent is-5">
                <article class="tile is-child has-text-right">
                    <img src="{{asset('img/component/about/services-img-3.png')}}" alt="advantages of Huaye">
                </article>
            </div>
        </div>
    </div>

    <div class="section container is-medium">
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-5">
                <div class="tile is-parent">
                    <article class="tile is-child">
                        <img src="{{asset('img/component/about/services-img-4.png')}}" alt="advantages of Huaye">
                    </article>
                </div>
            </div>
            <div class="tile is-parent is-7">
                <article class="tile is-child has-text-right">
                    <p class="services-description-big-text has-text-black use-noto-900">{{ __('Assist') }}</p>
                    <p class="is-size-2 is-size-3-mobile has-text-grey use-noto-500">{{ __('customers with wire application solutions') }}</p>
                </article>
            </div>
        </div>
    </div>

    <div class="section container is-medium">
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-7">
                <div class="tile is-parent">
                    <article class="tile is-child has-text-left">
                        <p class="services-description-big-text has-text-black use-noto-900">{{ __('Small') }}</p>
                        <p class="is-size-2 is-size-3-mobile has-text-grey use-noto-500">{{ __('MOQ, abundant variety, fast and accurate delivery') }}</p>
                    </article>
                </div>
            </div>
            <div class="tile is-parent is-5">
                <article class="tile is-child has-text-right">
                    <img src="{{asset('img/component/about/services-img-5.png')}}" alt="advantages of Huaye">
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
