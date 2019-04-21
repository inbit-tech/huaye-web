<div class="hero-head">
    <nav class="navbar is-transparent has-text-weight-bold">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item">
                    <img src={{asset('img/home/huaye-logo-reverse.png')}} alt="Huaye">
                </a>
                <span class="navbar-burger burger" data-target="navbarMenuHeroB">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </div>
            <div id="navbarMenuHeroB" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item is-active">@lang('navi.home')</a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link is-arrowless">@lang('navi.products')</a>

                        <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item has-text-grey-darker">特种自粘性漆包线</a>
                            <a class="navbar-item has-text-grey-darker">超高耐温漆包线</a>
                            <a class="navbar-item has-text-grey-darker">LITZ 线 / 丝包 LITZ 线</a>
                        </div>
                    </div>
                    <a class="navbar-item">@lang('navi.about')</a>
                    <a class="navbar-item">@lang('navi.contact')</a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link is-arrowless">@lang('navi.lang')</a>

                        <div class="navbar-dropdown is-boxed">
                            <a href="lang/en" class="navbar-item has-text-grey-darker">英文</a>
                            <a href="lang/zh" class="navbar-item has-text-grey-darker">中文</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="hero-body">
    <div class="container has-text-centered">
        <p class="title">
        华冶科技
        </p>
        <p class="subtitle">
        东莞
        </p>
    </div>
</div>