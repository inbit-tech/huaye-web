{{-- Top Navigation --}}
<nav class="navbar container" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<a class="navbar-item" href="/">
			<img src="http://pp3tibsrj.bkt.clouddn.com/huaye-logo.png">
		</a>

		<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
		</a>
	</div>

	<div id="navbarMenu" class="navbar-menu has-text-weight-bold is-size-6">
		<div class="navbar-end">
			<a  href="/" class="navbar-item">@lang('navi.home')</a>

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
			<div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link is-arrowless">@lang('navi.lang')</a>

                <div class="navbar-dropdown is-boxed">
                    <a href="lang/en" class="navbar-item has-text-grey-darker">英文</a>
                    <a href="lang/zh" class="navbar-item has-text-grey-darker">中文</a>
                </div>
            </div>
		</div>
	</div>
</nav>
