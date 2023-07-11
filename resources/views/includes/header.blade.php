	<header>
		<nav class="navbar navbar-expand-md sticky-top fixed-top px-5 bg-light-w">
			<div class="navbar-toggler-right">
				<a class="navbar-brand" href="/">
					<img src="{{ asset('storage/images/userlogo/userSiteLogo.png') }}" alt="Brand">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse flex-column" id="navbarScroll">
				<ul class="navbar-nav w-100 justify-content-start align-item-bottom-end relative-block navbar-nav-scroll">
					<li class="nav-item {{ isset(explode('/', Request::url())[3]) ?
											explode('/', Request::url())[3] == 'muve' ? 'active' : ''
											: ''}}">
						<a class="nav-link px-3" href="/muve/muve">MUVE소개<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item {{ isset(explode('/', Request::url())[3]) ?
											explode('/', Request::url())[3] == 'curriculum' ? 'active' : ''
											: ''}}">
						<a class="nav-link px-3" href="/curriculum/curriculum">교육과정<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item {{ isset(explode('/', Request::url())[3]) ?
											explode('/', Request::url())[3] == 'info' ? 'active' : ''
											: ''}}">
						<a class="nav-link px-3" href="/info/notice">정보마당<span class="sr-only">(current)</span></a>
					</li>
					<div class="right-nav-block">
						<div class="item-flex-center">
							<form class="form-inline justify-content-end mx-3 my-2 my-lg-0" method="post" action="#">
								<div class="input-group in-grp-custom">
									<span><i class="fas fa-search home-search-i" area-hidden="true"></i></span>
									<input type="text" class="form-control search-bar-custom" placeholder=" 검색어를 입력하세요." aria-label="Search">
								</div>
							</form>
							<div class="item-flex-center user-dp mr-4">
								@guest
								<li class="nav-item">
									<a class="nav-link" href="/userLogin">{{ __('로그인') }}</a>
								</li>
								@else
								<li class="nav-item">
									<a class="" href="/profile/info"><img src="/images/face.png" alt="dp"></a>
									<a class="" href="/profile/info">
										<span class="user-name">{{ Auth::user()->name }}</span>
									</a>
								</li>
								@endguest
							</div>
						</div>
					</div>
				</ul>

			</div>
		</nav>
	</header>