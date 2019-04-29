@extends ('master')

@section ('page-title')
<title>@lang('navi.title')</title>
@endsection

@section('content')

{{-- Welcome Image Slider --}}
<section class="hero is-light is-large">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">About Huaye</h1>
      <h2 class="subtitle"> Dongguan Huaye Cables Technology Co. Ltd is a manufacturing company specialized in magnet round copper wire with import and export rights.</h2>
    </div>
  </div>
</section>

{{-- Our Products --}}
<section class="section is-medium">
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child box has-text-centered">
                <p class="title">@lang('navi.prod1')</p>
                <p class="subtitle">Self bonding enameled copper wire is a special type of enameled wire.</p>
                <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/640x480.png">
                </figure>
            </article>
        </div>
        <div class="tile is-parent has-text-centered">
            <article class="tile is-child box">
                <p class="title">@lang('navi.prod2')</p>
                <p class="subtitle">Enameled copper wire is one of main varieties of winding wire.</p>
                <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/640x480.png">
                </figure>
            </article>
        </div>
        <div class="tile is-parent has-text-centered">
        <article class="tile is-child box">
            <p class="title">@lang('navi.prod3')</p>
            <p class="subtitle">Litz wire is a winding wire consisting of a number of small diameter </p>
            <figure class="image is-4by3">
                <img src="https://bulma.io/images/placeholders/640x480.png">
            </figure>
        </article>
        </div>
    </div>
</section>

{{-- Production Line Video --}}
{{-- <section class="hero is-light is-large">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">Production Line</h1>
            <h2 class="subtitle">Video</h2>
        </div>
    </div>
</section> --}}

{{-- Our Patents --}}
{{-- <section class="section is-medium">
    <div class="container">
        <h1 class="title is-size-2 has-text-centered has-text-weight-bold">Our Patents</h1>
        <h2 class="subtitle has-text-centered">simple intro about patents</h2>
    </div>
    <div class="columns is-mobile is-multiline is-centered">
        <div class="column">Patent 1</div>
        <div class="column">Patent 2</div>
        <div class="column">Patent 3</div>
    </div>
</section> --}}

{{-- Team --}}
<section class="hero is-light is-large">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">Our Team</h1>
            <h2 class="subtitle">Team intro</h2>
        </div>
    </div>
</section>

{{-- Our Patents --}}
<section class="section is-medium">
    <div class="container">
        <h1 class="title is-size-2 has-text-centered has-text-weight-bold">Our Clients</h1>
        <h2 class="subtitle has-text-centered">simple intro about clients</h2>
    </div>
</section>

{{-- <section id="homepage">
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
    <section class="hero is-light is-large">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Product Line</h1>
                <h2 class="subtitle">Video</h2>
            </div>
        </div>
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
</section> --}}
@endsection
