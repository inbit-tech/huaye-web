@extends ('master')

@section ('page-title')
<title>@lang('navi.contact') - @lang('navi.title')</title>
@endsection

@section('content')
<section class="section-half-screen">
    <div class="columns">
        <div class="column is-5">
            {{-- map API --}}
            {{-- this div's id must be "container" --}}
            <div id="container"></div>
        </div>
        <div class="column is-7">
            {{-- Contact Form --}}
            <section id="contact-form" class="section columns">
                <div class="container column is-10">
                    <h3 class="title is-uppercase has-text-centered use-noto-900 has-text-grey-dark is-size-4-mobile">{{ __('Please Send Us Message') }}</h3>
                    <form class="from-body" action="mail/send" method="get"> 
                        <div class="field field-padding">
                            <label class="label"></label>
                            <input  required="required" type="text" name="name" class="input has-input-height" placeholder="{{ __('How could we address you?') }}" id="form-name">
                        </div>
                        <div class="field field-padding">
                            <label class="label"></label>
                            <input  required="required" type="email" name="email" class="input has-input-height" placeholder="{{ __('your-mail@mail.com') }}" id="form-email"> 
                        </div>
                        <div class="field field-padding">
                            <label class="label"></label>
                            <input  required="required" type="phone" name="phone" class="input has-input-height" placeholder="{{ __('your phone number') }} ..." id="form-phone">
                        </div>
                        <div class="field field-padding">
                            <label class="label"></label>
                            <textarea  required="required" class="textarea" name="question" placeholder="{{ __('Please enter your need') }}" id="form-question"></textarea>
                        </div>
                        <div class="field field-padding has-text-centered form-button">
                            <button href="mail/send" class="button is-link is-large is-outlined use-noto-900"" type="submit" value="Submit input" id="submit-form">{{ __('Send Message') }}</button>
                        </div>

                        {{-- send success tip --}}
                        @if(Session::has('message'))
                        <div class="tile is-parent">
                            <article class="tile is-child notification is-info">
                            <p class="has-text-centered is-size-4">Message sent!</p>
                            </article>
                        </div>
                        @endif
                    </form>
                </div>
            </section>

            {{-- Contact Info --}}
            <section class="section">
                <div class="level tile align-items-flex-start">
                    <div class="level-item has-text-centered tile is-vertical contact-info-padding">	
                        <div>	
                            <a href="#container">	
                                <img class="image contact-info-img" src="{{asset('img/component/contact/icon_addr.png')}}" alt="Production center">	
                            </a>	
                        </div>	
                        <div class="contact-info-text-m-t">    	
                            <a href="#container">	
                                <p class="use-noto-900 is-size-6">{{__('Production center')}}:<br>{{ __('No.4 Jinshagang six Road,') }}<br/>{{ __('Shixia Village, Dalang Town, Dongguan,') }}<br/>{{ __('Guangdong Province, China') }}</p>	
                            </a>
                        </div>
                    </div>
                    <div class="level-item has-text-centered tile is-vertical contact-info-padding">	
                        <div>	
                            <a href="#container">	
                                <img class="image contact-info-img" src="{{asset('img/component/contact/icon_factory.png')}}" alt="Operation center">	
                            </a>	
                        </div>	
                        <div class="contact-info-text-m-t">
                            <a href="#container">
                                <p class="use-noto-900 is-size-6">{{__('Operation center')}}:<br>{{__('No.4, Jinsha gang no.6, Shixia village')}}<br>{{__("Dalang town, Dongguan city,Guangdong Province, China")}}</p>
                            </a>
                        </div>
                    </div>
                    <div class="level-item has-text-centered tile is-vertical contact-info-padding">
                        <div>
                            <a href="tel:0769-82601699" >
                                <img class="image contact-info-img" src="{{asset('img/component/contact/icon_phone.png')}}" alt="Phone">
                            </a>
                        </div>
                        <div class="contact-info-text-m-t">   
                            <a href="tel:0769-82601699" >
                                <p class="use-noto-900 is-size-6">0769-82601699</p>
                            </a>
                            <a href="tel:0769-82236800" >
                                <p class="use-noto-900 is-size-6">0769-82236800</p>
                            </a>
                        </div>
                    </div>
                    <div class="level-item has-text-centered tile is-vertical contact-info-padding">
                        <div>
                            <a href="mailto:huaye@huaye-dg.com">
                                <img class="image contact-info-img" src="{{asset('img/component/contact/icon_email.png')}}" alt="eMail">
                            </a>
                        </div>
                        <div class="contact-info-text-m-t">
                            <a href="mailto:huaye@huaye-dg.com">
                                <p class="use-noto-900 is-size-6">huaye@huaye-dg.com</p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
@endsection
