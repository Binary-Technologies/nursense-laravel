<div class="wrapper d-flex">
    <div class="sidebar">

        <nav class="navbar border-b-remove mt90">

            @if (isset(explode('/', Request::url())[3]) && explode('/', Request::url())[3] == 'muve')
            <small class="text-muted">MUVE소개</small>
            @elseif (isset(explode('/', Request::url())[3]) && explode('/', Request::url())[3] == 'curriculum')
            <small class="text-muted">교육과정</small>
            @elseif (isset(explode('/', Request::url())[3]) && explode('/', Request::url())[3] == 'info')
            <small class="text-muted" style="padding: 10px 55px;">정보마당</small>
            @elseif (isset(explode('/', Request::url())[3]) && explode('/', Request::url())[3] == 'profile')
            <small class="text-muted" style="padding: 10px 55px;">마이 페이지</small>
            @endif

            <ul class="navbar-nav pt-3">

                {{-- Muve --}}
                @if (isset(explode('/', Request::url())[3]) && explode('/', Request::url())[3] == 'muve')
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
                                                    explode('/', Request::url())[4] == 'muve' ? 'active' : ''
                                                    : ''}} side-menu-ac">
                    <a class="nav-link px-3" href="/muve/muve">MUVE란?<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
                                                    explode('/', Request::url())[4] == 'gallery' ? 'active' : ''
                                                    : ''}} side-menu-ac">
                <a class="nav-link px-3" href="/muve/gallery">갤러리<span class="sr-only">(current)</span></a>
                </li>
                @endif

                {{-- Curriculum --}}
                @if (isset(explode('/', Request::url())[3]) && explode('/', Request::url())[3] == 'curriculum')
                <li class="nav-item pt-2 pl-4">
                    <a class="nav-link dropdown-toggle border-left-transparent px-3" id="curriculum1" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        온라인사전학습
                    </a>
                    <div class="dropdown-menu drp-m show"> <!-- Remove this "show" class to active show/hide dropdown menu function -->
                        <div class="{{ isset(explode('/', Request::url())[4]) ?
                                        explode('/', Request::url())[4] == 'curriculum' ? 'active' : ''
                                        : ''}} side-menu-ac drp-menu">
                            <a class="dropdown-item" href="/curriculum/curriculum"><i class="fas fa-circle sub-menu-i"></i> 사전학습<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="{{ isset(explode('/', Request::url())[4]) ?
                                        explode('/', Request::url())[4] == 'curr' ? 'active' : ''
                                        : ''}} side-menu-ac drp-menu">
                            <a class="dropdown-item" href="/curriculum/curr"><i class="fas fa-circle sub-menu-i"></i> 사전학습평가<span class="sr-only">(current)</span></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item pt-2 pl-4">
                    <a class="nav-link dropdown-toggle border-left-transparent px-3" id="curriculum2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        본학습
                    </a>
                    <div class="dropdown-menu drp-m show"> <!-- Remove this "show" class to active show/hide dropdown menu function -->
                        <div class="{{ isset(explode('/', Request::url())[4]) ?
                                        explode('/', Request::url())[4] == 'guide' ? 'active' : ''
                                        : ''}} side-menu-ac drp-menu">
                            <a class="dropdown-item" href="/curriculum/guide"><i class="fas fa-circle sub-menu-i"></i> 이용안내<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="{{ isset(explode('/', Request::url())[4]) ?
                                        explode('/', Request::url())[4] == 'download' ? 'active' : ''
                                        : ''}} side-menu-ac drp-menu">
                            <a class="dropdown-item" href="/curriculum/download"><i class="fas fa-circle sub-menu-i"></i> 다운로드<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="{{ isset(explode('/', Request::url())[4]) ?
                                        explode('/', Request::url())[4] == 'learning' ? 'active' : ''
                                        : ''}} side-menu-ac drp-menu">
                            <a class="dropdown-item" href="/curriculum/learning"><i class="fas fa-circle sub-menu-i"></i> 학습<span class="sr-only">(current)</span></a>
                        </div>
                    </div>
                </li>
                @endif

                {{-- Info Pages --}}
                @if (isset(explode('/', Request::url())[3]) && explode('/', Request::url())[3] == 'info')
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
											explode('/', Request::url())[4] == 'notice' ? 'active' : ''
											: ''}} side-menu-ac">
                    <a class="nav-link px-3" href="/info/notice">공지사항<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
                                                explode('/', Request::url())[4] == 'news' ? 'active' : ''
                                                : ''}} side-menu-ac">
                    <a class="nav-link px-3" href="/info/news">소식<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
                                                explode('/', Request::url())[4] == 'inquiry' ? 'active' : ''
                                                : ''}} side-menu-ac">
                    <a class="nav-link px-3" href="/info/inquiry">1:1문의<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
                                                explode('/', Request::url())[4] == 'location' ? 'active' : ''
                                                : ''}} side-menu-ac">
                    <a class="nav-link px-3" href="/info/location">오시는 길<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
                                            explode('/', Request::url())[4] == 'resources' ? 'active' : ''
                                            : ''}} side-menu-ac">
                    <a class="nav-link px-3" href="/info/resources">자료실<span class="sr-only">(current)</span></a>
                </li>
                @endif

                {{-- My Profile --}}
                @if (isset(explode('/', Request::url())[3]) && explode('/', Request::url())[3] == 'profile')
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
                                                    explode('/', Request::url())[4] == 'info' ? 'active' : ''
                                                    : ''}} side-menu-ac">
                    <a class="nav-link px-3" href="/profile/info">회원정보<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
                                                    explode('/', Request::url())[4] == 'study' ? 'active' : ''
                                                    : ''}} side-menu-ac">
                    <a class="nav-link px-3" href="/profile/study">나의 학습 내역<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
                                                    explode('/', Request::url())[4] == 'manage' ? 'active' : ''
                                                    : ''}} side-menu-ac">
                    <a class="nav-link px-3" href="/profile/manage">수강생 관리<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4">
                    <a class="nav-link dropdown-toggle border-left-transparent px-3" id="profile-m" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        평가 관리
                    </a>
                    <div class="dropdown-menu drp-m show"> <!-- Remove this "show" class to active show/hide dropdown menu function -->
                        <div class="{{ isset(explode('/', Request::url())[4]) ?
                                        explode('/', Request::url())[4] == 'assesment' ? 'active' : ''
                                        : ''}} side-menu-ac drp-menu">
                            <a class="dropdown-item" href="/profile/assesment"><i class="fas fa-circle sub-menu-i"></i>사전/최종평가<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="{{ isset(explode('/', Request::url())[4]) ?
                                        explode('/', Request::url())[4] == 'prelearning' ? 'active' : ''
                                        : ''}} side-menu-ac drp-menu">
                            <a class="dropdown-item" href="/profile/prelearning"><i class="fas fa-circle sub-menu-i"></i>사전학습<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="{{ isset(explode('/', Request::url())[4]) ?
                                        explode('/', Request::url())[4] == 'reports' ? 'active' : ''
                                        : ''}} side-menu-ac drp-menu">
                            <a class="dropdown-item" href="/profile/reports"><i class="fas fa-circle sub-menu-i"></i>리포트<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="{{ isset(explode('/', Request::url())[4]) ?
                                        explode('/', Request::url())[4] == 'allocation' ? 'active' : ''
                                        : ''}} side-menu-ac drp-menu">
                            <a class="dropdown-item" href="/profile/allocation"><i class="fas fa-circle sub-menu-i"></i>배점 설정<span class="sr-only">(current)</span></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item pt-2 pl-4  side-menu-ac">
                    <a class="nav-link px-3" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        로그아웃<span class="sr-only">(current)</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endif
            </ul>
        </nav>

    </div>
</div>