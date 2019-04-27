@extends ('master')

@section ('page-title')
<title>@lang('navi.title')</title>
@endsection

@section('content')

<section class="hero is-info is-large">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">Title</h1>
      <h2 class="subtitle">Subtitle</h2>
    </div>
  </div>
</section>

<section id="homepage">
    <section id="our-product" class="columns">
        <div class="column is-2"></div>

        <div class="column is-two-thirds">
            <div class="our-product-position">
                <div class="homepage-title">
                    <p class="has-text-centered has-text-weight-bold">了解我们的产品</p>
                </div>
                <div class="columns product-thumbnail">
                    <div class="column is-one-third product-thumbnail-item">
                        <img src="https://via.placeholder.com/410x320" alt="">
                        <p class="has-text-centered has-text-weight-bold">进一步了解 ></p>
                    </div>
                    <div class="column is-one-third product-thumbnail-item">
                        <img src="https://via.placeholder.com/410x320" alt="">
                        <p class="has-text-centered has-text-weight-bold">进一步了解 ></p>
                    </div>
                    <div class="column is-one-third product-thumbnail-item">
                        <img src="https://via.placeholder.com/410x320" alt="">
                        <p class="has-text-centered has-text-weight-bold">进一步了解 ></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="column is-2"></div>
    </section>

    <section id="product-line-video">
        <img src="https://via.placeholder.com/1920x680" alt="">
    </section>

    <section id="our-patent" class="columns">
        <div class="column is-3"></div>

        <div class="column is-half">
            <div class="our-patent-position">
                <div class="our-patent-title has-text-centered has-text-weight-bold">
                    <p>我们的专利</p>
                </div>
                <div class="columns patent-icon">
                    <div class="column is-one-third has-text-centered">
                        <img src="https://via.placeholder.com/100x100" alt="">
                    </div>
                    <div class="column is-one-third has-text-centered">
                        <img src="https://via.placeholder.com/100x100" alt="">
                    </div>
                    <div class="column is-one-third has-text-centered">
                        <img src="https://via.placeholder.com/100x100" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="column is-3"></div>
    </section>

    <section id="our-customer" class="columns">
        <div class="column is-2"></div>
        <div class="column is-two-thirds">
            <div class="our-customer-position">
                <div class="homepage-title">
                    <p class="has-text-centered has-text-weight-bold">我们的客户</p>
                </div>
                <div class="customer-list">
                    <div class="customer-list-item">
                        <img src="https://via.placeholder.com/160x160" alt="">
                    </div>
                    <div class="customer-list-item">
                        <img src="https://via.placeholder.com/160x160" alt="">
                    </div>
                    <div class="customer-list-item">
                        <img src="https://via.placeholder.com/160x160" alt="">
                    </div>
                    <div class="customer-list-item">
                        <img src="https://via.placeholder.com/160x160" alt="">
                    </div>
                    <div class="customer-list-item">
                        <img src="https://via.placeholder.com/160x160" alt="">
                    </div>
                    <div class="customer-list-item">
                        <img src="https://via.placeholder.com/160x160" alt="">
                    </div>
                    <div class="customer-list-item">
                        <img src="https://via.placeholder.com/160x160" alt="">
                    </div>
                    <div class="customer-list-item">
                        <img src="https://via.placeholder.com/160x160" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-2"></div>
    </section>

    <section id="know-about-us" class="columns">
        <div class="column">
            <div class="">
                <div class="homepage-title">
                    <p class="has-text-centered has-text-weight-bold">了解我们</p>
                </div>
                <div class="staff-img">
                    <img src="http://pp3tibsrj.bkt.clouddn.com/staff@2x.png" alt="">
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
