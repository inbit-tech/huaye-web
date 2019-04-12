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

    {{-- form section --}}
    <section id="contact-form" class="columns">
        <div class="column is-3"></div>
        <div class="column">
            <h3 class="from-title has-text-centered has-text-weight-bold has-text-grey">send us message what you need</h3>
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
                    <p class="title has-text-centered">Message sent!</p>
                    </article>
                </div>
                @endif
            </form>

        </div>
        <div class="column is-3"></div>
    </section>
    

    {{-- map API --}}
    <iframe width='1920' height='560' style="height:560px;margin-top:4.75rem" frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://f.amap.com/6mGsm_06675dm'></iframe>
    </section>
@endsection
