@extends ('master')

@section ('page-title')
<title>About - Huaye</title>
@endsection

@section('content')
<section id="about-us">
    <section class="hero is-light is-large">
        <figure class="image top-img">
            <img src="{{asset('img/component/about/about-us-cover.jpg')}}" alt="huaye about us">
        </figure>
    </section>

    <section class="section is-medium container">
        <div class="section columns">
            <div class="column">
                <div class="quality-border">
                    <p class="is-size-2 has-text-grey has-text-weight-bold">信念</p>
                </div>
            </div>
            <div class="column">
                <div class="quality-border">
                    <p class="is-size-2 has-text-grey has-text-weight-bold">体系</p>
                </div>
            </div>
            <div class="column">
                <div class="quality-border">
                    <p class="is-size-2 has-text-grey has-text-weight-bold">硬件</p>
                </div>
            </div>
            <div class="column">
                <div class="quality-border">
                    <p class="is-size-2 has-text-grey has-text-weight-bold">保障</p>
                </div>
            </div>
            <div class="column">
                <div class="quality-border">
                    <p class="is-size-2 has-text-grey has-text-weight-bold">控制</p>
                </div>
            </div>
        </div>
        <section class="container width-max-content">
            <div class="has-text-left">
                <p class="is-size-1 has-text-black-bis has-text-weight-bold ">
                    <span>严格的品质控制标准及逐轴检验的控制手段，</span>
                    <br>
                    <span>严保产品的高度一致性</span>
                </p>
            </div>
        </section>
    </section>

    

    <section class="section is-medium history-padding history-section-bg-img has-text-centered">
        <h1 class="has-text-centered is-size-4 has-text-white history-text-shadow history-text-margin">公 司 概 况</h1>
        <div class="section container level tile is-vertical width-max-content">
            <p class="has-text-left level-left is-size-4 has-text-white history-text-shadow history-text-margin">2003 . 12 . 08 - 深圳市华冶电工材料有限公司成立</p>
            <p class="has-text-left level-left is-size-4 has-text-white history-text-shadow history-text-margin">2004 . 03 . 12 - 深圳市华冶电工材料有限公司开工投产</p>
            <p class="has-text-left level-left is-size-4 has-text-white history-text-shadow history-text-margin">2005 . 07 - 深圳市华冶电工材料有限公司获得 ISO9001 体系认证</p>
            <p class="has-text-left level-left is-size-4 has-text-white history-text-shadow history-text-margin">2009 . 07 - 深圳市华冶电工材料有限公司取得 UL 安全认证</p>
            <p class="has-text-left level-left is-size-4 has-text-white history-text-shadow history-text-margin">2010 . 08 - 深圳市华冶电工材料有限公司取得生产技术专利</p>
            <p class="has-text-left level-left is-size-4 has-text-white history-text-shadow history-text-margin">2013 . 10 . 25 - 公司整体搬迁至东莞大朗，东莞市华冶线缆科技有限公司成立</p>
        </div>
    </section>

    <section class="section is-medium">
        <div class="section container">
            <p class="has-text-centered is-size-3 has-text-grey-light">我们尊崇真诚、团结、信任、团结、创造、分享<br>尊重客户体验，适应客户需求，快速响应，定制化生产</p> 
        </div>

        <div class="section container team-advantages-margin">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-7">
                    <div class="tile is-parent">
                        <article class="tile is-child has-text-left">
                            <p class="services-description-big-text has-text-black has-text-weight-bold">专业</p>
                            <p class="is-size-1 is-size-3-mobile has-text-grey">定制化生产，满足特殊产品需求</p>
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

        <div class="section container team-advantages-margin">
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
                        <p class="services-description-big-text has-text-black has-text-weight-bold">快速</p>
                        <p class="is-size-1 is-size-3-mobile has-text-grey">响应机制，提供效率优势</p>
                    </article>
                </div>
            </div>
        </div>

        <div class="section container team-advantages-margin">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-7">
                    <div class="tile is-parent">
                        <article class="tile is-child has-text-left">
                            <p class="services-description-big-text has-text-black has-text-weight-bold">快速</p>
                            <p class="is-size-1 is-size-3-mobile has-text-grey">样品模式，降低客户研发成本</p>
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

        <div class="section container team-advantages-margin">
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
                        <p class="services-description-big-text has-text-black has-text-weight-bold">协助</p>
                        <p class="is-size-1 is-size-3-mobile has-text-grey">客户提供线材应用解决方案</p>
                    </article>
                </div>
            </div>
        </div>

        <div class="section container team-advantages-margin">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-7">
                    <div class="tile is-parent">
                        <article class="tile is-child has-text-left">
                            <p class="services-description-big-text has-text-black has-text-weight-bold">小批量</p>
                            <p class="is-size-1 is-size-3-mobile has-text-grey">品种丰富，快速精准交付</p>
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
</section>
@endsection
