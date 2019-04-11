@extends ('master')

@section ('page-title')
<title>Contact - Huaye</title>
@endsection

@section('content')
<section>
    <section id="contact-bg-img">
        <img src="https://via.placeholder.com/1920x560" alt="">
    </section>

    <section id="contact-list" class="columns">
        <div class="column is-2"></div>

        <div class="column is-two-thirds">
            <div class="columns contact-info" >
                <div class="column is-one-third">
                    <img class="image" src="http://pp3tibsrj.bkt.clouddn.com/icon_phone%20.png" alt="Phone">
                    <a href="tel:+8618066860099" class="">
                        <p class="has-text-centered contact-info-p">
                            <span>联系电话：0769-82601699</span>
                            <br>
                            <span>企业传真：0769-82236803</span>
                        </p>
                    </a>
                </div>
                <div class="column is-one-third">
                    <img class="image" src="http://pp3tibsrj.bkt.clouddn.com/icon_addr.png" alt="Address">
                    <a href="#map" class="">
                        <p class="has-text-centered contact-info-p">广东省东莞市黄江镇裕元工业园精成二路灵狮小镇C栋三层C313-316号</p>
                    </a>
                </div>
                <div class="column is-one-third">
                    <img class="image" src="http://pp3tibsrj.bkt.clouddn.com/icon_email%20.png" alt="eMail">
                    <a href="mailto:huaye@huaye-dg.com">
                        <p class="has-text-centered contact-info-p">huaye@huaye-dg.com</p>
                    </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="column is-2"></div>
    </section>

    {{-- message HTML 
    <section class="">
        <h3 class="contact-text text-uppercase">send us message if you have any questions</h3>
        <div class="d-flex flex-column justify-content-between align-items-center w-75"> 
            <div class="form-group">
                <label for="exampleFormControlInput1">Your Name</label>
                <input type="text" name="name" class="form-control" placeholder="How could we address you?" id="form-name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Working Email</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com" id="form-email"> 
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Cell Phone</label>
                <input type="phone" name="phone" class="form-control" placeholder="+CountryCode ..." id="form-phone">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Your Question</label>
                <textarea class="form-control" name="question" rows="3" placeholder="Please enter your info" id="form-question"></textarea>
            </div>
            <button class="btn btn-outline-primary btn-lg" id="submit-form" onclick="ajaxseed();return false;">Send Message</button>
        </div> 
    </section>
    --}}
    {{-- Google map API --}}
    <section id="map"></section>
</section>
@endsection
