@extends ('master')

@section ('page-title')
<title>{{ __('Self Bonding Wire')}} - {{__('Huaye Technology') }}</title>
@endsection

@section('content')
<section id="bec-page">
    <section class="hero is-light is-large">
        <div class="hero-body">
            <div class="container">
                <h1 class="title"></h1>
            </div>
        </div>
    </section>

    <section class="section container">
        <section class="section">
            <p class="is-size-3 has-text-black has-text-weight-bold">{{ __('Self bonding enameled copper wire is a special type of enameled wire, with an additional self-bonding coating on the basis of enameled wire.') }}</p>
        </section>
        <section class="section tile">
            <div class="">
                <img class="" src="{{asset('img/component/product-detail/bec/sw-red-thick-left45.jpg')}}" alt="Bonding Enameled Cooper Wire">
            </div>
            <div class="">
                <img class="" src="{{asset('img/component/product-detail/bec/sw-red-thick-cover.jpg')}}" alt="Bonding Enameled Cooper Wire">
            </div>
            <div class="">
                <img class="" src="{{asset('img/component/product-detail/bec/sw-red-thick-right45.jpg')}}" alt="Bonding Enameled Cooper Wire">
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
                    <th class="has-text-centered has-background-link has-text-white thead-width-desktop">{{__('Hot air self-bonding enameled copper wire')}}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="has-text-centered has-text-grey">LSLOCKY</th>
                    <td class="has-text-centered has-text-grey">{{__('(Hot air) low soldering temperature self-bonding polyurethane enameled round copper wire. diameter: 0.018mm---0.050mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LSLOCKCS</th>
                    <td class="has-text-centered has-text-grey">{{__('(Hot air) low soldering temperature self-bonding polyurethane enameled round copper wire. diameter: 0.051mm---0.700mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LOCKY</th>
                    <td class="has-text-centered has-text-grey">{{__('(Hot air) self-bonding polyurethane enameled round copper wire. diameter: 0.018mm---0.050mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LOCKYZ</th>
                    <td class="has-text-centered has-text-grey">{{__('(Hot air) self-bonding polyurethane enameled round copper wire. diameter: 0.018mm---0.050mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LOCKCS</th>
                    <td class="has-text-centered has-text-grey">{{__('(Hot air) self-bonding polyurethane enameled round copper wire. diameter: 0.051mm---0.700mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LOCKCZ</th>
                    <td class="has-text-centered has-text-grey">{{__('(Hot air) self-bonding polyurethane enameled round copper wire. diameter: 0.051mm---0.700mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">SBEIW</th>
                    <td class="has-text-centered has-text-grey">{{__('(Hot air) self-bonding polyesterimide enameled round copper wire. diameter: 0.051mm---0.700mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">SBAIW</th>
                    <td class="has-text-centered has-text-grey">{{__('(Hot air) self-bonding polyamidimide enameled round copper wire. diameter: 0.051mm---0.700mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">SBEI/AIW</th>
                    <td class="has-text-centered has-text-grey">{{__('(Hot air) self-bonding polyesterimide compound polyamidimide enameled round copper wire. diameter: 0.051mm---0.700mm.')}}</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="section is-medium container">
        <table class="table is-striped is-hoverable is-fullwidth is-bordered">
            <thead>
                <tr>
                    <th class="has-text-centered has-background-link has-text-white thead-width-desktop">{{__('Alcohol self-bonding enameled copper wire')}}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="has-text-centered has-text-grey">LSLOCKM</th>
                    <td class="has-text-centered has-text-grey">{{__('(Alcohol) low welding temperature self-bonding polyurethane enameled round copper wire. diameter: 0.018mm---0.050mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LSLOCKB</th>
                    <td class="has-text-centered has-text-grey">{{__('(Alcohol) low welding temperature self-bonding polyurethane enameled round copper wire. diameter: 0.051mm---0.700mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LOCKM</th>
                    <td class="has-text-centered has-text-grey">{{__('(Alcohol) self-bonding polyurethane enameled round copper wire. diameter: 0.018mm---0.050mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LOCKMZ</th>
                    <td class="has-text-centered has-text-grey">{{__('(Alcohol) self-bonding polyurethane enameled round copper wire. diameter: 0.018mm---0.050mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LOCKB</th>
                    <td class="has-text-centered has-text-grey">{{__('(Alcohol) self-bonding polyurethane enameled round copper wire. diameter: 0.051mm---0.700mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LOCKBZ</th>
                    <td class="has-text-centered has-text-grey">{{__('(Alcohol) self-bonding polyurethane enameled round copper wire. diameter :0.051mm---0.700mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">DBPESVW</th>
                    <td class="has-text-centered has-text-grey">{{__('(Alcohol/Hot air) self-bonding polyester enameled round copper wire. diameter: 0.051mm---0.700mm.')}}</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">DBEISVW</th>
                    <td class="has-text-centered has-text-grey">{{__('(Alcohol/Hot air) self-bonding polyesterimide enameled round copper wire. diameter: 0.051mm---0.700mm.')}}</td>
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
        <img src="{{asset('img/component/product-detail/bec/bec-structure.png')}}" alt="Bonding Enameled Cooper Wire">
    </section>
</section>
@endsection
