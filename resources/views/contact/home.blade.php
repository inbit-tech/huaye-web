@extends ('master')

@section ('page-title')
<title>@lang('navi.contact') - @lang('navi.title')</title>
@endsection

{{-- Cover Image with Title --}}
@section('content')
<section class="hero is-light is-large contact-background-image is-marginless is-paddingless">
    <div class="hero-body">
        <div class="container">
            <h1 class="title use-noto-900 is-size-1 has-text-black has-text-centered">@lang('navi.contact')</h1>
        </div>
    </div>
</section>

{{-- Contact Info --}}
<section class="section is-medium">
    <div class="container level tile align-items-flex-start">
        <div class="level-item has-text-centered tile is-vertical">
            <div>
                <a href="tel:0769-82601699" >
                    <img class="image contact-info-img" src="{{asset('img/component/contact/icon_phone.png')}}" alt="Phone">
                </a>
            </div>
            <div class="section">   
                <a href="fax:0769-82601699" >
                    <p class="use-noto-900 is-size-5">0769-82601699</p>
                </a>
            </div>
        </div>
        <div class="level-item has-text-centered tile is-vertical">
            <div>
                <a href="#container">
                    <img class="image contact-info-img" src="{{asset('img/component/contact/icon_addr.png')}}" alt="Address">
                </a>
            </div>
            <div class="section">    
                <a href="#container">
                    <p class="use-noto-900">{{ __('No.4 Jinshagang six Road,') }}<br/>{{ __('Shixia Village, Dalang Town, Dongguan,') }}<br/>{{ __('Guangdong Province, China') }}</p>
                </a>
            </div>
        </div>
        <div class="level-item has-text-centered tile is-vertical">
            <div>
                <a href="mailto:huaye@huaye-dg.com">
                    <img class="image contact-info-img" src="{{asset('img/component/contact/icon_email.png')}}" alt="eMail">
                </a>
            </div>
            <div class="section">
                <a href="mailto:huaye@huaye-dg.com">
                    <p class="use-noto-900 is-size-5">huaye@huaye-dg.com</p>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Contact Form --}}
<section id="contact-form" class="section columns">
    <div class="container column is-6">
        <h3 class="title is-uppercase has-text-centered use-noto-900 has-text-grey-dark">{{ __('Send Us Message What You Need') }}</h3>
        <form class="from-body" action="mail/send" method="get"> 
            <div class="field">
                <label class="label" for="exampleFormControlInput1"></label>
                <input type="text" name="name" class="input" placeholder="{{ __('How could we address you?') }}" id="form-name">
            </div>
            <div class="field">
                <label class="label" for="exampleFormControlInput1"></label>
                <input type="email" name="email" class="input" placeholder="{{ __('your-mail@mail.com') }}" id="form-email"> 
            </div>
            <div class="field">
                <label class="label" for="exampleFormControlInput1"></label>
                <input type="phone" name="phone" class="input" placeholder="{{ __('+CountryCode') }} ..." id="form-phone">
            </div>
            <div class="field">
                <label class="label" for="exampleFormControlTextarea1"></label>
                <textarea class="textarea" name="question" placeholder="{{ __('Please enter your need') }}" id="form-question"></textarea>
            </div>
            
            <div class="section field has-text-centered form-button">
                <button href="mail/send" class="button is-link is-large is-outlined use-noto-900"" type="submit" value="Submit input" id="submit-form">{{ __('Send Message') }}</button>
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
@endsection
