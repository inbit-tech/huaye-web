@extends ('master')

@section ('page-title')
<title>Home - Huaye</title>
@endsection

@section('content')
<section id="homepage">
    <section id="carousel">
        <img src="https://via.placeholder.com/1920x560" alt="">
    </section>

    <section id="our-product" class="columns">
        <div class="column is-2"></div>

        <div class="column is-two-thirds">
            <div class="our-product-position">
                <div class="column is-centered our-product-title has-text-weight-bold">
                    <p>了解我们的产品</p>
                </div>
                <div class="columns product-thumbnail">
                    <div class="column is-one-third product-thumbnail-item">
                        <img src="https://via.placeholder.com/410x320" alt="">
                        <p class="has-text-weight-bold">进一步了解 ></p>
                    </div>
                    <div class="column is-one-third product-thumbnail-item">
                        <img src="https://via.placeholder.com/410x320" alt="">
                        <p class="has-text-weight-bold">进一步了解 ></p>
                    </div>
                    <div class="column is-one-third product-thumbnail-item">
                        <img src="https://via.placeholder.com/410x320" alt="">
                        <p class="has-text-weight-bold">进一步了解 ></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="column is-2"></div>
    </section>
</section>
@endsection
