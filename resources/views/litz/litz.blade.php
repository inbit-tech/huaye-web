@extends ('master')

@section ('page-title')
<title>{{ __('LITZ Wire')}} - {{__('Huaye Technology') }}</title>
@endsection

@section('content')
<section id="bec-page">
    <section class="hero is-light is-large litz-background-image">
        <div class="hero-body">
            <div class="container">
                <h1 class="title"></h1>
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

    <section class="section is-medium">
        <div class="container has-background-link has-text-white side-bar-text is-size-4">
            <p>{{ __('Model identification') }}</p>
        </div>
    </section>

    <section class="section container">
        <table class="table is-striped is-hoverable is-fullwidth is-bordered">
            <thead>
                <tr>
                    <th class="has-text-centered has-background-link has-text-white thead-width-desktop">{{ __('LITZ Wire(Non served)') }}</th>
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

    <section class="section container">
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

    <section class="section container">
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

    <section class="section is-medium">
        <div class="container has-background-link has-text-white side-bar-text is-size-4">
            <p>{{__('Structure diagram')}}</p>
        </div>
    </section>

    <section class="section container has-text-centered">
        <img src="{{asset('img/component/product-detail/litz/lita-structure.png')}}" alt="LITZ Wire / Silk Served LITZ Wire">
    </section>

    <section class="section is-medium container has-text-centered is-hidden-desktop">
        <p  class="container has-background-link has-text-white side-bar-text is-size-4 ">{{__('For more documentation, please view on PC')}}</p>
    </section>

    <section class="is-hidden-touch">
        <section class="section is-medium">
            <div class="container has-background-link has-text-white side-bar-text is-size-4">
                <p>{{__('Litz Wire Product List')}}</p>
            </div>
        </section>

        <section class="section container">
            <table class="table is-striped is-bordered is-narrow is-size-7">
                <thead>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white">{{__('Product type')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Outer coating material')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Features')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Application')}}</th>
                    </tr>
                </thead>
                <tbody class="has-text-white">
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">{{__('Basic litz wire')}}</td>
                        <td class="has-text-centered has-text-grey-dark">/</td>
                        <td class="has-text-centered has-text-grey-dark"><p>{{__('High-frequency resistance, good mechanical strength.')}}</p></td>
                        <td class="has-text-centered has-text-grey-dark"><p>{{__('RF transformer, ballast, power switching power supply, heating resistance line, etc.')}}</p></td>              
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">{{__('Self-bonding litz wire')}}</td>
                        <td class="has-text-centered has-text-grey-dark">/</td>
                        <td class="has-text-centered has-text-grey-dark"><p>{{__('Good bonding properties.')}}</p></td>
                        <td class="has-text-centered has-text-grey-dark"><p>{{__('Heating coils, antenna inductors, telecommunications equipment, radio equipment, sonar equipment, etc.')}}</p></td>              
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark" rowspan="4">{{__('Served (silk covered) litz wire')}}</td>
                        <td class="has-text-centered has-text-grey-dark">{{__('Natural silk')}}</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="4"><p>{{__("Excellent mechanical properties, excellent dimensional stability and high ’Q' value.")}}</p></td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="4"><p>{{__('Antenna inductor, high power lighting, video equipment, ultrasonic equipment, high-frequency inductor, high-frequency transformer.')}}</p></td>              
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">{{__('Polyester')}}</td>            
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">{{__('Nylon')}}</td>            
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">{{__('Acetate filament')}}</td>            
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark" rowspan="3">{{__('Taped litz wire (Mylar wire)')}}</td>
                        <td class="has-text-centered has-text-grey-dark">PET</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="3"><p>{{__('Excellent electrical performance, good heat resistance, surface smoothness, transparency, and mechanical flexibility.')}}</p></td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="3"><p>{{__('High-frequency inductors and transformers are used in converters, communication equipment, ultrasonic equipment, sonar equipment, video equipment, radio equipment, and thermal sensing equipment.')}}</p></td>              
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">PEN</td>
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">PI</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="section is-medium">
            <div class="container has-background-link has-text-white side-bar-text is-size-4">
                <p>{{__('USTC(served)Litz Wire Technical Data')}}</p>
            </div>
        </section>

        <section class="section container">
            <table class="table is-striped is-hoverable is-bordered is-narrow is-size-7">
                <thead>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white" rowspan="4">{{__('Single wire root number')}}</th>
                        <th class="has-text-centered has-text-white" colspan="18">{{__('Nominal diameter of the single-wire conductor')}}(mm)</th>
                    </tr>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white" colspan="3">0.04</th>
                        <th class="has-text-centered has-text-white" colspan="3">0.071</th>
                        <th class="has-text-centered has-text-white" colspan="3">0.08</th>
                        <th class="has-text-centered has-text-white" colspan="3">0.1</th>
                        <th class="has-text-centered has-text-white" colspan="3">0.2</th>
                        <th class="has-text-centered has-text-white" colspan="3">0.315</th>
                    </tr>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Nominal outer diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Resistance')}}<br>(Ω/m)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Nominal outer diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Resistance')}}<br>(Ω/m)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Nominal outer diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Resistance')}}<br>(Ω/m)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Nominal outer diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Resistance')}}<br>(Ω/m)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Nominal outer diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Resistance')}}<br>(Ω/m)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Nominal outer diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Resistance')}}<br>(Ω/m)</th>
                    </tr>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="has-text-centered has-text-grey">3</td>  
                        <td class="has-text-centered has-text-grey">0.11</td>  
                        <td class="has-text-centered has-text-grey">4.093</td>
                        <td class="has-text-centered has-text-grey">5.073</td>
                        <td class="has-text-centered has-text-grey">0.182</td>
                        <td class="has-text-centered has-text-grey">1.314</td>
                        <td class="has-text-centered has-text-grey">1.614</td>
                        <td class="has-text-centered has-text-grey">0.206</td>
                        <td class="has-text-centered has-text-grey">1.0443</td>
                        <td class="has-text-centered has-text-grey">1.259</td>
                        <td class="has-text-centered has-text-grey">0.25</td>
                        <td class="has-text-centered has-text-grey">0.678</td>
                        <td class="has-text-centered has-text-grey">0.793</td>
                        <td class="has-text-centered has-text-grey">0.465</td>
                        <td class="has-text-centered has-text-grey">0.175</td>
                        <td class="has-text-centered has-text-grey">0.192</td>
                        <td class="has-text-centered has-text-grey">0.745</td>
                        <td class="has-text-centered has-text-grey">0.0707</td>
                        <td class="has-text-centered has-text-grey">0.0772</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">4</td>
                        <td class="has-text-centered has-text-grey">0.128</td>
                        <td class="has-text-centered has-text-grey">3.07</td>
                        <td class="has-text-centered has-text-grey">3.805</td>
                        <td class="has-text-centered has-text-grey">0.21</td>
                        <td class="has-text-centered has-text-grey">0.985</td>
                        <td class="has-text-centered has-text-grey">1.21</td>
                        <td class="has-text-centered has-text-grey">0.238</td>
                        <td class="has-text-centered has-text-grey">0.783</td>
                        <td class="has-text-centered has-text-grey">0.944</td>
                        <td class="has-text-centered has-text-grey">0.285</td>
                        <td class="has-text-centered has-text-grey">0.509</td>
                        <td class="has-text-centered has-text-grey">0.595</td>
                        <td class="has-text-centered has-text-grey">0.54</td>
                        <td class="has-text-centered has-text-grey">0.131</td>
                        <td class="has-text-centered has-text-grey">0.144</td>
                        <td class="has-text-centered has-text-grey">0.855</td>
                        <td class="has-text-centered has-text-grey">0.053</td>
                        <td class="has-text-centered has-text-grey">0.0579</td>
                    </tr>
                    <tr>
                        <td class="has-text-centered has-text-grey">5</td>
                        <td class="has-text-centered has-text-grey">0.143</td>
                        <td class="has-text-centered has-text-grey">2.456</td>
                        <td class="has-text-centered has-text-grey">3.044</td>
                        <td class="has-text-centered has-text-grey">0.235</td>
                        <td class="has-text-centered has-text-grey">0.788</td>
                        <td class="has-text-centered has-text-grey">0.968</td>
                        <td class="has-text-centered has-text-grey">0.265</td>
                        <td class="has-text-centered has-text-grey">0.627</td>
                        <td class="has-text-centered has-text-grey">0.755</td>
                        <td class="has-text-centered has-text-grey">0.315</td>
                        <td class="has-text-centered has-text-grey">0.407</td>
                        <td class="has-text-centered has-text-grey">0.476</td>
                        <td class="has-text-centered has-text-grey">0.595</td>
                        <td class="has-text-centered has-text-grey">0.105</td>
                        <td class="has-text-centered has-text-grey">0.115</td>
                        <td class="has-text-centered has-text-grey">0.945</td>
                        <td class="has-text-centered has-text-grey">0.0424</td>
                        <td class="has-text-centered has-text-grey">0.0463</td>
                    </tr>
                    <tr>
                        <td class="has-text-centered has-text-grey">6</td>
                        <td class="has-text-centered has-text-grey">0.156</td>
                        <td class="has-text-centered has-text-grey">2.047</td>
                        <td class="has-text-centered has-text-grey">2.536</td>
                        <td class="has-text-centered has-text-grey">0.257</td>
                        <td class="has-text-centered has-text-grey">0.657</td>
                        <td class="has-text-centered has-text-grey">0.807</td>
                        <td class="has-text-centered has-text-grey">0.291</td>
                        <td class="has-text-centered has-text-grey">0.522</td>
                        <td class="has-text-centered has-text-grey">0.630</td>
                        <td class="has-text-centered has-text-grey">0.34</td>
                        <td class="has-text-centered has-text-grey">0.339</td>
                        <td class="has-text-centered has-text-grey">0.397</td>
                        <td class="has-text-centered has-text-grey">0.675</td>
                        <td class="has-text-centered has-text-grey">0.0873</td>
                        <td class="has-text-centered has-text-grey">0.0962</td>
                        <td class="has-text-centered has-text-grey">1.03</td>
                        <td class="has-text-centered has-text-grey">0.0354</td>
                        <td class="has-text-centered has-text-grey">0.0386</td>
                    </tr>
        
                    <tr>
                        <td class="has-text-centered has-text-grey">8</td>
                        <td class="has-text-centered has-text-grey">0.180</td>
                        <td class="has-text-centered has-text-grey">1.535</td>
                        <td class="has-text-centered has-text-grey">1.902</td>
                        <td class="has-text-centered has-text-grey">0.297</td>
                        <td class="has-text-centered has-text-grey">0.493</td>
                        <td class="has-text-centered has-text-grey">0.605</td>
                        <td class="has-text-centered has-text-grey">0.336</td>
                        <td class="has-text-centered has-text-grey">0.392</td>
                        <td class="has-text-centered has-text-grey">0.472</td>
                        <td class="has-text-centered has-text-grey">0.385</td>
                        <td class="has-text-centered has-text-grey">0.254</td>
                        <td class="has-text-centered has-text-grey">0.297</td>
                        <td class="has-text-centered has-text-grey">0.77</td>
                        <td class="has-text-centered has-text-grey">0.0655</td>
                        <td class="has-text-centered has-text-grey">0.0721</td>
                        <td class="has-text-centered has-text-grey">1.19</td>
                        <td class="has-text-centered has-text-grey">0.0265</td>
                        <td class="has-text-centered has-text-grey">0.0289</td>
                    </tr>
                        
                    <tr>
                        <td class="has-text-centered has-text-grey">10</td>
                        <td class="has-text-centered has-text-grey">0.202</td>
                        <td class="has-text-centered has-text-grey">1.228</td>
                        <td class="has-text-centered has-text-grey">1.522</td>
                        <td class="has-text-centered has-text-grey">0.332</td>
                        <td class="has-text-centered has-text-grey">0.394</td>
                        <td class="has-text-centered has-text-grey">0.484</td>
                        <td class="has-text-centered has-text-grey">0.376</td>
                        <td class="has-text-centered has-text-grey">0.313</td>
                        <td class="has-text-centered has-text-grey">0.378</td>
                        <td class="has-text-centered has-text-grey">0.430</td>
                        <td class="has-text-centered has-text-grey">0.203</td>
                        <td class="has-text-centered has-text-grey">0.238</td>
                        <td class="has-text-centered has-text-grey">0.855</td>
                        <td class="has-text-centered has-text-grey">0.0524</td>
                        <td class="has-text-centered has-text-grey">0.0577</td>
                        <td class="has-text-centered has-text-grey">1.32</td>
                        <td class="has-text-centered has-text-grey">0.0212</td>
                        <td class="has-text-centered has-text-grey">0.0232</td>
                    </tr>
                                                                                            
                    <tr>
                        <td class="has-text-centered has-text-grey">12</td>
                        <td class="has-text-centered has-text-grey">0.221</td>
                        <td class="has-text-centered has-text-grey">1.023</td>
                        <td class="has-text-centered has-text-grey">1.268</td>
                        <td class="has-text-centered has-text-grey">0.364</td>
                        <td class="has-text-centered has-text-grey">0.328</td>
                        <td class="has-text-centered has-text-grey">0.403</td>
                        <td class="has-text-centered has-text-grey">0.411</td>
                        <td class="has-text-centered has-text-grey">0.261</td>
                        <td class="has-text-centered has-text-grey">0.315</td>
                        <td class="has-text-centered has-text-grey">0.465</td>
                        <td class="has-text-centered has-text-grey">0.17</td>
                        <td class="has-text-centered has-text-grey">0.198</td>
                        <td class="has-text-centered has-text-grey">0.93</td>
                        <td class="has-text-centered has-text-grey">0.0436</td>
                        <td class="has-text-centered has-text-grey">0.0481</td>
                        <td class="has-text-centered has-text-grey">1.44</td>
                        <td class="has-text-centered has-text-grey">0.0177</td>
                        <td class="has-text-centered has-text-grey">0.0193</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">16</td>
                        <td class="has-text-centered has-text-grey">0.257</td>
                        <td class="has-text-centered has-text-grey">0.768</td>
                        <td class="has-text-centered has-text-grey">0.951</td>
                        <td class="has-text-centered has-text-grey">0.423</td>
                        <td class="has-text-centered has-text-grey">0.246</td>
                        <td class="has-text-centered has-text-grey">0.303</td>
                        <td class="has-text-centered has-text-grey">0.479</td>
                        <td class="has-text-centered has-text-grey">0.196</td>
                        <td class="has-text-centered has-text-grey">0.236</td>
                        <td class="has-text-centered has-text-grey">0.54</td>
                        <td class="has-text-centered has-text-grey">0.127</td>
                        <td class="has-text-centered has-text-grey">0.149</td>
                        <td class="has-text-centered has-text-grey">1.085</td>
                        <td class="has-text-centered has-text-grey">0.0327</td>
                        <td class="has-text-centered has-text-grey">0.0361</td>
                        <td class="has-text-centered has-text-grey">1.665</td>
                        <td class="has-text-centered has-text-grey">0.0133</td>
                        <td class="has-text-centered has-text-grey">0.0145</td>
                    </tr>
                                
                    <tr>
                        <td class="has-text-centered has-text-grey">20</td>
                        <td class="has-text-centered has-text-grey">0.29</td>
                        <td class="has-text-centered has-text-grey">0.614</td>
                        <td class="has-text-centered has-text-grey">0.761</td>
                        <td class="has-text-centered has-text-grey">0.477</td>
                        <td class="has-text-centered has-text-grey">0.197</td>
                        <td class="has-text-centered has-text-grey">0.242</td>
                        <td class="has-text-centered has-text-grey">0.539</td>
                        <td class="has-text-centered has-text-grey">0.157</td>
                        <td class="has-text-centered has-text-grey">0.189</td>
                        <td class="has-text-centered has-text-grey">0.605</td>
                        <td class="has-text-centered has-text-grey">0.102</td>
                        <td class="has-text-centered has-text-grey">0.119</td>
                        <td class="has-text-centered has-text-grey">1.21</td>
                        <td class="has-text-centered has-text-grey">0.0262</td>
                        <td class="has-text-centered has-text-grey">0.0289</td>
                        <td class="has-text-centered has-text-grey">1.865</td>
                        <td class="has-text-centered has-text-grey">0.0106</td>
                        <td class="has-text-centered has-text-grey">0.0116</td>
                    </tr>
                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">25</td>
                        <td class="has-text-centered has-text-grey">0.319</td>
                        <td class="has-text-centered has-text-grey">0.491</td>
                        <td class="has-text-centered has-text-grey">0.609</td>
                        <td class="has-text-centered has-text-grey">0.538 </td>
                        <td class="has-text-centered has-text-grey">0.158</td>
                        <td class="has-text-centered has-text-grey">0.194</td>
                        <td class="has-text-centered has-text-grey">0.608</td>
                        <td class="has-text-centered has-text-grey">0.1253</td>
                        <td class="has-text-centered has-text-grey">0.154</td>
                        <td class="has-text-centered has-text-grey">0.705</td>
                        <td class="has-text-centered has-text-grey">0.0814</td>
                        <td class="has-text-centered has-text-grey">0.0952</td>
                        <td class="has-text-centered has-text-grey">1.355</td>
                        <td class="has-text-centered has-text-grey">0.0209</td>
                        <td class="has-text-centered has-text-grey">0.0231</td>
                        <td class="has-text-centered has-text-grey">2.09</td>
                        <td class="has-text-centered has-text-grey">0.00848</td>
                        <td class="has-text-centered has-text-grey">0.00926</td>
                    </tr>
                                                        
                    <tr>
                        <td class="has-text-centered has-text-grey">32</td>
                        <td class="has-text-centered has-text-grey">0.369</td>
                        <td class="has-text-centered has-text-grey">0.384</td>
                        <td class="has-text-centered has-text-grey">0.49</td>
                        <td class="has-text-centered has-text-grey">0.608</td>
                        <td class="has-text-centered has-text-grey">0.123</td>
                        <td class="has-text-centered has-text-grey">0.156</td>
                        <td class="has-text-centered has-text-grey">0.688</td>
                        <td class="has-text-centered has-text-grey">0.0979</td>
                        <td class="has-text-centered has-text-grey">0.1203</td>
                        <td class="has-text-centered has-text-grey">0.79</td>
                        <td class="has-text-centered has-text-grey">0.0636</td>
                        <td class="has-text-centered has-text-grey">0.0766</td>
                        <td class="has-text-centered has-text-grey">1.525</td>
                        <td class="has-text-centered has-text-grey">0.0164</td>
                        <td class="has-text-centered has-text-grey">0.0186</td>
                        <td class="has-text-centered has-text-grey">2.355</td>
                        <td class="has-text-centered has-text-grey">0.00663</td>
                        <td class="has-text-centered has-text-grey">0.00745</td>
                    </tr>
                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">40</td>
                        <td class="has-text-centered has-text-grey">0.412</td>
                        <td class="has-text-centered has-text-grey">0.307</td>
                        <td class="has-text-centered has-text-grey">0.392</td>
                        <td class="has-text-centered has-text-grey">0.68</td>
                        <td class="has-text-centered has-text-grey">0.0985</td>
                        <td class="has-text-centered has-text-grey">0.125</td>
                        <td class="has-text-centered has-text-grey">0.769</td>
                        <td class="has-text-centered has-text-grey">0.0783</td>
                        <td class="has-text-centered has-text-grey">0.0963</td>
                        <td class="has-text-centered has-text-grey">0.875</td>
                        <td class="has-text-centered has-text-grey">0.0509</td>
                        <td class="has-text-centered has-text-grey">0.0613</td>
                        <td class="has-text-centered has-text-grey">1.695</td>
                        <td class="has-text-centered has-text-grey">0.0131</td>
                        <td class="has-text-centered has-text-grey">0.0149</td>
                        <td class="has-text-centered has-text-grey">2.625</td>
                        <td class="has-text-centered has-text-grey">0.0053</td>
                        <td class="has-text-centered has-text-grey">0.00596</td>
                    </tr>
                        
                    <tr>
                        <td class="has-text-centered has-text-grey">60</td>
                        <td class="has-text-centered has-text-grey">0.505</td>
                        <td class="has-text-centered has-text-grey">0.205</td>
                        <td class="has-text-centered has-text-grey">0.266</td>
                        <td class="has-text-centered has-text-grey">0.833</td>
                        <td class="has-text-centered has-text-grey">0.0657</td>
                        <td class="has-text-centered has-text-grey">0.0847</td>
                        <td class="has-text-centered has-text-grey">0.942</td>
                        <td class="has-text-centered has-text-grey">0.0522</td>
                        <td class="has-text-centered has-text-grey">0.0642</td>
                        <td class="has-text-centered has-text-grey">1.055</td>
                        <td class="has-text-centered has-text-grey">0.0339</td>
                        <td class="has-text-centered has-text-grey">0.0417</td>
                        <td class="has-text-centered has-text-grey">2.060</td>
                        <td class="has-text-centered has-text-grey">0.00873</td>
                        <td class="has-text-centered has-text-grey">0.0101</td>
                        <td class="has-text-centered has-text-grey">3.2</td>
                        <td class="has-text-centered has-text-grey">0.00354</td>
                        <td class="has-text-centered has-text-grey">0.00405</td>
                    </tr>
                                                                            
                    <tr>
                        <td class="has-text-centered has-text-grey">100</td>
                        <td class="has-text-centered has-text-grey">0.653</td>
                        <td class="has-text-centered has-text-grey">0.123</td>
                        <td class="has-text-centered has-text-grey">0.160</td>
                        <td class="has-text-centered has-text-grey">1.075</td>
                        <td class="has-text-centered has-text-grey">0.0394</td>
                        <td class="has-text-centered has-text-grey">0.0508</td>
                        <td class="has-text-centered has-text-grey">1.216</td>
                        <td class="has-text-centered has-text-grey">0.0313</td>
                        <td class="has-text-centered has-text-grey">0.0385</td>
                        <td class="has-text-centered has-text-grey">1.355</td>
                        <td class="has-text-centered has-text-grey">0.0203</td>
                        <td class="has-text-centered has-text-grey">0.025</td>
                        <td class="has-text-centered has-text-grey">2.635</td>
                        <td class="has-text-centered has-text-grey">0.00524</td>
                        <td class="has-text-centered has-text-grey">0.00606</td>
                        <td class="has-text-centered has-text-grey">4.105</td>
                        <td class="has-text-centered has-text-grey">0.00212</td>
                        <td class="has-text-centered has-text-grey">0.00243</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">160</td>
                        <td class="has-text-centered has-text-grey">0.825</td>
                        <td class="has-text-centered has-text-grey">0.0768</td>
                        <td class="has-text-centered has-text-grey">0.102</td>
                        <td class="has-text-centered has-text-grey">1.36</td>
                        <td class="has-text-centered has-text-grey">0.0246</td>
                        <td class="has-text-centered has-text-grey">0.0324</td>
                        <td class="has-text-centered has-text-grey">1.538</td>
                        <td class="has-text-centered has-text-grey">0.0196</td>
                        <td class="has-text-centered has-text-grey">0.0241</td>
                        <td class="has-text-centered has-text-grey">1.695</td>
                        <td class="has-text-centered has-text-grey">0.0127</td>
                        <td class="has-text-centered has-text-grey">0.0159</td>
                        <td class="has-text-centered has-text-grey">3.315</td>
                        <td class="has-text-centered has-text-grey">0.00327</td>
                        <td class="has-text-centered has-text-grey">0.00386</td>
                        <td class="has-text-centered has-text-grey">5.175</td>
                        <td class="has-text-centered has-text-grey">0.00133</td>
                        <td class="has-text-centered has-text-grey">0.00155</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">250</td>
                        <td class="has-text-centered has-text-grey">1.032</td>
                        <td class="has-text-centered has-text-grey">0.0491</td>
                        <td class="has-text-centered has-text-grey">0.0652</td>
                        <td class="has-text-centered has-text-grey">1.700</td>
                        <td class="has-text-centered has-text-grey">0.0158</td>
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">1.923</td>
                        <td class="has-text-centered has-text-grey">0.0125</td>
                        <td class="has-text-centered has-text-grey">0.0154</td>
                        <td class="has-text-centered has-text-grey">2.1</td>
                        <td class="has-text-centered has-text-grey">0.0081</td>
                        <td class="has-text-centered has-text-grey">0.0102</td>
                        <td class="has-text-centered has-text-grey">4.125</td>
                        <td class="has-text-centered has-text-grey">0.00209</td>
                        <td class="has-text-centered has-text-grey">0.00247</td>
                        <td class="has-text-centered has-text-grey">6.45</td>
                        <td class="has-text-centered has-text-grey">0.00085</td>
                        <td class="has-text-centered has-text-grey">0.00099</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey"><p>{{__('Max number of roots')}}</p></td>
                        <td class="has-text-centered has-text-grey" colspan="3">500</td>
                        <td class="has-text-centered has-text-grey" colspan="3">500</td>
                        <td class="has-text-centered has-text-grey" colspan="3">500</td>
                        <td class="has-text-centered has-text-grey" colspan="3">300</td>
                        <td class="has-text-centered has-text-grey" colspan="3">300</td>
                        <td class="has-text-centered has-text-grey" colspan="3">100</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey"><p>{{__('Single line outer diameter')}}</p></td>
                        <td class="has-text-centered has-text-grey" colspan="3">≤0.049mm</td>
                        <td class="has-text-centered has-text-grey" colspan="3">≤0.084mm</td>
                        <td class="has-text-centered has-text-grey" colspan="3">≤0.095mm</td>
                        <td class="has-text-centered has-text-grey" colspan="3">≤0.117mm</td>
                        <td class="has-text-centered has-text-grey" colspan="3">≤0.226mm</td>
                        <td class="has-text-centered has-text-grey" colspan="3">≤0.349mm</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey"><p>{{__('Bunched method')}}</p></td>
                        <td class="has-text-centered has-text-grey" colspan="18"><p>{{__('Bunched method have directly bunched and multi-step bunched.For example:directly bunched 0.1*105,secondary bunched 0.1*21*5 and multi-step bunched 0.1*7*3*5')}}</p></td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey"><p>{{__('Bundle pitch')}}</p></td>
                        <td class="has-text-centered has-text-grey" colspan="18"><p>{{__("Less than 60 mm,pitch direction:'S' (Counterclockwise); 'Z' (Clockwise)")}}</p></td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey"><p>{{__('Brine pinhole')}}</p></td>
                        <td class="has-text-centered has-text-grey" colspan="18"><p>{{__('Pinhole number are less than (2*n) per 5m,n is the single wire number')}}</p></td>
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey" rowspan="5"><p>{{__('Silk wrap thickness')}}</p></td>
                        <td class="has-text-centered has-text-grey"><p></p></td>
                        <td class="has-text-centered has-text-grey" colspan="10"><p>{{__('Silk served litz wire nominal overall diameter')}}(mm)</p></td>
                        <td class="has-text-centered has-text-grey" colspan="7"><p>{{__('Silk served thickness')}}(mm)</p></td>
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey" rowspan="2"><p>{{__('Single silk served layer')}}</p></td>
                        <td class="has-text-centered has-text-grey" colspan="10"><p>≤0.450</p></td>
                        <td class="has-text-centered has-text-grey" colspan="7"><p>0.030~0.035</p></td>
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey" colspan="10"><p>0.45~0.6</p></td>
                        <td class="has-text-centered has-text-grey" colspan="7"><p>0.035~0.04</p></td>
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey" rowspan="2"><p>{{__('Double silk served layer')}}</p></td>
                        <td class="has-text-centered has-text-grey" colspan="10"><p>0.6~1</p></td>
                        <td class="has-text-centered has-text-grey" colspan="7"><p>0.06~0.07</p></td>
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey" colspan="10"><p>≥1</p></td>
                        <td class="has-text-centered has-text-grey" colspan="7"><p>0.07~0.08</p></td>
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey">{{__('Flexibility')}}<br>/<br>{{__('Adhesion')}}</td>
                        <td class="has-text-centered has-text-grey"><p>{{__('Rod test')}}</p></td>
                        <td class="has-text-centered has-text-grey" colspan="17"><p>{{__('10D testing rod winding,silk served layer should not crack to expose enameled wire obviously')}}</p></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="section is-medium">
            <div class="container has-background-link has-text-white side-bar-text is-size-4">
                <p>{{__('Litz Wire Technical Data')}}</p>
            </div>
        </section>

        <section class="section container">
            <table class="table is-striped is-hoverable is-bordered is-narrow is-size-7 last-table-m-b">
                <thead>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white" rowspan="4">{{__('Single wire root number')}}</th>
                        <th class="has-text-centered has-text-white" colspan="18">{{__('Nominal diameter of the single-wire conductor')}}(mm)</th>
                    </tr>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white" colspan="3">0.04</th>
                        <th class="has-text-centered has-text-white" colspan="3">0.071</th>
                        <th class="has-text-centered has-text-white" colspan="3">0.08</th>
                        <th class="has-text-centered has-text-white" colspan="3">0.1</th>
                        <th class="has-text-centered has-text-white" colspan="3">0.2</th>
                        <th class="has-text-centered has-text-white" colspan="3">0.315</th>
                    </tr>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Nominal outer diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Resistance')}}<br>(Ω/m)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Nominal outer diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Resistance')}}<br>(Ω/m)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Nominal outer diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Resistance')}}<br>(Ω/m)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Nominal outer diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Resistance')}}<br>(Ω/m)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Nominal outer diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Resistance')}}<br>(Ω/m)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">{{__('Nominal outer diameter')}}<br>(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="2">{{__('Resistance')}}<br>(Ω/m)</th>
                    </tr>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Min')}}</th>
                        <th class="has-text-centered has-text-white">{{__('Max')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="has-text-centered has-text-grey">3</td>  
                        <td class="has-text-centered has-text-grey">0.11</td>  
                        <td class="has-text-centered has-text-grey">4.093</td>
                        <td class="has-text-centered has-text-grey">5.073</td>
                        <td class="has-text-centered has-text-grey">0.182</td>
                        <td class="has-text-centered has-text-grey">1.314</td>
                        <td class="has-text-centered has-text-grey">1.614</td>
                        <td class="has-text-centered has-text-grey">0.206</td>
                        <td class="has-text-centered has-text-grey">1.044</td>
                        <td class="has-text-centered has-text-grey">1.259</td>
                        <td class="has-text-centered has-text-grey">0.25</td>
                        <td class="has-text-centered has-text-grey">0.678</td>
                        <td class="has-text-centered has-text-grey">0.793</td>
                        <td class="has-text-centered has-text-grey">0.465</td>
                        <td class="has-text-centered has-text-grey">0.175</td>
                        <td class="has-text-centered has-text-grey">0.192</td>
                        <td class="has-text-centered has-text-grey">0.745</td>
                        <td class="has-text-centered has-text-grey">0.0707</td>
                        <td class="has-text-centered has-text-grey">0.0772</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">4</td>
                        <td class="has-text-centered has-text-grey">0.128</td>
                        <td class="has-text-centered has-text-grey">3.07</td>
                        <td class="has-text-centered has-text-grey">3.805</td>
                        <td class="has-text-centered has-text-grey">0.21</td>
                        <td class="has-text-centered has-text-grey">0.985</td>
                        <td class="has-text-centered has-text-grey">1.21</td>
                        <td class="has-text-centered has-text-grey">0.238</td>
                        <td class="has-text-centered has-text-grey">0.783</td>
                        <td class="has-text-centered has-text-grey">0.944</td>
                        <td class="has-text-centered has-text-grey">0.285</td>
                        <td class="has-text-centered has-text-grey">0.509</td>
                        <td class="has-text-centered has-text-grey">0.595</td>
                        <td class="has-text-centered has-text-grey">0.54</td>
                        <td class="has-text-centered has-text-grey">0.131</td>
                        <td class="has-text-centered has-text-grey">0.144</td>
                        <td class="has-text-centered has-text-grey">0.855</td>
                        <td class="has-text-centered has-text-grey">0.053</td>
                        <td class="has-text-centered has-text-grey">0.0579</td>
                    </tr>
                    <tr>
                        <td class="has-text-centered has-text-grey">5</td>
                        <td class="has-text-centered has-text-grey">0.143</td>
                        <td class="has-text-centered has-text-grey">2.456</td>
                        <td class="has-text-centered has-text-grey">3.044</td>
                        <td class="has-text-centered has-text-grey">0.235</td>
                        <td class="has-text-centered has-text-grey">0.788</td>
                        <td class="has-text-centered has-text-grey">0.968</td>
                        <td class="has-text-centered has-text-grey">0.265</td>
                        <td class="has-text-centered has-text-grey">0.627</td>
                        <td class="has-text-centered has-text-grey">0.755</td>
                        <td class="has-text-centered has-text-grey">0.315</td>
                        <td class="has-text-centered has-text-grey">0.407</td>
                        <td class="has-text-centered has-text-grey">0.476</td>
                        <td class="has-text-centered has-text-grey">0.595</td>
                        <td class="has-text-centered has-text-grey">0.105</td>
                        <td class="has-text-centered has-text-grey">0.115</td>
                        <td class="has-text-centered has-text-grey">0.945</td>
                        <td class="has-text-centered has-text-grey">0.0424</td>
                        <td class="has-text-centered has-text-grey">0.0463</td>
                    </tr>
                    <tr>
                        <td class="has-text-centered has-text-grey">6</td>
                        <td class="has-text-centered has-text-grey">0.156</td>
                        <td class="has-text-centered has-text-grey">2.047</td>
                        <td class="has-text-centered has-text-grey">2.536</td>
                        <td class="has-text-centered has-text-grey">0.257</td>
                        <td class="has-text-centered has-text-grey">0.657</td>
                        <td class="has-text-centered has-text-grey">0.807</td>
                        <td class="has-text-centered has-text-grey">0.291</td>
                        <td class="has-text-centered has-text-grey">0.522</td>
                        <td class="has-text-centered has-text-grey">0.630</td>
                        <td class="has-text-centered has-text-grey">0.34</td>
                        <td class="has-text-centered has-text-grey">0.339</td>
                        <td class="has-text-centered has-text-grey">0.397</td>
                        <td class="has-text-centered has-text-grey">0.675</td>
                        <td class="has-text-centered has-text-grey">0.0873</td>
                        <td class="has-text-centered has-text-grey">0.0962</td>
                        <td class="has-text-centered has-text-grey">1.03</td>
                        <td class="has-text-centered has-text-grey">0.0354</td>
                        <td class="has-text-centered has-text-grey">0.0386</td>
                    </tr>
        
                    <tr>
                        <td class="has-text-centered has-text-grey">8</td>
                        <td class="has-text-centered has-text-grey">0.180</td>
                        <td class="has-text-centered has-text-grey">1.535</td>
                        <td class="has-text-centered has-text-grey">1.902</td>
                        <td class="has-text-centered has-text-grey">0.297</td>
                        <td class="has-text-centered has-text-grey">0.493</td>
                        <td class="has-text-centered has-text-grey">0.605</td>
                        <td class="has-text-centered has-text-grey">0.336</td>
                        <td class="has-text-centered has-text-grey">0.392</td>
                        <td class="has-text-centered has-text-grey">0.472</td>
                        <td class="has-text-centered has-text-grey">0.385</td>
                        <td class="has-text-centered has-text-grey">0.254</td>
                        <td class="has-text-centered has-text-grey">0.297</td>
                        <td class="has-text-centered has-text-grey">0.77</td>
                        <td class="has-text-centered has-text-grey">0.0655</td>
                        <td class="has-text-centered has-text-grey">0.0721</td>
                        <td class="has-text-centered has-text-grey">1.19</td>
                        <td class="has-text-centered has-text-grey">0.0265</td>
                        <td class="has-text-centered has-text-grey">0.0289</td>
                    </tr>
                        
                    <tr>
                        <td class="has-text-centered has-text-grey">10</td>
                        <td class="has-text-centered has-text-grey">0.202</td>
                        <td class="has-text-centered has-text-grey">1.228</td>
                        <td class="has-text-centered has-text-grey">1.522</td>
                        <td class="has-text-centered has-text-grey">0.332</td>
                        <td class="has-text-centered has-text-grey">0.394</td>
                        <td class="has-text-centered has-text-grey">0.484</td>
                        <td class="has-text-centered has-text-grey">0.376</td>
                        <td class="has-text-centered has-text-grey">0.313</td>
                        <td class="has-text-centered has-text-grey">0.378</td>
                        <td class="has-text-centered has-text-grey">0.430</td>
                        <td class="has-text-centered has-text-grey">0.203</td>
                        <td class="has-text-centered has-text-grey">0.238</td>
                        <td class="has-text-centered has-text-grey">0.855</td>
                        <td class="has-text-centered has-text-grey">0.0524</td>
                        <td class="has-text-centered has-text-grey">0.0577</td>
                        <td class="has-text-centered has-text-grey">1.32</td>
                        <td class="has-text-centered has-text-grey">0.0212</td>
                        <td class="has-text-centered has-text-grey">0.0232</td>
                    </tr>
                                                                                            
                    <tr>
                        <td class="has-text-centered has-text-grey">12</td>
                        <td class="has-text-centered has-text-grey">0.221</td>
                        <td class="has-text-centered has-text-grey">1.023</td>
                        <td class="has-text-centered has-text-grey">1.268</td>
                        <td class="has-text-centered has-text-grey">0.364</td>
                        <td class="has-text-centered has-text-grey">0.328</td>
                        <td class="has-text-centered has-text-grey">0.403</td>
                        <td class="has-text-centered has-text-grey">0.411</td>
                        <td class="has-text-centered has-text-grey">0.261</td>
                        <td class="has-text-centered has-text-grey">0.315</td>
                        <td class="has-text-centered has-text-grey">0.465</td>
                        <td class="has-text-centered has-text-grey">0.17</td>
                        <td class="has-text-centered has-text-grey">0.198</td>
                        <td class="has-text-centered has-text-grey">0.93</td>
                        <td class="has-text-centered has-text-grey">0.0436</td>
                        <td class="has-text-centered has-text-grey">0.0481</td>
                        <td class="has-text-centered has-text-grey">1.44</td>
                        <td class="has-text-centered has-text-grey">0.0177</td>
                        <td class="has-text-centered has-text-grey">0.0193</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">16</td>
                        <td class="has-text-centered has-text-grey">0.257</td>
                        <td class="has-text-centered has-text-grey">0.768</td>
                        <td class="has-text-centered has-text-grey">0.951</td>
                        <td class="has-text-centered has-text-grey">0.423</td>
                        <td class="has-text-centered has-text-grey">0.246</td>
                        <td class="has-text-centered has-text-grey">0.303</td>
                        <td class="has-text-centered has-text-grey">0.479</td>
                        <td class="has-text-centered has-text-grey">0.196</td>
                        <td class="has-text-centered has-text-grey">0.236</td>
                        <td class="has-text-centered has-text-grey">0.54</td>
                        <td class="has-text-centered has-text-grey">0.127</td>
                        <td class="has-text-centered has-text-grey">0.149</td>
                        <td class="has-text-centered has-text-grey">1.085</td>
                        <td class="has-text-centered has-text-grey">0.0327</td>
                        <td class="has-text-centered has-text-grey">0.0361</td>
                        <td class="has-text-centered has-text-grey">1.665</td>
                        <td class="has-text-centered has-text-grey">0.0133</td>
                        <td class="has-text-centered has-text-grey">0.0145</td>
                    </tr>
                                
                    <tr>
                        <td class="has-text-centered has-text-grey">20</td>
                        <td class="has-text-centered has-text-grey">0.29</td>
                        <td class="has-text-centered has-text-grey">0.614</td>
                        <td class="has-text-centered has-text-grey">0.761</td>
                        <td class="has-text-centered has-text-grey">0.477</td>
                        <td class="has-text-centered has-text-grey">0.197</td>
                        <td class="has-text-centered has-text-grey">0.242</td>
                        <td class="has-text-centered has-text-grey">0.539</td>
                        <td class="has-text-centered has-text-grey">0.157</td>
                        <td class="has-text-centered has-text-grey">0.189</td>
                        <td class="has-text-centered has-text-grey">0.605</td>
                        <td class="has-text-centered has-text-grey">0.102</td>
                        <td class="has-text-centered has-text-grey">0.119</td>
                        <td class="has-text-centered has-text-grey">1.21</td>
                        <td class="has-text-centered has-text-grey">0.0262</td>
                        <td class="has-text-centered has-text-grey">0.0289</td>
                        <td class="has-text-centered has-text-grey">1.865</td>
                        <td class="has-text-centered has-text-grey">0.0106</td>
                        <td class="has-text-centered has-text-grey">0.0116</td>
                    </tr>
                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">25</td>
                        <td class="has-text-centered has-text-grey">0.319</td>
                        <td class="has-text-centered has-text-grey">0.491</td>
                        <td class="has-text-centered has-text-grey">0.609</td>
                        <td class="has-text-centered has-text-grey">0.538 </td>
                        <td class="has-text-centered has-text-grey">0.158</td>
                        <td class="has-text-centered has-text-grey">0.194</td>
                        <td class="has-text-centered has-text-grey">0.608</td>
                        <td class="has-text-centered has-text-grey">0.1253</td>
                        <td class="has-text-centered has-text-grey">0.154</td>
                        <td class="has-text-centered has-text-grey">0.705</td>
                        <td class="has-text-centered has-text-grey">0.0814</td>
                        <td class="has-text-centered has-text-grey">0.0952</td>
                        <td class="has-text-centered has-text-grey">1.355</td>
                        <td class="has-text-centered has-text-grey">0.0209</td>
                        <td class="has-text-centered has-text-grey">0.0231</td>
                        <td class="has-text-centered has-text-grey">2.09</td>
                        <td class="has-text-centered has-text-grey">0.00848</td>
                        <td class="has-text-centered has-text-grey">0.00926</td>
                    </tr>
                                                        
                    <tr>
                        <td class="has-text-centered has-text-grey">32</td>
                        <td class="has-text-centered has-text-grey">0.369</td>
                        <td class="has-text-centered has-text-grey">0.384</td>
                        <td class="has-text-centered has-text-grey">0.49</td>
                        <td class="has-text-centered has-text-grey">0.608</td>
                        <td class="has-text-centered has-text-grey">0.123</td>
                        <td class="has-text-centered has-text-grey">0.156</td>
                        <td class="has-text-centered has-text-grey">0.688</td>
                        <td class="has-text-centered has-text-grey">0.0979</td>
                        <td class="has-text-centered has-text-grey">0.1203</td>
                        <td class="has-text-centered has-text-grey">0.79</td>
                        <td class="has-text-centered has-text-grey">0.0636</td>
                        <td class="has-text-centered has-text-grey">0.0766</td>
                        <td class="has-text-centered has-text-grey">1.525</td>
                        <td class="has-text-centered has-text-grey">0.0164</td>
                        <td class="has-text-centered has-text-grey">0.0186</td>
                        <td class="has-text-centered has-text-grey">2.355</td>
                        <td class="has-text-centered has-text-grey">0.00663</td>
                        <td class="has-text-centered has-text-grey">0.00745</td>
                    </tr>
                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">40</td>
                        <td class="has-text-centered has-text-grey">0.412</td>
                        <td class="has-text-centered has-text-grey">0.307</td>
                        <td class="has-text-centered has-text-grey">0.392</td>
                        <td class="has-text-centered has-text-grey">0.68</td>
                        <td class="has-text-centered has-text-grey">0.0985</td>
                        <td class="has-text-centered has-text-grey">0.125</td>
                        <td class="has-text-centered has-text-grey">0.769</td>
                        <td class="has-text-centered has-text-grey">0.0783</td>
                        <td class="has-text-centered has-text-grey">0.0963</td>
                        <td class="has-text-centered has-text-grey">0.875</td>
                        <td class="has-text-centered has-text-grey">0.0509</td>
                        <td class="has-text-centered has-text-grey">0.0613</td>
                        <td class="has-text-centered has-text-grey">1.695</td>
                        <td class="has-text-centered has-text-grey">0.0131</td>
                        <td class="has-text-centered has-text-grey">0.0149</td>
                        <td class="has-text-centered has-text-grey">2.625</td>
                        <td class="has-text-centered has-text-grey">0.0053</td>
                        <td class="has-text-centered has-text-grey">0.00596</td>
                    </tr>
                        
                    <tr>
                        <td class="has-text-centered has-text-grey">60</td>
                        <td class="has-text-centered has-text-grey">0.505</td>
                        <td class="has-text-centered has-text-grey">0.205</td>
                        <td class="has-text-centered has-text-grey">0.266</td>
                        <td class="has-text-centered has-text-grey">0.833</td>
                        <td class="has-text-centered has-text-grey">0.0657</td>
                        <td class="has-text-centered has-text-grey">0.0847</td>
                        <td class="has-text-centered has-text-grey">0.942</td>
                        <td class="has-text-centered has-text-grey">0.0522</td>
                        <td class="has-text-centered has-text-grey">0.0642</td>
                        <td class="has-text-centered has-text-grey">1.055</td>
                        <td class="has-text-centered has-text-grey">0.0339</td>
                        <td class="has-text-centered has-text-grey">0.0417</td>
                        <td class="has-text-centered has-text-grey">2.060</td>
                        <td class="has-text-centered has-text-grey">0.00873</td>
                        <td class="has-text-centered has-text-grey">0.0101</td>
                        <td class="has-text-centered has-text-grey">3.2</td>
                        <td class="has-text-centered has-text-grey">0.00354</td>
                        <td class="has-text-centered has-text-grey">0.00405</td>
                    </tr>
                                                                            
                    <tr>
                        <td class="has-text-centered has-text-grey">100</td>
                        <td class="has-text-centered has-text-grey">0.653</td>
                        <td class="has-text-centered has-text-grey">0.123</td>
                        <td class="has-text-centered has-text-grey">0.160</td>
                        <td class="has-text-centered has-text-grey">1.075</td>
                        <td class="has-text-centered has-text-grey">0.0394</td>
                        <td class="has-text-centered has-text-grey">0.0508</td>
                        <td class="has-text-centered has-text-grey">1.216</td>
                        <td class="has-text-centered has-text-grey">0.0313</td>
                        <td class="has-text-centered has-text-grey">0.0385</td>
                        <td class="has-text-centered has-text-grey">1.355</td>
                        <td class="has-text-centered has-text-grey">0.0203</td>
                        <td class="has-text-centered has-text-grey">0.025</td>
                        <td class="has-text-centered has-text-grey">2.635</td>
                        <td class="has-text-centered has-text-grey">0.00524</td>
                        <td class="has-text-centered has-text-grey">0.00606</td>
                        <td class="has-text-centered has-text-grey">4.105</td>
                        <td class="has-text-centered has-text-grey">0.00212</td>
                        <td class="has-text-centered has-text-grey">0.00243</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">160</td>
                        <td class="has-text-centered has-text-grey">0.825</td>
                        <td class="has-text-centered has-text-grey">0.0768</td>
                        <td class="has-text-centered has-text-grey">0.102</td>
                        <td class="has-text-centered has-text-grey">1.36</td>
                        <td class="has-text-centered has-text-grey">0.0246</td>
                        <td class="has-text-centered has-text-grey">0.0324</td>
                        <td class="has-text-centered has-text-grey">1.538</td>
                        <td class="has-text-centered has-text-grey">0.0196</td>
                        <td class="has-text-centered has-text-grey">0.0241</td>
                        <td class="has-text-centered has-text-grey">1.695</td>
                        <td class="has-text-centered has-text-grey">0.0127</td>
                        <td class="has-text-centered has-text-grey">0.0159</td>
                        <td class="has-text-centered has-text-grey">3.315</td>
                        <td class="has-text-centered has-text-grey">0.00327</td>
                        <td class="has-text-centered has-text-grey">0.00386</td>
                        <td class="has-text-centered has-text-grey">5.175</td>
                        <td class="has-text-centered has-text-grey">0.00133</td>
                        <td class="has-text-centered has-text-grey">0.00155</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">250</td>
                        <td class="has-text-centered has-text-grey">1.032</td>
                        <td class="has-text-centered has-text-grey">0.0491</td>
                        <td class="has-text-centered has-text-grey">0.0652</td>
                        <td class="has-text-centered has-text-grey">1.700</td>
                        <td class="has-text-centered has-text-grey">0.0158</td>
                        <td class="has-text-centered has-text-grey">0.002</td>
                        <td class="has-text-centered has-text-grey">1.923</td>
                        <td class="has-text-centered has-text-grey">0.0125</td>
                        <td class="has-text-centered has-text-grey">0.0154</td>
                        <td class="has-text-centered has-text-grey">2.1</td>
                        <td class="has-text-centered has-text-grey">0.0081</td>
                        <td class="has-text-centered has-text-grey">0.0102</td>
                        <td class="has-text-centered has-text-grey">4.125</td>
                        <td class="has-text-centered has-text-grey">0.00209</td>
                        <td class="has-text-centered has-text-grey">0.00247</td>
                        <td class="has-text-centered has-text-grey">6.45</td>
                        <td class="has-text-centered has-text-grey">0.00085</td>
                        <td class="has-text-centered has-text-grey">0.00099</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey"><p>{{__('Max number of roots')}}</p></td>
                        <td class="has-text-centered has-text-grey" colspan="3">500</td>
                        <td class="has-text-centered has-text-grey" colspan="3">500</td>
                        <td class="has-text-centered has-text-grey" colspan="3">500</td>
                        <td class="has-text-centered has-text-grey" colspan="3">300</td>
                        <td class="has-text-centered has-text-grey" colspan="3">300</td>
                        <td class="has-text-centered has-text-grey" colspan="3">100</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey"><p>{{__('Single line outer diameter')}}</p></td>
                        <td class="has-text-centered has-text-grey" colspan="3">≤0.049mm</td>
                        <td class="has-text-centered has-text-grey" colspan="3">≤0.084mm</td>
                        <td class="has-text-centered has-text-grey" colspan="3">≤0.095mm</td>
                        <td class="has-text-centered has-text-grey" colspan="3">≤0.117mm</td>
                        <td class="has-text-centered has-text-grey" colspan="3">≤0.226mm</td>
                        <td class="has-text-centered has-text-grey" colspan="3">≤0.349mm</td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey"><p>{{__('Bunched method')}}</p></td>
                        <td class="has-text-centered has-text-grey" colspan="18"><p>{{__('Bunched method have directly bunched and multi-step bunched.For example:directly bunched 0.1*105,secondary bunched 0.1*21*5 and multi-step bunched 0.1*7*3*5')}}</p></td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey"><p>{{__('Bundle pitch')}}</p></td>
                        <td class="has-text-centered has-text-grey" colspan="18"><p>{{__("Less than 60 mm,pitch direction:'S' (Counterclockwise); 'Z' (Clockwise)")}}</p></td>
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey"><p>{{__('Brine pinhole')}}</p></td>
                        <td class="has-text-centered has-text-grey" colspan="18"><p>{{__('Pinhole number are less than (2*n) per 5m,n is the single wire number')}}</p></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </section>

</section>
@endsection
