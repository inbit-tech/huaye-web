@extends ('master')

@section ('page-title')
<title>LITZ - Huaye</title>
@endsection

@section('content')
<section id="bec-page">
    <section class="hero is-light is-large">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">litz - Top large picture</h1>
            </div>
        </div>
    </section>

    <section class="section is-medium container">
        <section class="section">
            <p class="is-size-1 has-text-black has-text-weight-bold">
                绞合漆包线束线是有或无绕包层的若干根小直径的绝缘线芯进行无预定几何形状的排列绞合而成的绕组线。
            </p>
            <p class="is-size-1 has-text-black has-text-weight-bold">
                被广泛应用于需要良好柔韧性和高频性能的场合，通常用于工作频率在10 KHz至5 MHz之间的应用。
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

    <section class="has-text-centered level is-hidden-touch">
        <div class="level-left">
            <p class="has-background-link has-text-white is-size-3 side-bar-text">型号标识</p>
        </div>
    </section>

    <section class="section is-medium container">
        <table class="table is-striped is-hoverable is-fullwidth is-bordered">
            <thead>
                <tr>
                    <th class="has-text-centered has-background-link has-text-white thead-width-desktop">利兹线（无绕包层束线）</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="has-text-centered has-text-grey">LZ UEW</th>
                    <td class="has-text-centered has-text-grey">直焊性聚氨酯漆包束线</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LZ UEWY</th>
                    <td class="has-text-centered has-text-grey">直焊性聚酰胺复合聚氨酯漆包束线</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">LZ SBUEW</th>
                    <td class="has-text-centered has-text-grey">自粘性直焊聚氨酯漆包束线</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="section is-medium container">
        <table class="table is-striped is-hoverable is-fullwidth is-bordered">
            <thead>
                <tr>
                    <th class="has-text-centered has-background-link has-text-white thead-width-desktop">丝包线</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="has-text-centered has-text-grey">USTC UEW</th>
                    <td class="has-text-centered has-text-grey">普通单层丝包聚氨酯漆包束线</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">UDTC UEW</th>
                    <td class="has-text-centered has-text-grey">普通双层丝包聚氨酯漆包束线</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">SLUSTC UEW</th>
                    <td class="has-text-centered has-text-grey">丙酮粘合双层丝包聚氨酯漆包束线</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">HLUSTC UEW</th>
                    <td class="has-text-centered has-text-grey">热风粘结双层丝包聚氨酯漆包束线</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="section is-medium container">
        <table class="table is-striped is-hoverable is-fullwidth is-bordered">
            <thead>
                <tr>
                    <th class="has-text-centered has-background-link has-text-white thead-width-desktop">麦拉线</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="has-text-centered has-text-grey">ML-T UEW</th>
                    <td class="has-text-centered has-text-grey">PET 薄膜绕包线</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">ML-N UEW</th>
                    <td class="has-text-centered has-text-grey">PEN 薄膜绕包线</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">ML-I UEW</th>
                    <td class="has-text-centered has-text-grey">PI 薄膜绕包线</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="has-text-centered level is-hidden-touch">
        <div class="level-left">
            <p class="has-background-link has-text-white is-size-3 side-bar-text">结构示意图</p>
        </div>
    </section>

    <section class="container has-text-centered">
        <img src="{{asset('img/component/product-detail/litz/lita-structure.png')}}" alt="LITZ Wire / Silk Served LITZ Wire">
    </section>
</section>
@endsection
