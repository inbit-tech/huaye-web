@extends ('master')

@section ('page-title')
<title>{{ __('LITZ Wire')}} - {{__('Huaye Technology') }}</title>
@endsection

@section('content')
<section id="bec-page">
    <section class="hero is-light is-large litz-background-image">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">litz - Top large picture</h1>
            </div>
        </div>
    </section>

    <section class="section container">
        <section class="section">
            <p class="is-size-4 has-text-black has-text-weight-bold">
                {{ __('A stranded enameled wire bundle is a winding wire formed by an undetermined geometric arrangement of a number of small diameters insulated cores with or without a wrapping layer, and the winding wire is a winding wire formed by an undetermined geometric arrangement of a number of small diameters insulated cores with or without a wrapping layer.') }}
            </p>
            <br>
            <p class="is-size-4 has-text-black has-text-weight-bold">
                {{ __('It is widely used in situations where good flexibility and high-frequency performance are needed and is commonly used in applications with operating frequencies between 10 KHz and 5 MHz.') }}
            </p>
        </section>
        <section class="section tile">
            <div class="">
                <img class="" src="{{asset('img/component/product-detail/litz/lb-pink-thin-left45.jpg')}}" alt="LITZ Wire / Silk Served LITZ Wire">
            </div>
            <div class="">
                <img class="" src="{{asset('img/component/product-detail/litz/lb-pink-thin-cover.jpg')}}" alt="LITZ Wire / Silk Served LITZ Wire">
            </div>
            <div class="">
                <img class="" src="{{asset('img/component/product-detail/litz/lb-pink-thin-right45.jpg')}}" alt="LITZ Wire / Silk Served LITZ Wire">
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
                    <th class="has-text-centered has-background-link has-text-white thead-width-desktop">{{ __('LITZ W1re(Non served)') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="has-text-centered has-text-grey">LZ UEW</th>
                    <td class="has-text-centered has-text-grey">{{ __('Solderable polyurethane enameled copper wire bundles.') }}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LZ UEWY</th>
                    <td class="has-text-centered has-text-grey">{{ __('Solderable polyamide composite polyurethane enameled copper wire bundles.') }}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LZ SBUEW</th>
                    <td class="has-text-centered has-text-grey">{{ __('Self-bonding polyurethane enameled copper wire bundles.') }}</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="section is-medium container">
        <table class="table is-striped is-hoverable is-fullwidth is-bordered">
            <thead>
                <tr>
                    <th class="has-text-centered has-background-link has-text-white thead-width-desktop">{{ __('USTC(silk served ) Wire') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="has-text-centered has-text-grey">USTC UEW</th>
                    <td class="has-text-centered has-text-grey">{{ __('Single silk served layer polyurethane enameled copper wire bundles.') }}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">UDTC UEW</th>
                    <td class="has-text-centered has-text-grey">{{ __('Double silk served layer polyurethane enameled copper wire bundles.') }}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">SLUSTC UEW</th>
                    <td class="has-text-centered has-text-grey">{{ __('Acetone double silk served layer polyurethane enameled copper wire bundles.') }}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">HLUSTC UEW</th>
                    <td class="has-text-centered has-text-grey">{{ __('Hot air double silk served layer polyurethane enameled copper wire bundles.') }}</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="section is-medium container">
        <table class="table is-striped is-hoverable is-fullwidth is-bordered">
            <thead>
                <tr>
                    <th class="has-text-centered has-background-link has-text-white thead-width-desktop">{{ __('Mylar Wire') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="has-text-centered has-text-grey">ML-T UEW</th>
                    <td class="has-text-centered has-text-grey">{{ __('PET coating winding wire') }}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">ML-N UEW</th>
                    <td class="has-text-centered has-text-grey">{{ __('PEN coating winding wire') }}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">ML-I UEW</th>
                    <td class="has-text-centered has-text-grey">{{ __('PI coating winding wire') }}</td>
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
        <img src="{{asset('img/component/product-detail/litz/lita-structure.png')}}" alt="LITZ Wire / Silk Served LITZ Wire">
    </section>
</section>
@endsection
