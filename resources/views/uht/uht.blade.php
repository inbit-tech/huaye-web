@extends ('master')

@section ('page-title')
<title>{{ __('Ultra-High Temperature Wire')}} - {{__('Huaye Technology') }}</title>
@endsection

@section('content')
<section id="uht-page">
    <section class="hero is-light is-large uht-background-image">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">uht - Top large picture</h1>
            </div>
        </div>
    </section>

    <section class="section container">
        <section class="section">
            <p class="is-size-3 has-text-black has-text-weight-bold">{{ __('Enameled copper wire is one of the main varieties of winding wire, consisting of conductor and insulation coating. After annealing to soft enough, several enameling and baking steps, the bare wire becomes the enameled copper wire.') }}</p>
        </section>
        <section class="section tile">
            <div class="">
                <img class="" src="{{asset('img/component/product-detail/uht/lb-gold-thin-left45.jpg')}}" alt="Ultra-High-Temperature Wire">
            </div>
            <div class="">
                <img class="" src="{{asset('img/component/product-detail/uht/lb-gold-thin-cover.jpg')}}" alt="Ultra-High-Temperature Wire">
            </div>
            <div class="">
                <img class="" src="{{asset('img/component/product-detail/uht/lb-gold-thin-right45.jpg')}}" alt="Ultra-High-Temperature Wire">
            </div>
        </section>
    </section>

    <section class="section">
        <div class="container has-background-link has-text-white side-bar-text is-size-3 is-size-4-mobile ">
            <p>{{ __('Model identification') }}</p>
        </div>
    </section>

    <section class="section is-medium container">
        <table class="table is-striped is-hoverable is-fullwidth is-bordered">
            <thead>
                <tr>
                    <th class="has-text-centered has-background-link has-text-white thead-width-desktop">{{ __('Enameled copper wire') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="has-text-centered has-text-grey">UEW</th>
                    <td class="has-text-centered has-text-grey">{{ __('Solderable polyurethane enameled round copper wire.') }}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">UEWY</th>
                    <td class="has-text-centered has-text-grey">{{ __('Solderable polyamide polyurethane enameled round copper wire.') }}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">SEIW</th>
                    <td class="has-text-centered has-text-grey">{{ __('Solderable polyesterim1de enameled round copper wire.') }}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">EIW</th>
                    <td class="has-text-centered has-text-grey">{{ __('Polyesterimide enameled round copper wire.') }}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">EI/AIW</th>
                    <td class="has-text-centered has-text-grey">{{ __('Polyamidimide compound polyesterimide enameled round copper wire.') }}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">AIW</th>
                    <td class="has-text-centered has-text-grey">{{ __('Polyam1dimide enameled round copper wire.') }}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">PIW</th>
                    <td class="has-text-centered has-text-grey">{{ __('Aromatic polyimide enameled round copper wire.') }}</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="section">
        <div class="container has-background-link has-text-white side-bar-text is-size-3 is-size-4-mobile ">
            <p>{{__('Structure diagram')}}</p>
        </div>
    </section>

    <section class="section container has-text-centered">
        <img src="{{asset('img/component/product-detail/uht/uht-structure.png')}}" alt="Ultra-High-Temperature Wire">
    </section>
</section>
@endsection
