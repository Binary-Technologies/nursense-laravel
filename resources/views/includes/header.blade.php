	<header>

		<!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top"> -->
		<nav class="navbar navbar-expand-md sticky-top fixed-top px-5 bg-light-w">

			<!-- One of the primary actions on mobile is to call a business - This displays a phone button on mobile only -->
			<div class="navbar-toggler-right">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="Brand">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse flex-column" id="navbarScroll">
					<!-- Authentication Links -->
					{{-- @guest
						@if (Route::has('login'))
							<li class="nav-item">
								<a class="nav-link" href="/userLogin">{{ __('Login') }}</a>
							</li>
						@endif
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }}
							</a>

							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
					@endguest --}}
				<ul class="navbar-nav w-100 justify-content-start align-item-bottom-end relative-block navbar-nav-scroll">

					<div class="right-nav-block">
						<div class="item-flex-center">
							<form class="form-inline justify-content-end mx-3 my-2 my-lg-0" method="post" action="#">
								<div class="input-group">
									<span><i class="fas fa-search home-search-i" area-hidden="true"></i></span>
									@guest
									<input type="text" class="form-control search-bar-custom" placeholder=" 검색어를 입력하세요." aria-label="Search">
									@endguest
								</div>
							</form>
							<div class="item-flex-center user-dp mr-4">
								@guest
								@else
								<a class="" href="myprofile.php">
									<img src="images/face.png" alt="dp">
								</a>
								<a class="" href="myprofile.php">
									<span class="user-name">{{ Auth::user()->name }}</span>
								</a>
								@endguest
							</div>
						</div>
					</div>

				</ul>


			</div>

		</nav>

	</header>