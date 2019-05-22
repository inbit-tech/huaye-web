@extends ('master')

@section ('page-title')
<title>{{ __('Ultra-High Temperature Wire')}} - {{__('Huaye Technology') }}</title>
@endsection

@section('content')
<section id="uht-page">
    <section class="hero is-light is-large uht-background-image">
        <div class="hero-body">
            <div class="container">
                <h1 class="title"></h1>
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

    <section class="section is-medium">
        <div class="container has-background-link has-text-white side-bar-text is-size-3 is-size-4-mobile ">
            <p>{{ __('Model identification') }}</p>
        </div>
    </section>

    <section class="section container">
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

    <section class="section is-medium container has-text-centered is-hidden-desktop">
        <p  class="container has-background-link has-text-white side-bar-text is-size-3 is-size-4-mobile ">更多参数文档请在电脑端查看</p>
    </section>

    <section class="is-hidden-touch">
        <section class="section is-medium">
            <div class="container has-background-link has-text-white side-bar-text is-size-3 is-size-4-mobile ">
                <p>漆包线分类表（非自粘性）</p>
            </div>
        </section>

        <section class="section container">
            <table class="table is-striped is-bordered is-narrow is-size-7-touch is-size-7-desktop is-size-6-fullhd">
                <thead>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white">型号</th>
                        <th class="has-text-centered has-text-white">规格范围 (mm)</th>
                        <th class="has-text-centered has-text-white">温度指数</th>
                        <th class="has-text-centered has-text-white">可焊性</th>
                        <th class="has-text-centered has-text-white">特长(℃)</th>
                        <th class="has-text-centered has-text-white">应用领域</th>
                    </tr>
                </thead>
                <tbody class="has-text-white">
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">LSUEW</td>
                        <td class="has-text-centered has-text-grey-dark">0.040~0.500</td>
                        <td class="has-text-centered has-text-grey-dark">E(120℃)</td>
                        <td class="has-text-centered has-text-grey-dark">YES</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="4"><p>300-320℃可以直焊，易着色。耐高频、耐潮性能好。弱点是机械强度稍差，耐热性能不高。</p></td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="7"><p>广泛应用于电子家电和精密仪器电讯，仪表上。</p></td>                    
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark" rowspan="3">UEW</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="3">0.040~0.500</td>
                        <td class="has-text-centered has-text-grey-dark">B(130℃)</td>       
                        <td class="has-text-centered has-text-grey-dark" rowspan="3">YES</td>       
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">F(155℃)</td>           
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">H(180℃)</td>           
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark" rowspan="3">UEWY</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="3">0.040~0.500</td>
                        <td class="has-text-centered has-text-grey-dark">B(130℃)</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="3">YES</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="3"><p>聚酰胺复合聚氨酯漆包线，370-390℃可以直焊，外敷尼龙层可提高可绕性。</p></td>                 
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">F(155℃)</td>           
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">H(180℃)</td>           
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark" rowspan="2">SPEW</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="2">0.040~0.700</td>
                        <td class="has-text-centered has-text-grey-dark">F(155℃)</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="2">YES</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="2"><p>直焊性聚酯漆包线，380-400℃可以直焊</p></td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="5"><p>广泛应用于各种电机、电器、仪表、电讯器材及家电产品。</p></td>
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">H(180℃)</td>           
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">PEW</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="3">0.040~0.700</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="3">F(155℃)</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="3">NO</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="3"><p>机械强度高，并具有良好的弹性、耐刮性、附着性、高耐温等级及优良可绕性。弱点是耐热冲击性能差，耐潮性能较低。</p></td>
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">PEWY</td>
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">PE/AIW</td>
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">EIW</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="4">0.040~0.700</td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="3">H(180℃)</td>
                        <td class="has-text-centered has-text-grey-dark">NO</td>
                        <td class="has-text-centered has-text-grey-dark"><p>耐热冲击性能好，耐软化击穿温度高，机械强度优良，高耐温等级及优良可绕性。弱点是封闭条件下易水解。</p></td>
                        <td class="has-text-centered has-text-grey-dark" rowspan="3"><p>广泛应用于耐热要求高的电机、电器、仪表、电动工具</p></td>
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">SEIW</td>
                        <td class="has-text-centered has-text-grey-dark">YES</td>                    
                        <td class="has-text-centered has-text-grey-dark"><p>直焊性聚脂亚胺漆包线，450-460℃可以直焊</p></td>                    
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">EIWY</td>
                        <td class="has-text-centered has-text-grey-dark">NO</td>                    
                        <td class="has-text-centered has-text-grey-dark"><p>表层聚酰胺涂层可提高耐磨性及可绕性。</p></td>                    
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">EI/AIW</td>
                        <td class="has-text-centered has-text-grey-dark">C(200℃)</td>                    
                        <td class="has-text-centered has-text-grey-dark">NO</td>                   
                        <td class="has-text-centered has-text-grey-dark"><p>高耐温等级及优良的耐热、耐软化击穿温度高、耐油、耐磨以及耐冷媒特性。</p></td>                    
                        <td class="has-text-centered has-text-grey-dark"><p>广泛应用于冰箱压缩机、空调压缩机、电动工具、防爆电动机。</p></td>                    
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">AIW</td>
                        <td class="has-text-centered has-text-grey-dark">0.150~0.600</td>                    
                        <td class="has-text-centered has-text-grey-dark">C(220℃)</td>                   
                        <td class="has-text-centered has-text-grey-dark">NO</td>                    
                        <td class="has-text-centered has-text-grey-dark"><p>超高耐温等级漆包线</p></td>                    
                        <td class="has-text-centered has-text-grey-dark"><p>应用于超高温要求之产品。</p></td>                    
                    </tr>
                    <tr class="has-background-grey-lighter">
                        <td class="has-text-centered has-text-grey-dark">PIW</td>
                        <td class="has-text-centered has-text-grey-dark">0.150~0.600</td>                    
                        <td class="has-text-centered has-text-grey-dark">C(240℃)</td>                   
                        <td class="has-text-centered has-text-grey-dark">NO</td>                    
                        <td class="has-text-centered has-text-grey-dark"><p>超高耐温等级漆包线</p></td>                    
                        <td class="has-text-centered has-text-grey-dark"><p>航空航天、新能源、汽车电子</p></td>                    
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="section is-medium">
            <div class="container has-background-link has-text-white side-bar-text is-size-3 is-size-4-mobile">
                <p>漆包线技术特性（非自粘性)  参照标准：JIS C 3202</p>
            </div>
        </section>

        <section class="section container">
            <table class="table is-striped is-hoverable is-bordered is-narrow is-size-7-touch is-size-7-desktop is-size-6-fullhd">
                <thead>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white" rowspan="2">项目<br>/<br>序号</th>
                        <th class="has-text-centered has-text-white" rowspan="2">导体公差(±mm)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">伸长率≥(%)</th>
                        <th class="has-text-centered has-text-white" colspan="3">最大回弹角（º）</th>
                        <th class="has-text-centered has-text-white" rowspan="2">拉伸/卷绕(%/d)</th>
                        <th class="has-text-centered has-text-white" colspan="2">击穿电压(v)</th>
                        <th class="has-text-centered has-text-white" colspan="2">漆膜连续性(孔/30m)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">盐水针孔≤(孔/5m)</th>
                        <th class="has-text-centered has-text-white" colspan="2">电阻(Ω∕m)</th>
                        <th class="has-text-centered has-text-white" colspan="3">最小漆膜厚度D-d(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="3">最大外径(mm)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">导体标称直径(mm)</th>
                    </tr>
                    <tr class="has-background-link">	
                        <th class="has-text-centered has-text-white">3种</th> 			
                        <th class="has-text-centered has-text-white">2种</th> 
                        <th class="has-text-centered has-text-white">1种</th> 			
                        <th class="has-text-centered has-text-white">3种</th> 
                        <th class="has-text-centered has-text-white">2种</th>
                        <th class="has-text-centered has-text-white">3种</th> 
                        <th class="has-text-centered has-text-white">2种</th> 			
                        <th class="has-text-centered has-text-white">最小值</th> 	
                        <th class="has-text-centered has-text-white">最大值</th> 
                        <th class="has-text-centered has-text-white">3种</th> 			
                        <th class="has-text-centered has-text-white">2种</th> 
                        <th class="has-text-centered has-text-white">1种</th> 
                        <th class="has-text-centered has-text-white">3种</th> 			
                        <th class="has-text-centered has-text-white">2种</th> 
                        <th class="has-text-centered has-text-white">1种</th> 	
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.001</td>  
                        <td class="has-text-centered has-text-grey">13</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">15%</td>  
                        <td class="has-text-centered has-text-grey">350</td>  
                        <td class="has-text-centered has-text-grey">500</td>  
                        <td class="has-text-centered has-text-grey">60</td>  
                        <td class="has-text-centered has-text-grey">24</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">13.195</td>  
                        <td class="has-text-centered has-text-grey">14.011</td>  
                        <td class="has-text-centered has-text-grey">0.004</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.052</td>  
                        <td class="has-text-centered has-text-grey">0.056</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.040</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">2</td>  
                        <td class="has-text-centered has-text-grey">0.001</td>  
                        <td class="has-text-centered has-text-grey">13</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">15%</td>  
                        <td class="has-text-centered has-text-grey">350</td>  
                        <td class="has-text-centered has-text-grey">500</td>  
                        <td class="has-text-centered has-text-grey">60</td>  
                        <td class="has-text-centered has-text-grey">24</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">10.426</td>  
                        <td class="has-text-centered has-text-grey">11.07</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">0.008</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.057</td>  
                        <td class="has-text-centered has-text-grey">0.064</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.045</td>  
                    </tr>
                    
                    <tr>
                        <td class="has-text-centered has-text-grey">3</td>  
                        <td class="has-text-centered has-text-grey">0.001</td>  
                        <td class="has-text-centered has-text-grey">13</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">15%</td>  
                        <td class="has-text-centered has-text-grey">350</td>  
                        <td class="has-text-centered has-text-grey">500</td>  
                        <td class="has-text-centered has-text-grey">60</td>  
                        <td class="has-text-centered has-text-grey">24</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">8.445</td>  
                        <td class="has-text-centered has-text-grey">8.967</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">0.008</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.064</td>  
                        <td class="has-text-centered has-text-grey">0.069</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.050</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">4</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">13</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">15%</td>  
                        <td class="has-text-centered has-text-grey">350</td>  
                        <td class="has-text-centered has-text-grey">500</td>  
                        <td class="has-text-centered has-text-grey">60</td>  
                        <td class="has-text-centered has-text-grey">24</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">5.864</td>  
                        <td class="has-text-centered has-text-grey">6.227</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">0.008</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.075</td>  
                        <td class="has-text-centered has-text-grey">0.081</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.060 </td>  
                    </tr>
                    
                    <tr>
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">13</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">15%</td>  
                        <td class="has-text-centered has-text-grey">350</td>  
                        <td class="has-text-centered has-text-grey">500</td>  
                        <td class="has-text-centered has-text-grey">60</td>  
                        <td class="has-text-centered has-text-grey">24</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">4.997</td>  
                        <td class="has-text-centered has-text-grey">5.306</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">0.008</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.08</td>  
                        <td class="has-text-centered has-text-grey">0.086</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.065</td>  
                    </tr>
                    
                    <tr>
                        <td class="has-text-centered has-text-grey">6</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">13</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">15%</td>  
                        <td class="has-text-centered has-text-grey">425</td>  
                        <td class="has-text-centered has-text-grey">700</td>  
                        <td class="has-text-centered has-text-grey">60</td>  
                        <td class="has-text-centered has-text-grey">24</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">4.309</td>  
                        <td class="has-text-centered has-text-grey">4.575</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">0.008</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.085</td>  
                        <td class="has-text-centered has-text-grey">0.091</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.070</td>  
                    </tr>
                    
                    <tr>
                        <td class="has-text-centered has-text-grey">7</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">14</td>  
                        <td class="has-text-centered has-text-grey">70</td>  
                        <td class="has-text-centered has-text-grey">80</td>  
                        <td class="has-text-centered has-text-grey">100</td>  
                        <td class="has-text-centered has-text-grey">15%</td>  
                        <td class="has-text-centered has-text-grey">425</td>  
                        <td class="has-text-centered has-text-grey">850</td>  
                        <td class="has-text-centered has-text-grey">40</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">3.299</td>  
                        <td class="has-text-centered has-text-grey">3.503</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.097</td>  
                        <td class="has-text-centered has-text-grey">0.103</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.080 </td>  
                    </tr>
                
                    <tr>
                        <td class="has-text-centered has-text-grey">8</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">67</td>  
                        <td class="has-text-centered has-text-grey">77</td>  
                        <td class="has-text-centered has-text-grey">94</td>  
                        <td class="has-text-centered has-text-grey">15%</td>  
                        <td class="has-text-centered has-text-grey">500</td>  
                        <td class="has-text-centered has-text-grey">900</td>  
                        <td class="has-text-centered has-text-grey">40</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">2.606</td>  
                        <td class="has-text-centered has-text-grey">2.768</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.107</td>  
                        <td class="has-text-centered has-text-grey">0.113</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.090</td>  
                    </tr>
                    
                    <tr>
                        <td class="has-text-centered has-text-grey">9</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">16</td>  
                        <td class="has-text-centered has-text-grey">64</td>  
                        <td class="has-text-centered has-text-grey">73</td>  
                        <td class="has-text-centered has-text-grey">90</td>  
                        <td class="has-text-centered has-text-grey">15%</td>  
                        <td class="has-text-centered has-text-grey">500</td>  
                        <td class="has-text-centered has-text-grey">950</td>  
                        <td class="has-text-centered has-text-grey">40</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">2.111</td>  
                        <td class="has-text-centered has-text-grey">2.242</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.018</td>  
                        <td class="has-text-centered has-text-grey">0.118</td>  
                        <td class="has-text-centered has-text-grey">0.125</td>  
                        <td class="has-text-centered has-text-grey">0.14</td>  
                        <td class="has-text-centered has-text-grey">0.100</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">10</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">17</td>  
                        <td class="has-text-centered has-text-grey">64</td>  
                        <td class="has-text-centered has-text-grey">73</td>  
                        <td class="has-text-centered has-text-grey">88</td>  
                        <td class="has-text-centered has-text-grey">15%</td>  
                        <td class="has-text-centered has-text-grey">1300</td>  
                        <td class="has-text-centered has-text-grey">2700</td>  
                        <td class="has-text-centered has-text-grey">40</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">1.745</td>  
                        <td class="has-text-centered has-text-grey">1.853</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.018</td>  
                        <td class="has-text-centered has-text-grey">0.128</td>  
                        <td class="has-text-centered has-text-grey">0.135</td>  
                        <td class="has-text-centered has-text-grey">0.15</td>  
                        <td class="has-text-centered has-text-grey">0.110</td>  
                    </tr>
                                                                                                                
                    <tr>
                        <td class="has-text-centered has-text-grey">11</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">17</td>  
                        <td class="has-text-centered has-text-grey">62</td>  
                        <td class="has-text-centered has-text-grey">70</td>  
                        <td class="has-text-centered has-text-grey">84</td>  
                        <td class="has-text-centered has-text-grey">15%</td>  
                        <td class="has-text-centered has-text-grey">1500</td>  
                        <td class="has-text-centered has-text-grey">2800</td>  
                        <td class="has-text-centered has-text-grey">40</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">1.466</td>  
                        <td class="has-text-centered has-text-grey">1.557</td>  
                        <td class="has-text-centered has-text-grey">0.008</td>  
                        <td class="has-text-centered has-text-grey">0.012</td>  
                        <td class="has-text-centered has-text-grey">0.02</td>  
                        <td class="has-text-centered has-text-grey">0.139</td>  
                        <td class="has-text-centered has-text-grey">0.147</td>  
                        <td class="has-text-centered has-text-grey">0.162</td>  
                        <td class="has-text-centered has-text-grey">0.120</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">12</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">18</td>  
                        <td class="has-text-centered has-text-grey">59</td>  
                        <td class="has-text-centered has-text-grey">67</td>  
                        <td class="has-text-centered has-text-grey">79</td>  
                        <td class="has-text-centered has-text-grey">15%</td>  
                        <td class="has-text-centered has-text-grey">1600</td>  
                        <td class="has-text-centered has-text-grey">3000</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">1.249</td>  
                        <td class="has-text-centered has-text-grey">1.326</td>  
                        <td class="has-text-centered has-text-grey">0.008</td>  
                        <td class="has-text-centered has-text-grey">0.012</td>  
                        <td class="has-text-centered has-text-grey">0.02</td>  
                        <td class="has-text-centered has-text-grey">0.149</td>  
                        <td class="has-text-centered has-text-grey">0.157</td>  
                        <td class="has-text-centered has-text-grey">0.172</td>  
                        <td class="has-text-centered has-text-grey">0.130</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">13</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">18</td>  
                        <td class="has-text-centered has-text-grey">59</td>  
                        <td class="has-text-centered has-text-grey">67</td>  
                        <td class="has-text-centered has-text-grey">79</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">1600</td>  
                        <td class="has-text-centered has-text-grey">3000</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">1.077</td>  
                        <td class="has-text-centered has-text-grey">1.144</td>  
                        <td class="has-text-centered has-text-grey">0.008</td>  
                        <td class="has-text-centered has-text-grey">0.012</td>  
                        <td class="has-text-centered has-text-grey">0.02</td>  
                        <td class="has-text-centered has-text-grey">0.159</td>  
                        <td class="has-text-centered has-text-grey">0.167</td>  
                        <td class="has-text-centered has-text-grey">0.182</td>  
                        <td class="has-text-centered has-text-grey">0.140</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">14</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">19</td>  
                        <td class="has-text-centered has-text-grey">59</td>  
                        <td class="has-text-centered has-text-grey">67</td>  
                        <td class="has-text-centered has-text-grey">78</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">1700</td>  
                        <td class="has-text-centered has-text-grey">3200</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.938</td>  
                        <td class="has-text-centered has-text-grey">0.996</td>  
                        <td class="has-text-centered has-text-grey">0.008</td>  
                        <td class="has-text-centered has-text-grey">0.012</td>  
                        <td class="has-text-centered has-text-grey">0.02</td>  
                        <td class="has-text-centered has-text-grey">0.169</td>  
                        <td class="has-text-centered has-text-grey">0.177</td>  
                        <td class="has-text-centered has-text-grey">0.192</td>  
                        <td class="has-text-centered has-text-grey">0.150</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">19</td>  
                        <td class="has-text-centered has-text-grey">59</td>  
                        <td class="has-text-centered has-text-grey">67</td>  
                        <td class="has-text-centered has-text-grey">78</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">1700</td>  
                        <td class="has-text-centered has-text-grey">3200</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.825</td>  
                        <td class="has-text-centered has-text-grey">0.876</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.014</td>  
                        <td class="has-text-centered has-text-grey">0.022</td>  
                        <td class="has-text-centered has-text-grey">0.181</td>  
                        <td class="has-text-centered has-text-grey">0.189</td>  
                        <td class="has-text-centered has-text-grey">0.204</td>  
                        <td class="has-text-centered has-text-grey">0.160</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">16</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">20</td>  
                        <td class="has-text-centered has-text-grey">57</td>  
                        <td class="has-text-centered has-text-grey">65</td>  
                        <td class="has-text-centered has-text-grey">75</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">1700</td>  
                        <td class="has-text-centered has-text-grey">3300</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.731</td>  
                        <td class="has-text-centered has-text-grey">0.776</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.014</td>  
                        <td class="has-text-centered has-text-grey">0.022</td>  
                        <td class="has-text-centered has-text-grey">0.191</td>  
                        <td class="has-text-centered has-text-grey">0.199</td>  
                        <td class="has-text-centered has-text-grey">0.214</td>  
                        <td class="has-text-centered has-text-grey">0.170</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">17</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">20</td>  
                        <td class="has-text-centered has-text-grey">57</td>  
                        <td class="has-text-centered has-text-grey">65</td>  
                        <td class="has-text-centered has-text-grey">75</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">1700</td>  
                        <td class="has-text-centered has-text-grey">3300</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.6516</td>  
                        <td class="has-text-centered has-text-grey">0.6928</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.016</td>  
                        <td class="has-text-centered has-text-grey">0.024</td>  
                        <td class="has-text-centered has-text-grey">0.202</td>  
                        <td class="has-text-centered has-text-grey">0.211</td>  
                        <td class="has-text-centered has-text-grey">0.226</td>  
                        <td class="has-text-centered has-text-grey">0.180</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">18</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">21</td>  
                        <td class="has-text-centered has-text-grey">54</td>  
                        <td class="has-text-centered has-text-grey">62</td>  
                        <td class="has-text-centered has-text-grey">72</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">1800</td>  
                        <td class="has-text-centered has-text-grey">3500</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.5854</td>  
                        <td class="has-text-centered has-text-grey">0.6211</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.016</td>  
                        <td class="has-text-centered has-text-grey">0.024</td>  
                        <td class="has-text-centered has-text-grey">0.212</td>  
                        <td class="has-text-centered has-text-grey">0.221</td>  
                        <td class="has-text-centered has-text-grey">0.236</td>  
                        <td class="has-text-centered has-text-grey">0.190</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">19</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">21</td>  
                        <td class="has-text-centered has-text-grey">54</td>  
                        <td class="has-text-centered has-text-grey">62</td>  
                        <td class="has-text-centered has-text-grey">72</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">1800</td>  
                        <td class="has-text-centered has-text-grey">3500</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.5289</td>  
                        <td class="has-text-centered has-text-grey">0.5599</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.016</td>  
                        <td class="has-text-centered has-text-grey">0.024</td>  
                        <td class="has-text-centered has-text-grey">0.222</td>  
                        <td class="has-text-centered has-text-grey">0.231</td>  
                        <td class="has-text-centered has-text-grey">0.246</td>  
                        <td class="has-text-centered has-text-grey">0.200</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">20</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">21</td>  
                        <td class="has-text-centered has-text-grey">51</td>  
                        <td class="has-text-centered has-text-grey">59</td>  
                        <td class="has-text-centered has-text-grey">68</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">1900</td>  
                        <td class="has-text-centered has-text-grey">3700</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.4802</td>  
                        <td class="has-text-centered has-text-grey">0.5074</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.016</td>  
                        <td class="has-text-centered has-text-grey">0.024</td>  
                        <td class="has-text-centered has-text-grey">0.232</td>  
                        <td class="has-text-centered has-text-grey">0.241</td>  
                        <td class="has-text-centered has-text-grey">0.256</td>  
                        <td class="has-text-centered has-text-grey">0.210</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">21</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">22</td>  
                        <td class="has-text-centered has-text-grey">49</td>  
                        <td class="has-text-centered has-text-grey">56</td>  
                        <td class="has-text-centered has-text-grey">65</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2100</td>  
                        <td class="has-text-centered has-text-grey">3900</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.4009</td>  
                        <td class="has-text-centered has-text-grey">0.4223</td>  
                        <td class="has-text-centered has-text-grey">0.012</td>  
                        <td class="has-text-centered has-text-grey">0.018</td>  
                        <td class="has-text-centered has-text-grey">0.026</td>  
                        <td class="has-text-centered has-text-grey">0.255</td>  
                        <td class="has-text-centered has-text-grey">0.264</td>  
                        <td class="has-text-centered has-text-grey">0.278</td>  
                        <td class="has-text-centered has-text-grey">0.230</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">22</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">22</td>  
                        <td class="has-text-centered has-text-grey">49</td>  
                        <td class="has-text-centered has-text-grey">56</td>  
                        <td class="has-text-centered has-text-grey">65</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2100</td>  
                        <td class="has-text-centered has-text-grey">3900</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.3398</td>  
                        <td class="has-text-centered has-text-grey">0.3569</td>  
                        <td class="has-text-centered has-text-grey">0.012</td>  
                        <td class="has-text-centered has-text-grey">0.018</td>  
                        <td class="has-text-centered has-text-grey">0.026</td>  
                        <td class="has-text-centered has-text-grey">0.275</td>  
                        <td class="has-text-centered has-text-grey">0.284</td>  
                        <td class="has-text-centered has-text-grey">0.298</td>  
                        <td class="has-text-centered has-text-grey">0.250</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">23</td>  
                        <td class="has-text-centered has-text-grey">0.003</td>  
                        <td class="has-text-centered has-text-grey">22</td>  
                        <td class="has-text-centered has-text-grey">47</td>  
                        <td class="has-text-centered has-text-grey">53</td>  
                        <td class="has-text-centered has-text-grey">61</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2200</td>  
                        <td class="has-text-centered has-text-grey">4000</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.2896</td>  
                        <td class="has-text-centered has-text-grey">0.3079</td>  
                        <td class="has-text-centered has-text-grey">0.012</td>  
                        <td class="has-text-centered has-text-grey">0.018</td>  
                        <td class="has-text-centered has-text-grey">0.026</td>  
                        <td class="has-text-centered has-text-grey">0.295</td>  
                        <td class="has-text-centered has-text-grey">0.304</td>  
                        <td class="has-text-centered has-text-grey">0.32</td>  
                        <td class="has-text-centered has-text-grey">0.270</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">24</td>  
                        <td class="has-text-centered has-text-grey">0.003</td>  
                        <td class="has-text-centered has-text-grey">23</td>  
                        <td class="has-text-centered has-text-grey">50</td>  
                        <td class="has-text-centered has-text-grey">55</td>  
                        <td class="has-text-centered has-text-grey">62</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2200</td>  
                        <td class="has-text-centered has-text-grey">4100</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.2351</td>  
                        <td class="has-text-centered has-text-grey">0.2489</td>  
                        <td class="has-text-centered has-text-grey">0.014</td>  
                        <td class="has-text-centered has-text-grey">0.02</td>  
                        <td class="has-text-centered has-text-grey">0.028</td>  
                        <td class="has-text-centered has-text-grey">0.327</td>  
                        <td class="has-text-centered has-text-grey">0.337</td>  
                        <td class="has-text-centered has-text-grey">0.352</td>  
                        <td class="has-text-centered has-text-grey">0.300</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">0.003</td>  
                        <td class="has-text-centered has-text-grey">23</td>  
                        <td class="has-text-centered has-text-grey">50</td>  
                        <td class="has-text-centered has-text-grey">55</td>  
                        <td class="has-text-centered has-text-grey">62</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2200</td>  
                        <td class="has-text-centered has-text-grey">4100</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.2203</td>  
                        <td class="has-text-centered has-text-grey">0.2329</td>  
                        <td class="has-text-centered has-text-grey">0.014</td>  
                        <td class="has-text-centered has-text-grey">0.02</td>  
                        <td class="has-text-centered has-text-grey">0.028</td>  
                        <td class="has-text-centered has-text-grey">0.337</td>  
                        <td class="has-text-centered has-text-grey">0.347</td>  
                        <td class="has-text-centered has-text-grey">0.362</td>  
                        <td class="has-text-centered has-text-grey">0.310</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">26</td>  
                        <td class="has-text-centered has-text-grey">0.003</td>  
                        <td class="has-text-centered has-text-grey">23</td>  
                        <td class="has-text-centered has-text-grey">48</td>  
                        <td class="has-text-centered has-text-grey">53</td>  
                        <td class="has-text-centered has-text-grey">59</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2300</td>  
                        <td class="has-text-centered has-text-grey">4300</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.1732</td>  
                        <td class="has-text-centered has-text-grey">0.1823</td>  
                        <td class="has-text-centered has-text-grey">0.014</td>  
                        <td class="has-text-centered has-text-grey">0.02</td>  
                        <td class="has-text-centered has-text-grey">0.028</td>  
                        <td class="has-text-centered has-text-grey">0.377</td>  
                        <td class="has-text-centered has-text-grey">0.387</td>  
                        <td class="has-text-centered has-text-grey">0.402</td>  
                        <td class="has-text-centered has-text-grey">0.350</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">27</td>  
                        <td class="has-text-centered has-text-grey">0.003</td>  
                        <td class="has-text-centered has-text-grey">24</td>  
                        <td class="has-text-centered has-text-grey">45</td>  
                        <td class="has-text-centered has-text-grey">50</td>  
                        <td class="has-text-centered has-text-grey">55</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2300</td>  
                        <td class="has-text-centered has-text-grey">4400</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.1551</td>  
                        <td class="has-text-centered has-text-grey">0.163</td>  
                        <td class="has-text-centered has-text-grey">0.014</td>  
                        <td class="has-text-centered has-text-grey">0.02</td>  
                        <td class="has-text-centered has-text-grey">0.028</td>  
                        <td class="has-text-centered has-text-grey">0.397</td>  
                        <td class="has-text-centered has-text-grey">0.407</td>  
                        <td class="has-text-centered has-text-grey">0.424</td>  
                        <td class="has-text-centered has-text-grey">0.370</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">28</td>  
                        <td class="has-text-centered has-text-grey">0.004</td>  
                        <td class="has-text-centered has-text-grey">24</td>  
                        <td class="has-text-centered has-text-grey">45</td>  
                        <td class="has-text-centered has-text-grey">50</td>  
                        <td class="has-text-centered has-text-grey">55</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2300</td>  
                        <td class="has-text-centered has-text-grey">4400</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.1329</td>  
                        <td class="has-text-centered has-text-grey">0.1393</td>  
                        <td class="has-text-centered has-text-grey">0.014</td>  
                        <td class="has-text-centered has-text-grey">0.022</td>  
                        <td class="has-text-centered has-text-grey">0.03</td>  
                        <td class="has-text-centered has-text-grey">0.429</td>  
                        <td class="has-text-centered has-text-grey">0.439</td>  
                        <td class="has-text-centered has-text-grey">0.456</td>  
                        <td class="has-text-centered has-text-grey">0.400 </td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">29</td>  
                        <td class="has-text-centered has-text-grey">0.004</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">44</td>  
                        <td class="has-text-centered has-text-grey">48</td>  
                        <td class="has-text-centered has-text-grey">53</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2300</td>  
                        <td class="has-text-centered has-text-grey">4400</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.1052</td>  
                        <td class="has-text-centered has-text-grey">0.1099</td>  
                        <td class="has-text-centered has-text-grey">0.014</td>  
                        <td class="has-text-centered has-text-grey">0.022</td>  
                        <td class="has-text-centered has-text-grey">0.032</td>  
                        <td class="has-text-centered has-text-grey">0.479</td>  
                        <td class="has-text-centered has-text-grey">0.49</td>  
                        <td class="has-text-centered has-text-grey">0.508</td>  
                        <td class="has-text-centered has-text-grey">0.450</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">30</td>  
                        <td class="has-text-centered has-text-grey">0.005</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">43</td>  
                        <td class="has-text-centered has-text-grey">47</td>  
                        <td class="has-text-centered has-text-grey">51</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2400</td>  
                        <td class="has-text-centered has-text-grey">4600</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.0849</td>  
                        <td class="has-text-centered has-text-grey">0.0892</td>  
                        <td class="has-text-centered has-text-grey">0.016</td>  
                        <td class="has-text-centered has-text-grey">0.024</td>  
                        <td class="has-text-centered has-text-grey">0.034</td>  
                        <td class="has-text-centered has-text-grey">0.531</td>  
                        <td class="has-text-centered has-text-grey">0.542</td>  
                        <td class="has-text-centered has-text-grey">0.56</td>  
                        <td class="has-text-centered has-text-grey">0.500</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">31</td>  
                        <td class="has-text-centered has-text-grey">0.005</td>  
                        <td class="has-text-centered has-text-grey">26</td>  
                        <td class="has-text-centered has-text-grey">41</td>  
                        <td class="has-text-centered has-text-grey">44</td>  
                        <td class="has-text-centered has-text-grey">48</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2500</td>  
                        <td class="has-text-centered has-text-grey">4600</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.0703</td>  
                        <td class="has-text-centered has-text-grey">0.0736</td>  
                        <td class="has-text-centered has-text-grey">0.016</td>  
                        <td class="has-text-centered has-text-grey">0.024</td>  
                        <td class="has-text-centered has-text-grey">0.034</td>  
                        <td class="has-text-centered has-text-grey">0.581</td>  
                        <td class="has-text-centered has-text-grey">0.592</td>  
                        <td class="has-text-centered has-text-grey">0.62</td>  
                        <td class="has-text-centered has-text-grey">0.550</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">32</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">27</td>  
                        <td class="has-text-centered has-text-grey">46</td>  
                        <td class="has-text-centered has-text-grey">50</td>  
                        <td class="has-text-centered has-text-grey">53</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2600</td>  
                        <td class="has-text-centered has-text-grey">4800</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.0592</td>  
                        <td class="has-text-centered has-text-grey">0.0618</td>  
                        <td class="has-text-centered has-text-grey">0.016</td>  
                        <td class="has-text-centered has-text-grey">0.024</td>  
                        <td class="has-text-centered has-text-grey">0.034</td>  
                        <td class="has-text-centered has-text-grey">0.632</td>  
                        <td class="has-text-centered has-text-grey">0.644</td>  
                        <td class="has-text-centered has-text-grey">0.672</td>  
                        <td class="has-text-centered has-text-grey">0.600</td>  
                    </tr>
                                                                                                        
                    <tr>
                        <td class="has-text-centered has-text-grey">33</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">29</td>  
                        <td class="has-text-centered has-text-grey">50</td>  
                        <td class="has-text-centered has-text-grey">47</td>  
                        <td class="has-text-centered has-text-grey">44</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2700</td>  
                        <td class="has-text-centered has-text-grey">5000</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.0501</td>  
                        <td class="has-text-centered has-text-grey">0.05293</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.024</td>  
                        <td class="has-text-centered has-text-grey">0.036</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.694</td>  
                        <td class="has-text-centered has-text-grey">0.724</td>  
                        <td class="has-text-centered has-text-grey">0.650</td>  
                    </tr>
                            
                    <tr>
                        <td class="has-text-centered has-text-grey">34</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">29</td>  
                        <td class="has-text-centered has-text-grey">46</td>  
                        <td class="has-text-centered has-text-grey">43</td>  
                        <td class="has-text-centered has-text-grey">44</td>  
                        <td class="has-text-centered has-text-grey">1d</td>  
                        <td class="has-text-centered has-text-grey">2700</td>  
                        <td class="has-text-centered has-text-grey">5000</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.04329</td>  
                        <td class="has-text-centered has-text-grey">0.04558</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.026</td>  
                        <td class="has-text-centered has-text-grey">0.038</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">0.746</td>  
                        <td class="has-text-centered has-text-grey">0.776</td>  
                        <td class="has-text-centered has-text-grey">0.700</td>  
                    </tr>			 				
                </tbody>
            </table>
        </section>

        <section class="section is-medium">
            <div class="container has-background-link has-text-white side-bar-text is-size-3 is-size-4-mobile">
                <p>漆包线技术特性（非自粘性)  参照标准：MW 1000:2003</p>
            </div>
        </section>

        <section class="section container">
            <table class="table is-striped is-hoverable is-bordered is-narrow is-size-7-touch is-size-7-desktop is-size-6-fullhd">
                <thead>
                    <tr class="has-background-link">
                        <th class="has-text-centered has-text-white" rowspan="2">项目<br>/<br>序号</th>
                        <th class="has-text-centered has-text-white" rowspan="2">AWG线缆号</th>
                        <th class="has-text-centered has-text-white" rowspan="2">导体公差(±mm)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">伸长率≥(%)</th>
                        <th class="has-text-centered has-text-white" colspan="3">最大回弹角（º）</th>
                        <th class="has-text-centered has-text-white" rowspan="2">柔韧性/附着性</th>
                        <th class="has-text-centered has-text-white" colspan="2">击穿电压(v)</th>
                        <th class="has-text-centered has-text-white" colspan="2">漆膜连续性(孔/30m)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">盐水针孔≤(孔/5m)</th>
                        <th class="has-text-centered has-text-white" colspan="2">电阻(Ω∕m)</th>
                        <th class="has-text-centered has-text-white" colspan="3">最小漆膜厚度D-d(mm)</th>
                        <th class="has-text-centered has-text-white" colspan="3">最大外径(mm)</th>
                        <th class="has-text-centered has-text-white" rowspan="2">导体标称直径(mm)</th>
                    </tr>
                    <tr class="has-background-link">	
                        <th class="has-text-centered has-text-white">G1</th> 			
                        <th class="has-text-centered has-text-white">G2</th> 
                        <th class="has-text-centered has-text-white">G3</th> 			
                        <th class="has-text-centered has-text-white">G1</th> 			
                        <th class="has-text-centered has-text-white">G2</th> 
                        <th class="has-text-centered has-text-white">G1</th> 			
                        <th class="has-text-centered has-text-white">G2</th> 			
                        <th class="has-text-centered has-text-white">最小值</th> 	
                        <th class="has-text-centered has-text-white">最大值</th> 
                        <th class="has-text-centered has-text-white">G1</th> 			
                        <th class="has-text-centered has-text-white">G2</th> 
                        <th class="has-text-centered has-text-white">G3</th> 
                        <th class="has-text-centered has-text-white">G1</th> 			
                        <th class="has-text-centered has-text-white">G2</th> 
                        <th class="has-text-centered has-text-white">G3</th> 	
                    </tr>
                </thead>
                <tbody>																							
                    <tr>
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">46</td>  
                        <td class="has-text-centered has-text-grey">0.001</td>  
                        <td class="has-text-centered has-text-grey">10</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉断</td>  
                        <td class="has-text-centered has-text-grey">250</td>  
                        <td class="has-text-centered has-text-grey">475</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">12.9</td>  
                        <td class="has-text-centered has-text-grey">14.507</td>  
                        <td class="has-text-centered has-text-grey">0.005</td>  
                        <td class="has-text-centered has-text-grey">0.0076</td>  
                        <td class="has-text-centered has-text-grey">0.0127</td>  
                        <td class="has-text-centered has-text-grey">0.0508</td>  
                        <td class="has-text-centered has-text-grey">0.0533</td>  
                        <td class="has-text-centered has-text-grey">0.061</td>  
                        <td class="has-text-centered has-text-grey">0.0399</td>  
                    </tr>
                                                                                                                    
                    <tr>
                        <td class="has-text-centered has-text-grey">2</td>  
                        <td class="has-text-centered has-text-grey">45</td>  
                        <td class="has-text-centered has-text-grey">0.001</td>  
                        <td class="has-text-centered has-text-grey">11</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉断</td>  
                        <td class="has-text-centered has-text-grey">275</td>  
                        <td class="has-text-centered has-text-grey">550</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">10.333</td>  
                        <td class="has-text-centered has-text-grey">11.495</td>  
                        <td class="has-text-centered has-text-grey">0.005</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.0127</td>  
                        <td class="has-text-centered has-text-grey">0.0559</td>  
                        <td class="has-text-centered has-text-grey">0.061</td>  
                        <td class="has-text-centered has-text-grey">0.0686</td>  
                        <td class="has-text-centered has-text-grey">0.0447</td>  
                    </tr>
                                                                                                        
                    <tr>
                        <td class="has-text-centered has-text-grey">3</td>  
                        <td class="has-text-centered has-text-grey">44</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">14</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">300</td>  
                        <td class="has-text-centered has-text-grey">600</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">7.683</td>  
                        <td class="has-text-centered has-text-grey">9.143</td>  
                        <td class="has-text-centered has-text-grey">0.005</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.015</td>  
                        <td class="has-text-centered has-text-grey">0.0559</td>  
                        <td class="has-text-centered has-text-grey">0.069</td>  
                        <td class="has-text-centered has-text-grey">0.076</td>  
                        <td class="has-text-centered has-text-grey">0.051</td>  
                    </tr>	

                    <tr>
                        <td class="has-text-centered has-text-grey">4</td>  
                        <td class="has-text-centered has-text-grey">43</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">325</td>  
                        <td class="has-text-centered has-text-grey">650</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">6.415</td>  
                        <td class="has-text-centered has-text-grey">7.528</td>  
                        <td class="has-text-centered has-text-grey">0.005</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.015</td>  
                        <td class="has-text-centered has-text-grey">0.066</td>  
                        <td class="has-text-centered has-text-grey">0.074</td>  
                        <td class="has-text-centered has-text-grey">0.081</td>  
                        <td class="has-text-centered has-text-grey">0.056</td>  
                    </tr>	

                    <tr>
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">42</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">16</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">375</td>  
                        <td class="has-text-centered has-text-grey">700</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">4.954</td>  
                        <td class="has-text-centered has-text-grey">5.711</td>  
                        <td class="has-text-centered has-text-grey">0.005</td>  
                        <td class="has-text-centered has-text-grey">0.013</td>  
                        <td class="has-text-centered has-text-grey">0.018</td>  
                        <td class="has-text-centered has-text-grey">0.076</td>  
                        <td class="has-text-centered has-text-grey">0.084</td>  
                        <td class="has-text-centered has-text-grey">0.091</td>  
                        <td class="has-text-centered has-text-grey">0.064</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">6</td>  
                        <td class="has-text-centered has-text-grey">41</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">17</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">425</td>  
                        <td class="has-text-centered has-text-grey">700</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">4.05</td>  
                        <td class="has-text-centered has-text-grey">4.611</td>  
                        <td class="has-text-centered has-text-grey">0.008</td>  
                        <td class="has-text-centered has-text-grey">0.013</td>  
                        <td class="has-text-centered has-text-grey">0.02</td>  
                        <td class="has-text-centered has-text-grey">0.086</td>  
                        <td class="has-text-centered has-text-grey">0.091</td>  
                        <td class="has-text-centered has-text-grey">0.102</td>  
                        <td class="has-text-centered has-text-grey">0.071</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">7</td>  
                        <td class="has-text-centered has-text-grey">40</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">17</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">425</td>  
                        <td class="has-text-centered has-text-grey">850</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">3.289</td>  
                        <td class="has-text-centered has-text-grey">3.703</td>  
                        <td class="has-text-centered has-text-grey">0.008</td>  
                        <td class="has-text-centered has-text-grey">0.013</td>  
                        <td class="has-text-centered has-text-grey">0.02</td>  
                        <td class="has-text-centered has-text-grey">0.094</td>  
                        <td class="has-text-centered has-text-grey">0.102</td>  
                        <td class="has-text-centered has-text-grey">0.109</td>  
                        <td class="has-text-centered has-text-grey">0.079</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">8</td>  
                        <td class="has-text-centered has-text-grey">39</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">18</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">500</td>  
                        <td class="has-text-centered has-text-grey">900</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">2.606</td>  
                        <td class="has-text-centered has-text-grey">2.9</td>  
                        <td class="has-text-centered has-text-grey">0.008</td>  
                        <td class="has-text-centered has-text-grey">0.015</td>  
                        <td class="has-text-centered has-text-grey">0.023</td>  
                        <td class="has-text-centered has-text-grey">0.104</td>  
                        <td class="has-text-centered has-text-grey">0.114</td>  
                        <td class="has-text-centered has-text-grey">0.122</td>  
                        <td class="has-text-centered has-text-grey">0.089</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">9</td>  
                        <td class="has-text-centered has-text-grey">38</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">19</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">500</td>  
                        <td class="has-text-centered has-text-grey">950</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">1.995</td>  
                        <td class="has-text-centered has-text-grey">2.195</td>  
                        <td class="has-text-centered has-text-grey">0.008</td>  
                        <td class="has-text-centered has-text-grey">0.018</td>  
                        <td class="has-text-centered has-text-grey">0.025</td>  
                        <td class="has-text-centered has-text-grey">0.119</td>  
                        <td class="has-text-centered has-text-grey">0.130</td>  
                        <td class="has-text-centered has-text-grey">0.137</td>  
                        <td class="has-text-centered has-text-grey">0.102</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">10</td>  
                        <td class="has-text-centered has-text-grey">37</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">20</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">1360</td>  
                        <td class="has-text-centered has-text-grey">2270</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">1.604</td>  
                        <td class="has-text-centered has-text-grey">1.750</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.018</td>  
                        <td class="has-text-centered has-text-grey">0.028</td>  
                        <td class="has-text-centered has-text-grey">0.135</td>  
                        <td class="has-text-centered has-text-grey">0.145</td>  
                        <td class="has-text-centered has-text-grey">0.152</td>  
                        <td class="has-text-centered has-text-grey">0.114</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">11</td>  
                        <td class="has-text-centered has-text-grey">36</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">20</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">1360</td>  
                        <td class="has-text-centered has-text-grey">2600</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">1.297</td>  
                        <td class="has-text-centered has-text-grey">1.405</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.02</td>  
                        <td class="has-text-centered has-text-grey">0.03</td>  
                        <td class="has-text-centered has-text-grey">0.147</td>  
                        <td class="has-text-centered has-text-grey">0.16</td>  
                        <td class="has-text-centered has-text-grey">0.17</td>  
                        <td class="has-text-centered has-text-grey">0.127</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">12</td>  
                        <td class="has-text-centered has-text-grey">35</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">21</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">1360</td>  
                        <td class="has-text-centered has-text-grey">2920</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">1.041</td>  
                        <td class="has-text-centered has-text-grey">1.120</td>  
                        <td class="has-text-centered has-text-grey">0.01</td>  
                        <td class="has-text-centered has-text-grey">0.023</td>  
                        <td class="has-text-centered has-text-grey">0.033</td>  
                        <td class="has-text-centered has-text-grey">0.163</td>  
                        <td class="has-text-centered has-text-grey">0.178</td>  
                        <td class="has-text-centered has-text-grey">0.188</td>  
                        <td class="has-text-centered has-text-grey">0.142</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">13</td>  
                        <td class="has-text-centered has-text-grey">34</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">22</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">1700</td>  
                        <td class="has-text-centered has-text-grey">2920</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.822</td>  
                        <td class="has-text-centered has-text-grey">0.879</td>  
                        <td class="has-text-centered has-text-grey">0.013</td>  
                        <td class="has-text-centered has-text-grey">0.023</td>  
                        <td class="has-text-centered has-text-grey">0.036</td>  
                        <td class="has-text-centered has-text-grey">0.183</td>  
                        <td class="has-text-centered has-text-grey">0.198</td>  
                        <td class="has-text-centered has-text-grey">0.208</td>  
                        <td class="has-text-centered has-text-grey">0.160</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">14</td>  
                        <td class="has-text-centered has-text-grey">33</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">23</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">1700</td>  
                        <td class="has-text-centered has-text-grey">3250</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.652</td>  
                        <td class="has-text-centered has-text-grey">0.693</td>  
                        <td class="has-text-centered has-text-grey">0.013</td>  
                        <td class="has-text-centered has-text-grey">0.025</td>  
                        <td class="has-text-centered has-text-grey">0.038</td>  
                        <td class="has-text-centered has-text-grey">0.206</td>  
                        <td class="has-text-centered has-text-grey">0.224</td>  
                        <td class="has-text-centered has-text-grey">0.234</td>  
                        <td class="has-text-centered has-text-grey">0.180</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">32</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">24</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">2040</td>  
                        <td class="has-text-centered has-text-grey">3570</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.514</td>  
                        <td class="has-text-centered has-text-grey">0.543</td>  
                        <td class="has-text-centered has-text-grey">0.015</td>  
                        <td class="has-text-centered has-text-grey">0.028</td>  
                        <td class="has-text-centered has-text-grey">0.043</td>  
                        <td class="has-text-centered has-text-grey">0.231</td>  
                        <td class="has-text-centered has-text-grey">0.249</td>  
                        <td class="has-text-centered has-text-grey">0.262</td>  
                        <td class="has-text-centered has-text-grey">0.203</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">16</td>  
                        <td class="has-text-centered has-text-grey">31</td>  
                        <td class="has-text-centered has-text-grey">0.002</td>  
                        <td class="has-text-centered has-text-grey">24</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">/</td>  
                        <td class="has-text-centered has-text-grey">/</td>  
                        <td class="has-text-centered has-text-grey">急拉20%3d</td>  
                        <td class="has-text-centered has-text-grey">2040</td>  
                        <td class="has-text-centered has-text-grey">3900</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.415</td>  
                        <td class="has-text-centered has-text-grey">0.438</td>  
                        <td class="has-text-centered has-text-grey">0.015</td>  
                        <td class="has-text-centered has-text-grey">0.030</td>  
                        <td class="has-text-centered has-text-grey">0.046</td>  
                        <td class="has-text-centered has-text-grey">0.254</td>  
                        <td class="has-text-centered has-text-grey">0.274</td>  
                        <td class="has-text-centered has-text-grey">0.290</td>  
                        <td class="has-text-centered has-text-grey">0.226</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">17</td>  
                        <td class="has-text-centered has-text-grey">30</td>  
                        <td class="has-text-centered has-text-grey">0.003</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">66</td>  
                        <td class="has-text-centered has-text-grey">70</td>  
                        <td class="has-text-centered has-text-grey">急拉15%1d</td>  
                        <td class="has-text-centered has-text-grey">2380</td>  
                        <td class="has-text-centered has-text-grey">4220</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.327</td>  
                        <td class="has-text-centered has-text-grey">0.354</td>  
                        <td class="has-text-centered has-text-grey">0.018</td>  
                        <td class="has-text-centered has-text-grey">0.033</td>  
                        <td class="has-text-centered has-text-grey">0.051</td>  
                        <td class="has-text-centered has-text-grey">0.284</td>  
                        <td class="has-text-centered has-text-grey">0.302</td>  
                        <td class="has-text-centered has-text-grey">0.325</td>  
                        <td class="has-text-centered has-text-grey">0.254</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">18</td>  
                        <td class="has-text-centered has-text-grey">29</td>  
                        <td class="has-text-centered has-text-grey">0.003</td>  
                        <td class="has-text-centered has-text-grey">26</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">61</td>  
                        <td class="has-text-centered has-text-grey">65</td>  
                        <td class="has-text-centered has-text-grey">急拉15%1d</td>  
                        <td class="has-text-centered has-text-grey">2380</td>  
                        <td class="has-text-centered has-text-grey">4270</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.257</td>  
                        <td class="has-text-centered has-text-grey">0.272</td>  
                        <td class="has-text-centered has-text-grey">0.018</td>  
                        <td class="has-text-centered has-text-grey">0.038</td>  
                        <td class="has-text-centered has-text-grey">0.056</td>  
                        <td class="has-text-centered has-text-grey">0.32</td>  
                        <td class="has-text-centered has-text-grey">0.338</td>  
                        <td class="has-text-centered has-text-grey">0.358</td>  
                        <td class="has-text-centered has-text-grey">0.287</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">19</td>  
                        <td class="has-text-centered has-text-grey">28</td>  
                        <td class="has-text-centered has-text-grey">0.003</td>  
                        <td class="has-text-centered has-text-grey">26</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">55</td>  
                        <td class="has-text-centered has-text-grey">60</td>  
                        <td class="has-text-centered has-text-grey">急拉15%1d</td>  
                        <td class="has-text-centered has-text-grey">2440</td>  
                        <td class="has-text-centered has-text-grey">4380</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.207</td>  
                        <td class="has-text-centered has-text-grey">0.218</td>  
                        <td class="has-text-centered has-text-grey">0.02</td>  
                        <td class="has-text-centered has-text-grey">0.041</td>  
                        <td class="has-text-centered has-text-grey">0.058</td>  
                        <td class="has-text-centered has-text-grey">0.356</td>  
                        <td class="has-text-centered has-text-grey">0.373</td>  
                        <td class="has-text-centered has-text-grey">0.394</td>  
                        <td class="has-text-centered has-text-grey">0.32</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">20</td>  
                        <td class="has-text-centered has-text-grey">27</td>  
                        <td class="has-text-centered has-text-grey">0.003</td>  
                        <td class="has-text-centered has-text-grey">27</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">50</td>  
                        <td class="has-text-centered has-text-grey">55</td>  
                        <td class="has-text-centered has-text-grey">急拉15%1d</td>  
                        <td class="has-text-centered has-text-grey">2500</td>  
                        <td class="has-text-centered has-text-grey">4500</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.163</td>  
                        <td class="has-text-centered has-text-grey">0.171</td>  
                        <td class="has-text-centered has-text-grey">0.02</td>  
                        <td class="has-text-centered has-text-grey">0.041</td>  
                        <td class="has-text-centered has-text-grey">0.064</td>  
                        <td class="has-text-centered has-text-grey">0.396</td>  
                        <td class="has-text-centered has-text-grey">0.419</td>  
                        <td class="has-text-centered has-text-grey">0.439</td>  
                        <td class="has-text-centered has-text-grey">0.361</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">21</td>  
                        <td class="has-text-centered has-text-grey">26</td>  
                        <td class="has-text-centered has-text-grey">0.004</td>  
                        <td class="has-text-centered has-text-grey">27</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">76</td>  
                        <td class="has-text-centered has-text-grey">80</td>  
                        <td class="has-text-centered has-text-grey">急拉15%1d</td>  
                        <td class="has-text-centered has-text-grey">2570</td>  
                        <td class="has-text-centered has-text-grey">4620</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.13</td>  
                        <td class="has-text-centered has-text-grey">0.137</td>  
                        <td class="has-text-centered has-text-grey">0.023</td>  
                        <td class="has-text-centered has-text-grey">0.043</td>  
                        <td class="has-text-centered has-text-grey">0.066</td>  
                        <td class="has-text-centered has-text-grey">0.439</td>  
                        <td class="has-text-centered has-text-grey">0.462</td>  
                        <td class="has-text-centered has-text-grey">0.485</td>  
                        <td class="has-text-centered has-text-grey">0.404</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">22</td>  
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">0.004</td>  
                        <td class="has-text-centered has-text-grey">28</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">72</td>  
                        <td class="has-text-centered has-text-grey">74</td>  
                        <td class="has-text-centered has-text-grey">急拉15%1d</td>  
                        <td class="has-text-centered has-text-grey">2640</td>  
                        <td class="has-text-centered has-text-grey">4740</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.102</td>  
                        <td class="has-text-centered has-text-grey">0.108</td>  
                        <td class="has-text-centered has-text-grey">0.023</td>  
                        <td class="has-text-centered has-text-grey">0.046</td>  
                        <td class="has-text-centered has-text-grey">0.069</td>  
                        <td class="has-text-centered has-text-grey">0.493</td>  
                        <td class="has-text-centered has-text-grey">0.516</td>  
                        <td class="has-text-centered has-text-grey">0.538</td>  
                        <td class="has-text-centered has-text-grey">0.455</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">23</td>  
                        <td class="has-text-centered has-text-grey">24</td>  
                        <td class="has-text-centered has-text-grey">0.005</td>  
                        <td class="has-text-centered has-text-grey">28</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">67</td>  
                        <td class="has-text-centered has-text-grey">69</td>  
                        <td class="has-text-centered has-text-grey">急拉15%1d</td>  
                        <td class="has-text-centered has-text-grey">2710</td>  
                        <td class="has-text-centered has-text-grey">4870</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.0811</td>  
                        <td class="has-text-centered has-text-grey">0.0857</td>  
                        <td class="has-text-centered has-text-grey">0.025</td>  
                        <td class="has-text-centered has-text-grey">0.048</td>  
                        <td class="has-text-centered has-text-grey">0.074</td>  
                        <td class="has-text-centered has-text-grey">0.551</td>  
                        <td class="has-text-centered has-text-grey">0.577</td>  
                        <td class="has-text-centered has-text-grey">0.599</td>  
                        <td class="has-text-centered has-text-grey">0.511</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">24</td>  
                        <td class="has-text-centered has-text-grey">23</td>  
                        <td class="has-text-centered has-text-grey">0.005</td>  
                        <td class="has-text-centered has-text-grey">29</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">62</td>  
                        <td class="has-text-centered has-text-grey">64</td>  
                        <td class="has-text-centered has-text-grey">急拉15%1d</td>  
                        <td class="has-text-centered has-text-grey">2780</td>  
                        <td class="has-text-centered has-text-grey">5000</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.0644</td>  
                        <td class="has-text-centered has-text-grey">0.0678</td>  
                        <td class="has-text-centered has-text-grey">0.025</td>  
                        <td class="has-text-centered has-text-grey">0.051</td>  
                        <td class="has-text-centered has-text-grey">0.076</td>  
                        <td class="has-text-centered has-text-grey">0.617</td>  
                        <td class="has-text-centered has-text-grey">0.643</td>  
                        <td class="has-text-centered has-text-grey">0.668</td>  
                        <td class="has-text-centered has-text-grey">0.574</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">25</td>  
                        <td class="has-text-centered has-text-grey">22</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">29</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">58</td>  
                        <td class="has-text-centered has-text-grey">60</td>  
                        <td class="has-text-centered has-text-grey">急拉15%1d</td>  
                        <td class="has-text-centered has-text-grey">2850</td>  
                        <td class="has-text-centered has-text-grey">5120</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.0512</td>  
                        <td class="has-text-centered has-text-grey">0.0541</td>  
                        <td class="has-text-centered has-text-grey">0.028</td>  
                        <td class="has-text-centered has-text-grey">0.053</td>  
                        <td class="has-text-centered has-text-grey">0.081</td>  
                        <td class="has-text-centered has-text-grey">0.686</td>  
                        <td class="has-text-centered has-text-grey">0.714</td>  
                        <td class="has-text-centered has-text-grey">0.742</td>  
                        <td class="has-text-centered has-text-grey">0.643</td>  
                    </tr>

                    <tr>
                        <td class="has-text-centered has-text-grey">26</td>  
                        <td class="has-text-centered has-text-grey">21</td>  
                        <td class="has-text-centered has-text-grey">0.006</td>  
                        <td class="has-text-centered has-text-grey">30</td>  
                        <td class="has-text-centered has-text-grey" colspan="2">53</td>  
                        <td class="has-text-centered has-text-grey">57</td>  
                        <td class="has-text-centered has-text-grey">急拉15%1d</td>  
                        <td class="has-text-centered has-text-grey">2930</td>  
                        <td class="has-text-centered has-text-grey">5270</td>  
                        <td class="has-text-centered has-text-grey">15</td>  
                        <td class="has-text-centered has-text-grey">5</td>  
                        <td class="has-text-centered has-text-grey">1</td>  
                        <td class="has-text-centered has-text-grey">0.0405</td>  
                        <td class="has-text-centered has-text-grey">0.0426</td>  
                        <td class="has-text-centered has-text-grey">0.028</td>  
                        <td class="has-text-centered has-text-grey">0.056</td>  
                        <td class="has-text-centered has-text-grey">0.086</td>  
                        <td class="has-text-centered has-text-grey">0.77</td>  
                        <td class="has-text-centered has-text-grey">0.8</td>  
                        <td class="has-text-centered has-text-grey">0.828</td>  
                        <td class="has-text-centered has-text-grey">0.724</td>  
                    </tr>
                                                                                
                </tbody>
            </table>
        </section>
    </section>
</section>
@endsection
