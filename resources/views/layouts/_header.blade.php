<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
	<div class="container">
		<a href="{{ url('/') }}" class="navbar-brand">larabbs</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				
			</ul>

			<ul class="navbar-nav navbar-right">
				<li class="nav-item">
					<a href="{{ route('login') }}" class="nav-link">登录</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('register') }}" class="nav-link">注册</a>
				</li>
			</ul>
		</div>
	</div>
</nav>