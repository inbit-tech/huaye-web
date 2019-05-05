@extends ('master')

@section ('page-title')
<title>Contact - Huaye</title>
@endsection

@section('content')
<section>
    <section class="hero is-light is-large">
        <figure class="image top-img">
            <img src="{{asset('img/component/contact/contact-us-cover.jpg')}}" alt="huaye contact us">
        </figure>
    </section>

    {{-- contact info section --}}
    <section class="section is-medium">
        <div class="container level tile align-items-flex-start">
            <div class="level-item has-text-centered tile is-vertical">
                <div>
                    <img class="image" src="{{asset('img/component/contact/icon_phone.png')}}" alt="Phone">
                </div>
                <div class="section">   
                    <a href="tel:0769-82601699" >
                        <p>联系电话：0769-82601699</p>
                    </a>
                    <a href="tel:0769-82236803" >
                        <p>企业传真：0769-82236803</p>
                    </a>
                </div>
            </div>
            <div class="level-item has-text-centered tile is-vertical">
                <div>
                    <img class="image" src="{{asset('img/component/contact/icon_addr.png')}}" alt="Address">
                </div>
                <div class="section">    
                    <a href="#map">
                        <p>广东省东莞市黄江镇裕元工业园精成二路灵狮小镇C栋三层C313-316号</p>
                    </a>
                </div>
            </div>
            <div class="level-item has-text-centered tile is-vertical">
                <div>
                    <img class="image" src="{{asset('img/component/contact/icon_email.png')}}" alt="eMail">
                </div>
                <div class="section">
                    <a href="mailto:huaye@huaye-dg.com">
                        <p>huaye@huaye-dg.com</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- form section --}}
    <section id="contact-form" class="section columns">
        <div class="container column is-6">
            <h3 class="title is-uppercase has-text-centered has-text-weight-bold has-text-grey">send us message what you need</h3>
            <form class="from-body" action="mail/send" method="get"> 
                <div class="field">
                    <label class="label" for="exampleFormControlInput1">Your Name</label>
                    <input type="text" name="name" class="input" placeholder="How could we address you?" id="form-name">
                </div>
                <div class="field">
                    <label class="label" for="exampleFormControlInput1">Working Email</label>
                    <input type="email" name="email" class="input" placeholder="name@example.com" id="form-email"> 
                </div>
                <div class="field">
                    <label class="label" for="exampleFormControlInput1">Cell Phone</label>
                    <input type="phone" name="phone" class="input" placeholder="+CountryCode ..." id="form-phone">
                </div>
                <div class="field">
                    <label class="label" for="exampleFormControlTextarea1">What you need</label>
                    <textarea class="textarea" name="question" placeholder="Please enter your need" id="form-question"></textarea>
                </div>
                
                <div class="field has-text-centered form-button">
                    <button href="mail/send" class="button is-info is-medium is-outlined"" type="submit" value="Submit input" id="submit-form">Send Message</button>
                </div>

                {{-- send success tip --}}
                @if(Session::has('message'))
                 <div class="tile is-parent">
                    <article class="tile is-child notification is-info">
                    <p class="has-text-centered is-size-3">Message sent!</p>
                    </article>
                </div>
                @endif
            </form>
        </div>
    </section>
    
    {{-- map API --}}
    {{-- this div's id must be "container" --}}
    <div id="container"></div>
</section>
@endsection
