@extends ('master')

@section ('page-title')
<title>UHT - Huaye</title>
@endsection

@section('content')
<section id="uht-page">
    <section class="hero is-light is-large">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">uht - Top large picture</h1>
            </div>
        </div>
    </section>

    <section class="section is-medium container">
        <section class="section">
            <p class="is-size-1 has-text-black has-text-weight-bold">漆包线是绕组线的一个主要品种，由导体和绝缘层两部分组成。裸线经退火软化后，再经过多次涂漆、烘焙而成。</p>
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
            <p>型号标识</p>
        </div>
    </section>

    <section class="section is-medium container">
        <table class="table is-striped is-hoverable is-fullwidth is-bordered">
            <thead>
                <tr>
                    <th class="has-text-centered has-background-link has-text-white thead-width-desktop">超高耐温漆包线</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="has-text-centered has-text-grey">UEW</th>
                    <td class="has-text-centered has-text-grey">直焊性聚氨酯漆包圆铜线</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">UEWY</th>
                    <td class="has-text-centered has-text-grey">直焊性聚酰胺复合聚氨酯漆包圆铜线</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">SEIW</th>
                    <td class="has-text-centered has-text-grey">直焊性聚酯亚胺漆包圆铜线</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">EIW</th>
                    <td class="has-text-centered has-text-grey">聚酯亚胺漆包圆铜线</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">EI/AIW</th>
                    <td class="has-text-centered has-text-grey">聚酰胺酰亚胺复合聚酯亚胺漆包圆铜线</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">AIW</th>
                    <td class="has-text-centered has-text-grey">聚酰胺酰亚胺漆包圆铜线</td>
                </tr>
                <tr>
                    <th class="has-text-centered has-text-grey">PIW</th>
                    <td class="has-text-centered has-text-grey">芳香族聚酰亚胺漆包圆铜线</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="section">
        <div class="container has-background-link has-text-white side-bar-text is-size-3 is-size-4-mobile ">
            <p>结构示意图</p>
        </div>
    </section>

    <section class="container has-text-centered">
        <img src="{{asset('img/component/product-detail/uht/uht-structure.png')}}" alt="Ultra-High-Temperature Wire">
    </section>
</section>
@endsection
