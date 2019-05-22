@extends ('master')

@section ('page-title')
<title>{{ __('Self Bonding Wire')}} - {{__('Huaye Technology') }}</title>
@endsection

@section('content')
<section id="bec-page">
    <section class="hero is-light is-large bondwire-background-image">
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
            <div>
                <img src="{{asset('img/component/product-detail/bec/sw-red-thick-left45.jpg')}}" alt="Bonding Enameled Cooper Wire">
            </div>
            <div class="">
                <img src="{{asset('img/component/product-detail/bec/sw-red-thick-cover.jpg')}}" alt="Bonding Enameled Cooper Wire">
            </div>
            <div class="">
                <img src="{{asset('img/component/product-detail/bec/sw-red-thick-right45.jpg')}}" alt="Bonding Enameled Cooper Wire">
            </div>
        </section>
    </section>

    <section class="section is-medium">
        <div class="container has-background-link has-text-white side-bar-text is-size-4 ">
            <p>{{ __('Model identification') }}</p>
        </div>
    </section>

    <section class="section container">
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

    <section class="section container">
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

    <section class="section is-medium">
        <div class="container has-background-link has-text-white side-bar-text is-size-4 ">
            <p>{{__('Structure diagram')}}</p>
        </div>
    </section>

    <section class="section container has-text-centered">
        <img src="{{asset('img/component/product-detail/bec/bec-structure.png')}}" alt="Bonding Enameled Cooper Wire">
    </section>

    <section class="section is-medium container has-text-centered is-hidden-desktop">
        <p  class="container has-background-link has-text-white side-bar-text is-size-4 ">{{__('For more documentation, please view on PC')}}</p>
    </section>

    <section class="is-hidden-touch">
        <section class="section is-medium">
            <div class="container has-background-link has-text-white side-bar-text is-size-4">
                <p>{{__('Enameled Copper Wire Product List (Self bonding)')}}</p>
            </div>
        </section>

        <section class="section container">
            <table class="table is-striped is-bordered is-narrow is-size-7 is-size-6-fullhd">
                <thead>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Product type')}}</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="3">{{__('Bonding method')}}</th>
                        <th class="has-text-centered has-text-white" colspan="6">{{__('Compound inner coating types')}}</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Bonding temperature range')}}<br>℃</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Features and main applications')}}</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Re-softening temperature(reference)')}}<br>℃</th>
                    </tr>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white">{{__('Alcohol')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Hot air')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('resistance bonding')}}</th> 
                        <th class="has-text-centered has-text-white">LSUEW</th> 
                        <th class="has-text-centered has-text-white">UEW</th> 
                        <th class="has-text-centered has-text-white">PEW</th> 
                        <th class="has-text-centered has-text-white">EIW</th> 
                        <th class="has-text-centered has-text-white">EI/AIW</th> 
                        <th class="has-text-centered has-text-white">AIW</th>  				
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="has-text-centered has-text-grey">LSLOCK</td>
                        <td class="has-text-centered has-text-grey">0.040~0.200</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">100~160</td>
                        <td class="has-text-centered has-text-grey"><p>{{__('Solvent, hot air, electric bonding can be. Suitable for watch coil, small micro motor, VCM motor, ordinary coil.')}}</p></td>
                        <td class="has-text-centered has-text-grey">90</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">LOCKB</td>
                        <td class="has-text-centered has-text-grey">0.040~0.700</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">---</td>
                        <td class="has-text-centered has-text-grey"><p>{{__('Solvent bonding. Suitable for the voice coil, electric toy, motor, ordinary coil.')}}</p></td>
                        <td class="has-text-centered has-text-grey"><p>140</p></td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">LOCKY</td>
                        <td class="has-text-centered has-text-grey">0.040~0.700</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">140~200</td>
                        <td class="has-text-centered has-text-grey"><p>{{__('Hot air bonding. Suitable for hollow motor coils, small motors, printhead coils, card coils.')}}</p></td>
                        <td class="has-text-centered has-text-grey">100~170</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">SBPEW</td>
                        <td class="has-text-centered has-text-grey">0.040~0.700</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">150~170</td>
                        <td class="has-text-centered has-text-grey"><p>{{__('Heat curing bond, strong bond strength. Suitable for the high power voice coil, fan motor.')}}</p></td>
                        <td class="has-text-centered has-text-grey">180</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">SBEIW</td>
                        <td class="has-text-centered has-text-grey">0.040~0.700</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">190~210</td>
                        <td class="has-text-centered has-text-grey"><p>{{__('Heat curing bond, strong bond strength. The heat resistance temperature is higher than that of SBPEW. Suitable for the high power voice coil, fan motor.')}}</p></td>
                        <td class="has-text-centered has-text-grey">180</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">SBEI/AIW</td>
                        <td class="has-text-centered has-text-grey">0.040~0.700</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">180~220</td>
                        <td class="has-text-centered has-text-grey"><p>{{__('Heat curing bond, strong bond strength. The heat resistance temperature is higher than that of SBEIW. Suitable for the high power voice coil, fan motor, deflection coil.')}}</p></td>
                        <td class="has-text-centered has-text-grey">200</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">SBAIW</td>
                        <td class="has-text-centered has-text-grey">0.150~0.700</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey"></td>
                        <td class="has-text-centered has-text-grey">✔️</td>
                        <td class="has-text-centered has-text-grey">200~240</td>
                        <td class="has-text-centered has-text-grey"><p>{{__('High-temperature resistance. Suitable for hollow motor, inductor coil and so on.')}}</p></td>
                        <td class="has-text-centered has-text-grey">180</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="section is-medium">
            <div class="container has-background-link has-text-white side-bar-text is-size-4">
                <p>{{__('Enameled Copper Wire Technical Data (Self Bonding) Standard: JIS C 3202')}}</p>
            </div>
        </section>

        <section class="section container">
            <table class="table is-striped is-bordered is-narrow is-size-7 is-size-6-fullhd">
                <thead>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Item')}}<br>/<br>{{__('No.')}}</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Conductor nominal diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Conductor Tolerance')}}<br>(±mm)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Elongation')}}<br>≥(%)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Stretching')}}<br>/<br>{{__('Winding')}}(%/d)</th>
                        <th class="has-text-centered has-text-white" colspan="3">{{__('Breakdown voltage')}}<br>(v)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Bonding strength')}}<br>≥N</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Class 0 coating thickness')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Class 1 coating thickness')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Class 2 coating thickness')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="3">{{__('Max overall diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Resistance')}}<br>(Ω∕m)</th>
                    </tr>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white">{{__('Class 0')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Class 1')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Class 2')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Min Bonding coat thickness')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Min insulation thickness')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Min Bonding coat thickness')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Min insulation thickness')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Min Bonding coat thickness')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Min insulation thickness')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Class 0')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Class 1')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Class 2')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th>	 				
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="has-text-centered has-text-grey">1</td> 
                        <td class="has-text-centered has-text-grey">0.040</td> 
                        <td class="has-text-centered has-text-grey">0.001</td>
                        <td class="has-text-centered has-text-grey">13</td> 
                        <td class="has-text-centered has-text-grey">15%</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">100</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.056</td> 
                        <td class="has-text-centered has-text-grey">13.195</td> 
                        <td class="has-text-centered has-text-grey">14.011</td> 	 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">2</td> 
                        <td class="has-text-centered has-text-grey">0.045</td> 
                        <td class="has-text-centered has-text-grey">0.001</td>
                        <td class="has-text-centered has-text-grey">13</td> 
                        <td class="has-text-centered has-text-grey">15%</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">700</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.064</td> 
                        <td class="has-text-centered has-text-grey">10.426</td> 
                        <td class="has-text-centered has-text-grey">11.07</td> 								 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">3</td> 
                        <td class="has-text-centered has-text-grey">0.050</td> 
                        <td class="has-text-centered has-text-grey">0.001</td>
                        <td class="has-text-centered has-text-grey">13</td> 
                        <td class="has-text-centered has-text-grey">15%</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">950</td> 
                        <td class="has-text-centered has-text-grey">700</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.083</td> 
                        <td class="has-text-centered has-text-grey">0.069</td> 
                        <td class="has-text-centered has-text-grey">8.445</td> 
                        <td class="has-text-centered has-text-grey">8.967</td> 			 						 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">4</td> 
                        <td class="has-text-centered has-text-grey">0.060</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">13</td> 
                        <td class="has-text-centered has-text-grey">15%</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">950</td> 
                        <td class="has-text-centered has-text-grey">700</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.096</td> 
                        <td class="has-text-centered has-text-grey">0.081</td> 
                        <td class="has-text-centered has-text-grey">5.864</td> 
                        <td class="has-text-centered has-text-grey">6.227</td> 		 					 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">5</td> 
                        <td class="has-text-centered has-text-grey">0.065</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">13</td> 
                        <td class="has-text-centered has-text-grey">15%</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">950</td> 
                        <td class="has-text-centered has-text-grey">700</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.101</td> 
                        <td class="has-text-centered has-text-grey">0.086</td> 
                        <td class="has-text-centered has-text-grey">4.997</td> 
                        <td class="has-text-centered has-text-grey">5.306</td> 					 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">6</td> 
                        <td class="has-text-centered has-text-grey">0.070</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">13</td> 
                        <td class="has-text-centered has-text-grey">15%</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">950</td> 
                        <td class="has-text-centered has-text-grey">700</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.106</td> 
                        <td class="has-text-centered has-text-grey">0.091</td> 
                        <td class="has-text-centered has-text-grey">4.309</td> 
                        <td class="has-text-centered has-text-grey">4.575</td> 			 						 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">7</td> 
                        <td class="has-text-centered has-text-grey">0.080</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">14</td> 
                        <td class="has-text-centered has-text-grey">15%</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">1100</td> 
                        <td class="has-text-centered has-text-grey">700</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.007</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.118</td> 
                        <td class="has-text-centered has-text-grey">0.103</td> 
                        <td class="has-text-centered has-text-grey">3.299</td> 
                        <td class="has-text-centered has-text-grey">3.503</td> 									 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">8</td> 
                        <td class="has-text-centered has-text-grey">0.090</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">15</td> 
                        <td class="has-text-centered has-text-grey">15%</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">1100</td> 
                        <td class="has-text-centered has-text-grey">700</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.128</td> 
                        <td class="has-text-centered has-text-grey">0.113</td> 
                        <td class="has-text-centered has-text-grey">2.606</td> 
                        <td class="has-text-centered has-text-grey">2.768</td> 										 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">9</td> 
                        <td class="has-text-centered has-text-grey">0.100</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">16</td> 
                        <td class="has-text-centered has-text-grey">15%</td> 
                        <td class="has-text-centered has-text-grey">2000</td> 
                        <td class="has-text-centered has-text-grey">1100</td> 
                        <td class="has-text-centered has-text-grey">700</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">0.009</td> 
                        <td class="has-text-centered has-text-grey">0.016</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.009</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.156</td> 
                        <td class="has-text-centered has-text-grey">0.140</td> 
                        <td class="has-text-centered has-text-grey">0.125</td> 
                        <td class="has-text-centered has-text-grey">2.111</td> 
                        <td class="has-text-centered has-text-grey">2.242</td> 					 	 										 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">10</td> 
                        <td class="has-text-centered has-text-grey">0.110</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">17</td> 
                        <td class="has-text-centered has-text-grey">15%</td> 
                        <td class="has-text-centered has-text-grey">2000</td> 
                        <td class="has-text-centered has-text-grey">1100</td> 
                        <td class="has-text-centered has-text-grey">700</td> 
                        <td class="has-text-centered has-text-grey">0.15</td> 
                        <td class="has-text-centered has-text-grey">0.009</td> 
                        <td class="has-text-centered has-text-grey">0.016</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.009</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.166</td> 
                        <td class="has-text-centered has-text-grey">0.150</td> 
                        <td class="has-text-centered has-text-grey">0.135</td> 
                        <td class="has-text-centered has-text-grey">1.745</td> 
                        <td class="has-text-centered has-text-grey">1.853</td> 	 								 	 					 	 				 							 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">11</td> 
                        <td class="has-text-centered has-text-grey">0.120</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">17</td> 
                        <td class="has-text-centered has-text-grey">15%</td> 
                        <td class="has-text-centered has-text-grey">2200</td> 
                        <td class="has-text-centered has-text-grey">1300</td> 
                        <td class="has-text-centered has-text-grey">850</td> 
                        <td class="has-text-centered has-text-grey">0.15</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.017</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.01</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.180</td> 
                        <td class="has-text-centered has-text-grey">0.162</td> 
                        <td class="has-text-centered has-text-grey">0.147</td> 
                        <td class="has-text-centered has-text-grey">1.466</td> 
                        <td class="has-text-centered has-text-grey">1.557</td> 				 							 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">12</td> 
                        <td class="has-text-centered has-text-grey">0.130</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">18</td> 
                        <td class="has-text-centered has-text-grey">15%</td> 
                        <td class="has-text-centered has-text-grey">2200</td> 
                        <td class="has-text-centered has-text-grey">1300</td> 
                        <td class="has-text-centered has-text-grey">850</td> 
                        <td class="has-text-centered has-text-grey">0.15</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.017</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.01</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.190</td> 
                        <td class="has-text-centered has-text-grey">0.172</td> 
                        <td class="has-text-centered has-text-grey">0.157</td> 
                        <td class="has-text-centered has-text-grey">1.249</td> 
                        <td class="has-text-centered has-text-grey">1.326</td> 		 				
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">13</td> 
                        <td class="has-text-centered has-text-grey">0.140</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">18</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2200</td> 
                        <td class="has-text-centered has-text-grey">1300</td> 
                        <td class="has-text-centered has-text-grey">850</td> 
                        <td class="has-text-centered has-text-grey">0.15</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.017</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.01</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.200</td> 
                        <td class="has-text-centered has-text-grey">0.182</td> 
                        <td class="has-text-centered has-text-grey">0.167</td> 
                        <td class="has-text-centered has-text-grey">1.077</td> 
                        <td class="has-text-centered has-text-grey">1.144</td> 		 				
                    </tr>
                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">14</td> 
                        <td class="has-text-centered has-text-grey">0.150</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">19</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2200</td> 
                        <td class="has-text-centered has-text-grey">1300</td> 
                        <td class="has-text-centered has-text-grey">850</td> 
                        <td class="has-text-centered has-text-grey">0.15</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.017</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.01</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.210</td> 
                        <td class="has-text-centered has-text-grey">0.192</td> 
                        <td class="has-text-centered has-text-grey">0.177</td> 
                        <td class="has-text-centered has-text-grey">0.938</td> 
                        <td class="has-text-centered has-text-grey">0.996</td> 		 				
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">15</td> 
                        <td class="has-text-centered has-text-grey">0.160</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">19</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2200</td> 
                        <td class="has-text-centered has-text-grey">1300</td> 
                        <td class="has-text-centered has-text-grey">850</td> 
                        <td class="has-text-centered has-text-grey">0.15</td> 
                        <td class="has-text-centered has-text-grey">0.011</td> 
                        <td class="has-text-centered has-text-grey">0.018</td> 
                        <td class="has-text-centered has-text-grey">0.007</td> 
                        <td class="has-text-centered has-text-grey">0.011</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.007</td> 
                        <td class="has-text-centered has-text-grey">0.222</td> 
                        <td class="has-text-centered has-text-grey">0.204</td> 
                        <td class="has-text-centered has-text-grey">0.189</td> 
                        <td class="has-text-centered has-text-grey">0.825</td> 
                        <td class="has-text-centered has-text-grey">0.876</td> 		 				
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">16</td> 
                        <td class="has-text-centered has-text-grey">0.170</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">20</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2200</td> 
                        <td class="has-text-centered has-text-grey">1300</td> 
                        <td class="has-text-centered has-text-grey">850</td> 
                        <td class="has-text-centered has-text-grey">0.25</td> 
                        <td class="has-text-centered has-text-grey">0.011</td> 
                        <td class="has-text-centered has-text-grey">0.018</td> 
                        <td class="has-text-centered has-text-grey">0.007</td> 
                        <td class="has-text-centered has-text-grey">0.011</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.007</td> 
                        <td class="has-text-centered has-text-grey">0.232</td> 
                        <td class="has-text-centered has-text-grey">0.214</td> 
                        <td class="has-text-centered has-text-grey">0.199</td> 
                        <td class="has-text-centered has-text-grey">0.731</td> 
                        <td class="has-text-centered has-text-grey">0.776</td> 		 				
                    </tr>
                                                                                
                    <tr>
                        <td class="has-text-centered has-text-grey">17</td> 
                        <td class="has-text-centered has-text-grey">0.180</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">20</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2400</td> 
                        <td class="has-text-centered has-text-grey">1600</td> 
                        <td class="has-text-centered has-text-grey">1000</td> 
                        <td class="has-text-centered has-text-grey">0.25</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.019</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.246</td> 
                        <td class="has-text-centered has-text-grey">0.226</td> 
                        <td class="has-text-centered has-text-grey">0.211</td> 
                        <td class="has-text-centered has-text-grey">0.6516</td> 
                        <td class="has-text-centered has-text-grey">0.6928</td> 		 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">18</td> 
                        <td class="has-text-centered has-text-grey">0.190</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">21</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2400</td> 
                        <td class="has-text-centered has-text-grey">1600</td> 
                        <td class="has-text-centered has-text-grey">1000</td> 
                        <td class="has-text-centered has-text-grey">0.25</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.019</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.256</td> 
                        <td class="has-text-centered has-text-grey">0.236</td> 
                        <td class="has-text-centered has-text-grey">0.221</td> 
                        <td class="has-text-centered has-text-grey">0.5854</td> 
                        <td class="has-text-centered has-text-grey">0.6211</td> 	 				
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">19</td> 
                        <td class="has-text-centered has-text-grey">0.200</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">21</td> 	 				
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2400</td> 
                        <td class="has-text-centered has-text-grey">1600</td> 
                        <td class="has-text-centered has-text-grey">1000</td> 
                        <td class="has-text-centered has-text-grey">0.25</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.019</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.266</td> 
                        <td class="has-text-centered has-text-grey">0.246</td> 
                        <td class="has-text-centered has-text-grey">0.231</td> 
                        <td class="has-text-centered has-text-grey">0.5289</td> 
                        <td class="has-text-centered has-text-grey">0.5599</td> 	 				
                    </tr>
                
                    <tr>
                        <td class="has-text-centered has-text-grey">20</td> 
                        <td class="has-text-centered has-text-grey">0.210</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">21</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2400</td> 
                        <td class="has-text-centered has-text-grey">1600</td> 
                        <td class="has-text-centered has-text-grey">1000</td> 
                        <td class="has-text-centered has-text-grey">0.35</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.019</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.276</td> 
                        <td class="has-text-centered has-text-grey">0.256</td> 
                        <td class="has-text-centered has-text-grey">0.241</td> 
                        <td class="has-text-centered has-text-grey">0.4802</td> 
                        <td class="has-text-centered has-text-grey">0.5074</td> 	 				
                    </tr>
            
                    <tr>
                        <td class="has-text-centered has-text-grey">21</td> 
                        <td class="has-text-centered has-text-grey">0.230</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">22</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2400</td> 
                        <td class="has-text-centered has-text-grey">1600</td> 
                        <td class="has-text-centered has-text-grey">1000</td> 
                        <td class="has-text-centered has-text-grey">0.35</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.020</td> 
                        <td class="has-text-centered has-text-grey">0.009</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.009</td> 
                        <td class="has-text-centered has-text-grey">0.298</td> 
                        <td class="has-text-centered has-text-grey">0.278</td> 
                        <td class="has-text-centered has-text-grey">0.264</td> 
                        <td class="has-text-centered has-text-grey">0.4009</td> 
                        <td class="has-text-centered has-text-grey">0.4223</td> 	 				
                    </tr>
            
                    <tr>
                        <td class="has-text-centered has-text-grey">22</td> 
                        <td class="has-text-centered has-text-grey">0.250</td> 
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">22</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2400</td> 
                        <td class="has-text-centered has-text-grey">1600</td> 
                        <td class="has-text-centered has-text-grey">1000</td> 
                        <td class="has-text-centered has-text-grey">0.35</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.020</td> 
                        <td class="has-text-centered has-text-grey">0.009</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.009</td> 
                        <td class="has-text-centered has-text-grey">0.318</td> 
                        <td class="has-text-centered has-text-grey">0.298</td> 
                        <td class="has-text-centered has-text-grey">0.284</td> 
                        <td class="has-text-centered has-text-grey">0.3398</td> 
                        <td class="has-text-centered has-text-grey">0.3569</td> 	 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">23</td> 
                        <td class="has-text-centered has-text-grey">0.270</td> 
                        <td class="has-text-centered has-text-grey">0.003</td>
                        <td class="has-text-centered has-text-grey">22</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2400</td> 
                        <td class="has-text-centered has-text-grey">1600</td> 
                        <td class="has-text-centered has-text-grey">1000</td> 
                        <td class="has-text-centered has-text-grey">0.35</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.020</td> 
                        <td class="has-text-centered has-text-grey">0.009</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">0.009</td> 
                        <td class="has-text-centered has-text-grey">0.340</td> 
                        <td class="has-text-centered has-text-grey">0.320</td> 
                        <td class="has-text-centered has-text-grey">0.304</td> 
                        <td class="has-text-centered has-text-grey">0.2896</td> 
                        <td class="has-text-centered has-text-grey">0.3079</td> 	 				
                    </tr>
            
                    <tr>
                        <td class="has-text-centered has-text-grey">24</td> 
                        <td class="has-text-centered has-text-grey">0.300</td> 
                        <td class="has-text-centered has-text-grey">0.003</td>
                        <td class="has-text-centered has-text-grey">23</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2800</td> 
                        <td class="has-text-centered has-text-grey">2000</td> 
                        <td class="has-text-centered has-text-grey">1000</td> 
                        <td class="has-text-centered has-text-grey">0.35</td> 
                        <td class="has-text-centered has-text-grey">0.014</td> 
                        <td class="has-text-centered has-text-grey">0.021</td> 
                        <td class="has-text-centered has-text-grey">0.01</td> 
                        <td class="has-text-centered has-text-grey">0.014</td> 
                        <td class="has-text-centered has-text-grey">0.007</td> 
                        <td class="has-text-centered has-text-grey">0.01</td> 
                        <td class="has-text-centered has-text-grey">0.374</td> 
                        <td class="has-text-centered has-text-grey">0.352</td> 
                        <td class="has-text-centered has-text-grey">0.337</td> 
                        <td class="has-text-centered has-text-grey">0.2351</td> 
                        <td class="has-text-centered has-text-grey">0.2489</td> 	 				
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">25</td> 
                        <td class="has-text-centered has-text-grey">0.310</td> 
                        <td class="has-text-centered has-text-grey">0.003</td>
                        <td class="has-text-centered has-text-grey">23</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2800</td> 
                        <td class="has-text-centered has-text-grey">2000</td> 
                        <td class="has-text-centered has-text-grey">1400</td> 
                        <td class="has-text-centered has-text-grey">0.35</td> 
                        <td class="has-text-centered has-text-grey">0.014</td> 
                        <td class="has-text-centered has-text-grey">0.021</td> 
                        <td class="has-text-centered has-text-grey">0.01</td> 
                        <td class="has-text-centered has-text-grey">0.014</td> 
                        <td class="has-text-centered has-text-grey">0.007</td> 
                        <td class="has-text-centered has-text-grey">0.01</td> 
                        <td class="has-text-centered has-text-grey">0.384</td> 
                        <td class="has-text-centered has-text-grey">0.362</td> 
                        <td class="has-text-centered has-text-grey">0.347</td> 
                        <td class="has-text-centered has-text-grey">0.2203</td> 
                        <td class="has-text-centered has-text-grey">0.2329</td> 		 				
                    </tr>
        
                    <tr>
                        <td class="has-text-centered has-text-grey">26</td> 
                        <td class="has-text-centered has-text-grey">0.350</td> 
                        <td class="has-text-centered has-text-grey">0.003</td>
                        <td class="has-text-centered has-text-grey">23</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2800</td> 
                        <td class="has-text-centered has-text-grey">2000</td> 
                        <td class="has-text-centered has-text-grey">1400</td> 
                        <td class="has-text-centered has-text-grey">0.50</td> 
                        <td class="has-text-centered has-text-grey">0.014</td> 
                        <td class="has-text-centered has-text-grey">0.021</td> 
                        <td class="has-text-centered has-text-grey">0.01</td> 
                        <td class="has-text-centered has-text-grey">0.014</td> 
                        <td class="has-text-centered has-text-grey">0.007</td> 
                        <td class="has-text-centered has-text-grey">0.01</td> 
                        <td class="has-text-centered has-text-grey">0.424</td> 
                        <td class="has-text-centered has-text-grey">0.402</td> 
                        <td class="has-text-centered has-text-grey">0.387</td> 
                        <td class="has-text-centered has-text-grey">0.1732</td> 
                        <td class="has-text-centered has-text-grey">0.1823</td> 		 				
                    </tr>
        
                    <tr>
                        <td class="has-text-centered has-text-grey">27</td> 
                        <td class="has-text-centered has-text-grey">0.370</td> 
                        <td class="has-text-centered has-text-grey">0.003</td>
                        <td class="has-text-centered has-text-grey">24</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2800</td> 
                        <td class="has-text-centered has-text-grey">2000</td> 
                        <td class="has-text-centered has-text-grey">1400</td> 
                        <td class="has-text-centered has-text-grey">0.50</td> 
                        <td class="has-text-centered has-text-grey">0.014</td> 
                        <td class="has-text-centered has-text-grey">0.022</td> 
                        <td class="has-text-centered has-text-grey">0.01</td> 
                        <td class="has-text-centered has-text-grey">0.014</td> 
                        <td class="has-text-centered has-text-grey">0.007</td> 
                        <td class="has-text-centered has-text-grey">0.01</td> 
                        <td class="has-text-centered has-text-grey">0.446</td> 
                        <td class="has-text-centered has-text-grey">0.424 </td> 
                        <td class="has-text-centered has-text-grey">0.407</td> 
                        <td class="has-text-centered has-text-grey">0.1551</td> 
                        <td class="has-text-centered has-text-grey">0.163</td> 		 				
                    </tr>
                
                    <tr>
                        <td class="has-text-centered has-text-grey">28</td> 
                        <td class="has-text-centered has-text-grey">0.400</td> 
                        <td class="has-text-centered has-text-grey">0.004</td>
                        <td class="has-text-centered has-text-grey">24</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2800</td> 
                        <td class="has-text-centered has-text-grey">2000</td> 
                        <td class="has-text-centered has-text-grey">1400</td> 
                        <td class="has-text-centered has-text-grey">0.50</td> 
                        <td class="has-text-centered has-text-grey">0.015</td> 
                        <td class="has-text-centered has-text-grey">0.023</td> 
                        <td class="has-text-centered has-text-grey">0.011</td> 
                        <td class="has-text-centered has-text-grey">0.015</td> 
                        <td class="has-text-centered has-text-grey">0.007</td> 
                        <td class="has-text-centered has-text-grey">0.011</td> 
                        <td class="has-text-centered has-text-grey">0.480</td> 
                        <td class="has-text-centered has-text-grey">0.456</td> 
                        <td class="has-text-centered has-text-grey">0.439</td> 
                        <td class="has-text-centered has-text-grey">0.1329</td> 
                        <td class="has-text-centered has-text-grey">0.1393</td> 		 				
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">29</td> 
                        <td class="has-text-centered has-text-grey">0.450</td> 
                        <td class="has-text-centered has-text-grey">0.004</td>
                        <td class="has-text-centered has-text-grey">25</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">2800</td> 
                        <td class="has-text-centered has-text-grey">2000</td> 
                        <td class="has-text-centered has-text-grey">1400</td> 
                        <td class="has-text-centered has-text-grey">0.50</td> 
                        <td class="has-text-centered has-text-grey">0.016</td> 
                        <td class="has-text-centered has-text-grey">0.024</td> 
                        <td class="has-text-centered has-text-grey">0.011</td> 
                        <td class="has-text-centered has-text-grey">0.016</td> 
                        <td class="has-text-centered has-text-grey">0.007</td> 
                        <td class="has-text-centered has-text-grey">0.011</td> 
                        <td class="has-text-centered has-text-grey">0.532</td> 
                        <td class="has-text-centered has-text-grey">0.508</td> 
                        <td class="has-text-centered has-text-grey">0.49</td> 
                        <td class="has-text-centered has-text-grey">0.1052</td> 
                        <td class="has-text-centered has-text-grey">0.1099</td>			 				
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">30</td> 
                        <td class="has-text-centered has-text-grey">0.500</td> 
                        <td class="has-text-centered has-text-grey">0.005</td>
                        <td class="has-text-centered has-text-grey">25</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">3050</td> 
                        <td class="has-text-centered has-text-grey">2500</td> 
                        <td class="has-text-centered has-text-grey">1450</td> 
                        <td class="has-text-centered has-text-grey">0.75</td> 
                        <td class="has-text-centered has-text-grey">0.017</td> 
                        <td class="has-text-centered has-text-grey">0.025</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.017</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.586</td> 
                        <td class="has-text-centered has-text-grey">0.560</td> 
                        <td class="has-text-centered has-text-grey">0.542</td> 
                        <td class="has-text-centered has-text-grey">0.0849</td> 
                        <td class="has-text-centered has-text-grey">0.0892</td> 		 				
                    </tr>
        
                    <tr>
                        <td class="has-text-centered has-text-grey">31</td> 
                        <td class="has-text-centered has-text-grey">0.550</td> 
                        <td class="has-text-centered has-text-grey">0.005</td>
                        <td class="has-text-centered has-text-grey">26</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">3050</td> 
                        <td class="has-text-centered has-text-grey">2500</td> 
                        <td class="has-text-centered has-text-grey">1450</td> 
                        <td class="has-text-centered has-text-grey">1.25</td> 
                        <td class="has-text-centered has-text-grey">0.017</td> 
                        <td class="has-text-centered has-text-grey">0.025</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.017</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.646</td> 
                        <td class="has-text-centered has-text-grey">0.620</td> 
                        <td class="has-text-centered has-text-grey">0.592</td> 
                        <td class="has-text-centered has-text-grey">0.0703</td> 
                        <td class="has-text-centered has-text-grey">0.0736</td> 	 				
                    </tr>
                
                    <tr>
                        <td class="has-text-centered has-text-grey">32</td> 
                        <td class="has-text-centered has-text-grey">0.600</td> 
                        <td class="has-text-centered has-text-grey">0.006</td>
                        <td class="has-text-centered has-text-grey">27</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">3050</td> 
                        <td class="has-text-centered has-text-grey">2500</td> 
                        <td class="has-text-centered has-text-grey">1450</td> 
                        <td class="has-text-centered has-text-grey">1.25</td> 
                        <td class="has-text-centered has-text-grey">0.017</td> 
                        <td class="has-text-centered has-text-grey">0.026</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.017</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.012</td> 
                        <td class="has-text-centered has-text-grey">0.698</td> 
                        <td class="has-text-centered has-text-grey">0.672</td> 
                        <td class="has-text-centered has-text-grey">0.644</td> 
                        <td class="has-text-centered has-text-grey">0.0592</td> 
                        <td class="has-text-centered has-text-grey">0.0618</td> 		 				
                    </tr>
                
                    <tr>
                        <td class="has-text-centered has-text-grey">33</td> 
                        <td class="has-text-centered has-text-grey">0.650</td> 
                        <td class="has-text-centered has-text-grey">0.006</td>
                        <td class="has-text-centered has-text-grey">29</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">3050</td> 
                        <td class="has-text-centered has-text-grey">2500</td> 
                        <td class="has-text-centered has-text-grey">1450</td> 
                        <td class="has-text-centered has-text-grey">1.25</td> 
                        <td class="has-text-centered has-text-grey">0.018</td> 
                        <td class="has-text-centered has-text-grey">0.027</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.018</td> 
                        <td class="has-text-centered has-text-grey">0.009</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.750</td> 
                        <td class="has-text-centered has-text-grey">0.722</td> 
                        <td class="has-text-centered has-text-grey">0.696</td> 
                        <td class="has-text-centered has-text-grey">0.0501</td> 
                        <td class="has-text-centered has-text-grey">0.05293</td> 		 				
                    </tr>
                                            
                    <tr>
                        <td class="has-text-centered has-text-grey">34</td> 
                        <td class="has-text-centered has-text-grey">0.700</td> 
                        <td class="has-text-centered has-text-grey">0.006</td>
                        <td class="has-text-centered has-text-grey">29</td> 
                        <td class="has-text-centered has-text-grey">1d</td> 
                        <td class="has-text-centered has-text-grey">3050</td> 
                        <td class="has-text-centered has-text-grey">2500</td> 
                        <td class="has-text-centered has-text-grey">1450</td> 
                        <td class="has-text-centered has-text-grey">2.00</td> 
                        <td class="has-text-centered has-text-grey">0.018</td> 
                        <td class="has-text-centered has-text-grey">0.027</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.018</td> 
                        <td class="has-text-centered has-text-grey">0.009</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.800</td> 
                        <td class="has-text-centered has-text-grey">0.772</td> 
                        <td class="has-text-centered has-text-grey">0.746</td> 
                        <td class="has-text-centered has-text-grey">0.04329</td> 
                        <td class="has-text-centered has-text-grey">0.04558</td> 	 				
                    </tr>							 					 	 				 				
                </tbody>
            </table>
        </section>

        <section class="section is-medium">
            <div class="container has-background-link has-text-white side-bar-text is-size-4 ">
                <p>{{__('Enameled Copper Wire Technical Data (Self Bonding) Standard MW 1000:2003')}}</p>
            </div>
        </section>

        <section class="section container">
            <table class="table is-striped is-bordered is-narrow is-size-7 is-size-6-fullhd last-table-m-b">
                <thead>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white" rowspan="3">{{__('Item')}}<br>/<br>{{__('No.')}}</th>
                        <th class="has-text-centered has-text-white" rowspan="3">{{__('AWG gauge number')}}</th>
                        <th class="has-text-centered has-text-white" rowspan="3">{{__('Conductor Tolerance')}}<br>(±mm)</th>
                        <th class="has-text-centered has-text-white" rowspan="3">{{__('Elongation')}}<br>≥(%)</th>
                        <th class="has-text-centered has-text-white" rowspan="3">{{__('Flexibility')}}<br>/<br>{{__('Adhesion')}}</th>
                        <th class="has-text-centered has-text-white" rowspan="2" colspan="3">{{__('Breakdown voltage')}}<br>(v)</th>
                        <th class="has-text-centered has-text-white" rowspan="3">{{__('Bonding strength')}}<br>≥N</th>
                        <th class="has-text-centered has-text-white" rowspan="2" colspan="2">{{__('Resistance')}}<br>(Ω∕m)</th>
                        <th class="has-text-centered has-text-white" colspan="3">{{__('Type 1 self-adhesive enamelled wire')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="3">{{__('Type 2 self-adhesive enamelled wire')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="3">{{__('Type 3 self-adhesive enamelled wire')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" rowspan="3">{{__('Conductor nominal diameter')}}<br>(mm)</th>
                    </tr>
                    <tr class="has-background-link">	
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Min thickness')}}</th> 			
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Max outer diameter')}}</th> 
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Min thickness')}}</th> 			
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Max outer diameter')}}</th> 
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Min thickness')}}</th> 			
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Max outer diameter')}}</th> 	
                    </tr>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white">{{__('Type 1')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Type 2')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Type 3')}}</th> 			
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th> 			
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th> 			
                        <th class="has-text-centered has-text-white">{{__('Internal coating')}}</th> 			
                        <th class="has-text-centered has-text-white">{{__('Bonding coating')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Internal coating')}}</th> 			
                        <th class="has-text-centered has-text-white">{{__('Bonding coating')}}</th> 
                        <th class="has-text-centered has-text-white">{{__('Internal coating')}}</th> 			
                        <th class="has-text-centered has-text-white">{{__('Bonding coating')}}</th> 		
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="has-text-centered has-text-grey">1</td> 
                        <td class="has-text-centered has-text-grey">46</td> 
                        <td class="has-text-centered has-text-grey">0.001</td> 
                        <td class="has-text-centered has-text-grey">10</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}</td> 
                        <td class="has-text-centered has-text-grey">225</td> 
                        <td class="has-text-centered has-text-grey">425</td> 
                        <td class="has-text-centered has-text-grey">620</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">12.900</td> 
                        <td class="has-text-centered has-text-grey">14.507</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.0025</td> 
                        <td class="has-text-centered has-text-grey">0.0533</td> 
                        <td class="has-text-centered has-text-grey">0.0076</td> 
                        <td class="has-text-centered has-text-grey">0.0025</td> 
                        <td class="has-text-centered has-text-grey">0.061</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.0399</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">2</td> 
                        <td class="has-text-centered has-text-grey">45</td> 
                        <td class="has-text-centered has-text-grey">0.001</td> 
                        <td class="has-text-centered has-text-grey">11</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}</td> 
                        <td class="has-text-centered has-text-grey">250</td> 
                        <td class="has-text-centered has-text-grey">500</td> 
                        <td class="has-text-centered has-text-grey">685</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">10.333</td> 
                        <td class="has-text-centered has-text-grey">11.495</td> 
                        <td class="has-text-centered has-text-grey">0.0050</td> 
                        <td class="has-text-centered has-text-grey">0.0025</td> 
                        <td class="has-text-centered has-text-grey">0.0610</td> 
                        <td class="has-text-centered has-text-grey">0.0100</td> 
                        <td class="has-text-centered has-text-grey">0.0025</td> 
                        <td class="has-text-centered has-text-grey">0.0686</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.0447</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">3</td> 
                        <td class="has-text-centered has-text-grey">44</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">14</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">275</td> 
                        <td class="has-text-centered has-text-grey">550</td> 
                        <td class="has-text-centered has-text-grey">760</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">7.683</td> 
                        <td class="has-text-centered has-text-grey">9.143</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">0.069</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">0.076</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.051</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">4</td> 
                        <td class="has-text-centered has-text-grey">43</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">15</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">300</td> 
                        <td class="has-text-centered has-text-grey">600</td> 
                        <td class="has-text-centered has-text-grey">760</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">6.415</td> 
                        <td class="has-text-centered has-text-grey">7.528</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">0.074</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">0.081</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.056 </td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">5</td> 
                        <td class="has-text-centered has-text-grey">42</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">16</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">350</td> 
                        <td class="has-text-centered has-text-grey">650</td> 
                        <td class="has-text-centered has-text-grey">890</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">4.954</td> 
                        <td class="has-text-centered has-text-grey">5.711</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.084</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.091</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.064</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">6</td> 
                        <td class="has-text-centered has-text-grey">41</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">17</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">375</td> 
                        <td class="has-text-centered has-text-grey">650</td> 
                        <td class="has-text-centered has-text-grey">1000</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">4.050</td> 
                        <td class="has-text-centered has-text-grey">4.611</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.091</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.102</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.071</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">7</td> 
                        <td class="has-text-centered has-text-grey">40</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">17</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">375</td> 
                        <td class="has-text-centered has-text-grey">750</td> 
                        <td class="has-text-centered has-text-grey">1075</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">3.289</td> 
                        <td class="has-text-centered has-text-grey">3.703</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.102</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.109</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.079</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">8</td> 
                        <td class="has-text-centered has-text-grey">39</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">18</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">450</td> 
                        <td class="has-text-centered has-text-grey">800</td> 
                        <td class="has-text-centered has-text-grey">1175</td> 
                        <td class="has-text-centered has-text-grey">0.05</td> 
                        <td class="has-text-centered has-text-grey">2.606</td> 
                        <td class="has-text-centered has-text-grey">2.900</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.114</td> 
                        <td class="has-text-centered has-text-grey">0.015</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.122</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.089</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">9</td> 
                        <td class="has-text-centered has-text-grey">38</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">19</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">450</td> 
                        <td class="has-text-centered has-text-grey">850</td> 
                        <td class="has-text-centered has-text-grey">1250</td> 
                        <td class="has-text-centered has-text-grey">0.15</td> 
                        <td class="has-text-centered has-text-grey">1.995</td> 
                        <td class="has-text-centered has-text-grey">2.195</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.130</td> 
                        <td class="has-text-centered has-text-grey">0.018</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">0.137</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.102</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">10</td> 
                        <td class="has-text-centered has-text-grey">37</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">20</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">1220</td> 
                        <td class="has-text-centered has-text-grey">2050</td> 
                        <td class="has-text-centered has-text-grey">2790</td> 
                        <td class="has-text-centered has-text-grey">0.15</td> 
                        <td class="has-text-centered has-text-grey">1.604</td> 
                        <td class="has-text-centered has-text-grey">1.750</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.145</td> 
                        <td class="has-text-centered has-text-grey">0.018</td> 
                        <td class="has-text-centered has-text-grey">0.009</td> 
                        <td class="has-text-centered has-text-grey">0.152</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.114 </td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">11</td> 
                        <td class="has-text-centered has-text-grey">36</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">20</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">1220</td> 
                        <td class="has-text-centered has-text-grey">2340</td> 
                        <td class="has-text-centered has-text-grey">3050</td> 
                        <td class="has-text-centered has-text-grey">0.15</td> 
                        <td class="has-text-centered has-text-grey">1.297</td> 
                        <td class="has-text-centered has-text-grey">1.405</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.160</td> 
                        <td class="has-text-centered has-text-grey">0.020</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.170</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.127</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">12</td> 
                        <td class="has-text-centered has-text-grey">35</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">21</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">1220</td> 
                        <td class="has-text-centered has-text-grey">2630</td> 
                        <td class="has-text-centered has-text-grey">3300</td> 
                        <td class="has-text-centered has-text-grey">0.15</td> 
                        <td class="has-text-centered has-text-grey">1.041</td> 
                        <td class="has-text-centered has-text-grey">1.120</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.178</td> 
                        <td class="has-text-centered has-text-grey">0.023</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.188</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.142</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">13</td> 
                        <td class="has-text-centered has-text-grey">34</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">22</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">1530</td> 
                        <td class="has-text-centered has-text-grey">2630</td> 
                        <td class="has-text-centered has-text-grey">3560</td> 
                        <td class="has-text-centered has-text-grey">0.15</td> 
                        <td class="has-text-centered has-text-grey">0.822</td> 
                        <td class="has-text-centered has-text-grey">0.879</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.198</td> 
                        <td class="has-text-centered has-text-grey">0.023</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.208</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.160</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">14</td> 
                        <td class="has-text-centered has-text-grey">33</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">23</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">1530</td> 
                        <td class="has-text-centered has-text-grey">2920</td> 
                        <td class="has-text-centered has-text-grey">3810</td> 
                        <td class="has-text-centered has-text-grey">0.25</td> 
                        <td class="has-text-centered has-text-grey">0.652</td> 
                        <td class="has-text-centered has-text-grey">0.693</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.224</td> 
                        <td class="has-text-centered has-text-grey">0.025</td> 
                        <td class="has-text-centered has-text-grey">0.008</td> 
                        <td class="has-text-centered has-text-grey">0.234</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.180</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">15</td> 
                        <td class="has-text-centered has-text-grey">32</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">24</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">1840</td> 
                        <td class="has-text-centered has-text-grey">3210</td> 
                        <td class="has-text-centered has-text-grey">4320</td> 
                        <td class="has-text-centered has-text-grey">0.25</td> 
                        <td class="has-text-centered has-text-grey">0.514</td> 
                        <td class="has-text-centered has-text-grey">0.543</td> 
                        <td class="has-text-centered has-text-grey">0.015</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.249</td> 
                        <td class="has-text-centered has-text-grey">0.028</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.262</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.203</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">16</td> 
                        <td class="has-text-centered has-text-grey">31</td> 
                        <td class="has-text-centered has-text-grey">0.002</td> 
                        <td class="has-text-centered has-text-grey">24</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}20%3d</td> 
                        <td class="has-text-centered has-text-grey">1840</td> 
                        <td class="has-text-centered has-text-grey">3510</td> 
                        <td class="has-text-centered has-text-grey">4570</td> 
                        <td class="has-text-centered has-text-grey">0.35</td> 
                        <td class="has-text-centered has-text-grey">0.415</td> 
                        <td class="has-text-centered has-text-grey">0.438</td> 
                        <td class="has-text-centered has-text-grey">0.015</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.274</td> 
                        <td class="has-text-centered has-text-grey">0.030</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.290</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">/</td> 
                        <td class="has-text-centered has-text-grey">0.226</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">17</td> 
                        <td class="has-text-centered has-text-grey">30</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">25</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}15%1d</td> 
                        <td class="has-text-centered has-text-grey">2140</td> 
                        <td class="has-text-centered has-text-grey">3800</td> 
                        <td class="has-text-centered has-text-grey">5080</td> 
                        <td class="has-text-centered has-text-grey">0.35</td> 
                        <td class="has-text-centered has-text-grey">0.327</td> 
                        <td class="has-text-centered has-text-grey">0.354</td> 
                        <td class="has-text-centered has-text-grey">0.018</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.302</td> 
                        <td class="has-text-centered has-text-grey">0.033</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.325</td> 
                        <td class="has-text-centered has-text-grey">0.050</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.345</td> 
                        <td class="has-text-centered has-text-grey">0.254</td>  
                    </tr>
                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">18</td> 
                        <td class="has-text-centered has-text-grey">29</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">26</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}15%1d</td> 
                        <td class="has-text-centered has-text-grey">2140</td> 
                        <td class="has-text-centered has-text-grey">3840</td> 
                        <td class="has-text-centered has-text-grey">5130</td> 
                        <td class="has-text-centered has-text-grey">0.35</td> 
                        <td class="has-text-centered has-text-grey">0.257</td> 
                        <td class="has-text-centered has-text-grey">0.272</td> 
                        <td class="has-text-centered has-text-grey">0.018</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.338</td> 
                        <td class="has-text-centered has-text-grey">0.038</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.358</td> 
                        <td class="has-text-centered has-text-grey">0.056</td> 
                        <td class="has-text-centered has-text-grey">0.010</td> 
                        <td class="has-text-centered has-text-grey">0.384</td> 
                        <td class="has-text-centered has-text-grey">0.287</td>  
                    </tr>
                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">19</td> 
                        <td class="has-text-centered has-text-grey">28</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">26</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}15%1d</td> 
                        <td class="has-text-centered has-text-grey">2200</td> 
                        <td class="has-text-centered has-text-grey">3950</td> 
                        <td class="has-text-centered has-text-grey">5270</td> 
                        <td class="has-text-centered has-text-grey">0.50</td> 
                        <td class="has-text-centered has-text-grey">0.207</td> 
                        <td class="has-text-centered has-text-grey">0.218</td> 
                        <td class="has-text-centered has-text-grey">0.020</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.373</td> 
                        <td class="has-text-centered has-text-grey">0.041</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.394</td> 
                        <td class="has-text-centered has-text-grey">0.058</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.419</td> 
                        <td class="has-text-centered has-text-grey">0.320</td>  
                    </tr>
                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">20</td> 
                        <td class="has-text-centered has-text-grey">27</td> 
                        <td class="has-text-centered has-text-grey">0.003</td> 
                        <td class="has-text-centered has-text-grey">27</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}15%1d</td> 
                        <td class="has-text-centered has-text-grey">2250</td> 
                        <td class="has-text-centered has-text-grey">4050</td> 
                        <td class="has-text-centered has-text-grey">5410</td> 
                        <td class="has-text-centered has-text-grey">0.50</td> 
                        <td class="has-text-centered has-text-grey">0.163</td> 
                        <td class="has-text-centered has-text-grey">0.171</td> 
                        <td class="has-text-centered has-text-grey">0.020</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.419</td> 
                        <td class="has-text-centered has-text-grey">0.041</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.439</td> 
                        <td class="has-text-centered has-text-grey">0.064</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.467</td> 
                        <td class="has-text-centered has-text-grey">0.361</td>  
                    </tr>
                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">21</td> 
                        <td class="has-text-centered has-text-grey">26</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">27</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}15%1d</td> 
                        <td class="has-text-centered has-text-grey">2310</td> 
                        <td class="has-text-centered has-text-grey">4160</td> 
                        <td class="has-text-centered has-text-grey">5550</td> 
                        <td class="has-text-centered has-text-grey">0.50</td> 
                        <td class="has-text-centered has-text-grey">0.130</td> 
                        <td class="has-text-centered has-text-grey">0.137</td> 
                        <td class="has-text-centered has-text-grey">0.023</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.462</td> 
                        <td class="has-text-centered has-text-grey">0.043</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.485</td> 
                        <td class="has-text-centered has-text-grey">0.066</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.518</td> 
                        <td class="has-text-centered has-text-grey">0.404</td>  
                    </tr>
                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">22</td> 
                        <td class="has-text-centered has-text-grey">25</td> 
                        <td class="has-text-centered has-text-grey">0.004</td> 
                        <td class="has-text-centered has-text-grey">28</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}15%1d</td> 
                        <td class="has-text-centered has-text-grey">2370</td> 
                        <td class="has-text-centered has-text-grey">4270</td> 
                        <td class="has-text-centered has-text-grey">5700</td> 
                        <td class="has-text-centered has-text-grey">0.50</td> 
                        <td class="has-text-centered has-text-grey">0.102</td> 
                        <td class="has-text-centered has-text-grey">0.108</td> 
                        <td class="has-text-centered has-text-grey">0.023</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.516</td> 
                        <td class="has-text-centered has-text-grey">0.046</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.538</td> 
                        <td class="has-text-centered has-text-grey">0.069</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.574</td> 
                        <td class="has-text-centered has-text-grey">0.455</td>  
                    </tr>
                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">23</td> 
                        <td class="has-text-centered has-text-grey">24</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">28</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}15%1d</td> 
                        <td class="has-text-centered has-text-grey">2440</td> 
                        <td class="has-text-centered has-text-grey">4380</td> 
                        <td class="has-text-centered has-text-grey">5850</td> 
                        <td class="has-text-centered has-text-grey">0.75</td> 
                        <td class="has-text-centered has-text-grey">0.0811</td> 
                        <td class="has-text-centered has-text-grey">0.0857</td> 
                        <td class="has-text-centered has-text-grey">0.025</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.577</td> 
                        <td class="has-text-centered has-text-grey">0.048</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.599</td> 
                        <td class="has-text-centered has-text-grey">0.074</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.635</td> 
                        <td class="has-text-centered has-text-grey">0.511</td>  
                    </tr>
                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">24</td> 
                        <td class="has-text-centered has-text-grey">23</td> 
                        <td class="has-text-centered has-text-grey">0.005</td> 
                        <td class="has-text-centered has-text-grey">29</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}15%1d</td> 
                        <td class="has-text-centered has-text-grey">2500</td> 
                        <td class="has-text-centered has-text-grey">4500</td> 
                        <td class="has-text-centered has-text-grey">6010</td> 
                        <td class="has-text-centered has-text-grey">1.25</td> 
                        <td class="has-text-centered has-text-grey">0.0644</td> 
                        <td class="has-text-centered has-text-grey">0.0678</td> 
                        <td class="has-text-centered has-text-grey">0.025</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.643</td> 
                        <td class="has-text-centered has-text-grey">0.051</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.668</td> 
                        <td class="has-text-centered has-text-grey">0.076</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.704</td> 
                        <td class="has-text-centered has-text-grey">0.574</td>  
                    </tr>
                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">25</td> 
                        <td class="has-text-centered has-text-grey">22</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">29</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}15%1d</td> 
                        <td class="has-text-centered has-text-grey">2570</td> 
                        <td class="has-text-centered has-text-grey">4620</td> 
                        <td class="has-text-centered has-text-grey">6170</td> 
                        <td class="has-text-centered has-text-grey">1.25</td> 
                        <td class="has-text-centered has-text-grey">0.0512</td> 
                        <td class="has-text-centered has-text-grey">0.0541</td> 
                        <td class="has-text-centered has-text-grey">0.028</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.714</td> 
                        <td class="has-text-centered has-text-grey">0.053</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.742</td> 
                        <td class="has-text-centered has-text-grey">0.081</td> 
                        <td class="has-text-centered has-text-grey">0.013 </td> 
                        <td class="has-text-centered has-text-grey">0.775</td> 
                        <td class="has-text-centered has-text-grey">0.643</td>  
                    </tr>
                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">26</td> 
                        <td class="has-text-centered has-text-grey">21</td> 
                        <td class="has-text-centered has-text-grey">0.006</td> 
                        <td class="has-text-centered has-text-grey">30</td> 
                        <td class="has-text-centered has-text-grey">{{__('Jerk')}}15%1d</td> 
                        <td class="has-text-centered has-text-grey">2640</td> 
                        <td class="has-text-centered has-text-grey">4740</td> 
                        <td class="has-text-centered has-text-grey">6300</td> 
                        <td class="has-text-centered has-text-grey">2.00</td> 
                        <td class="has-text-centered has-text-grey">0.0405</td> 
                        <td class="has-text-centered has-text-grey">0.0426</td> 
                        <td class="has-text-centered has-text-grey">0.028</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.800</td> 
                        <td class="has-text-centered has-text-grey">0.056</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.828</td> 
                        <td class="has-text-centered has-text-grey">0.086</td> 
                        <td class="has-text-centered has-text-grey">0.013</td> 
                        <td class="has-text-centered has-text-grey">0.861</td> 
                        <td class="has-text-centered has-text-grey">0.724</td>  
                    </tr>								 	 	 	 	 	 	 	 	 	 	 	 	 
                </tbody>
            </table>
        </section>
    </section>

</section>
@endsection
