{{-- Top Navigation --}}
<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<a class="navbar-item" href="/">
			<img src="{{asset('img/common/huaye-logo-reverse.png')}}">
		</a>

		<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
		</a>
	</div>

	<div id="navbarMenu" class="navbar-menu is-size-6">
		<div class="navbar-start">
			<div class="navbar-item has-dropdown is-hoverable">
				<a  href="/products" class="navbar-link">@lang('navi.products')</a>

				<div class="navbar-dropdown">
					<a href="/products/bec" class="navbar-item">特种自粘性漆包线</a>
					<a href="/products/uht" class="navbar-item">超高耐温漆包线</a>
					<a href="/products/litz" class="navbar-item">LITZ 线 / 丝包 LITZ 线</a>
				</div>
			</div>

			<a href="/about" class="navbar-item">@lang('navi.about')</a>
			<a href="/contact" class="navbar-item">@lang('navi.contact')</a>
		</div>
		<div class="navbar-end">
			<div class="navbar-item has-dropdown is-hoverable">
                {{-- <a class="navbar-link is-arrowless">@lang('navi.lang')</a> --}}
                <a class="navbar-link is-arrowless">@lang('navi.lang')</a>

                <div class="navbar-dropdown is-boxed">
                    <a href="lang/en" class="navbar-item">English</a>
                    <a href="lang/zh" class="navbar-item">中文</a>
                </div>
            </div>
		</div>
	</div>
</nav>
