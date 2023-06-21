<footer class="footer-sec">

    <nav class="navbar navbar-expand-lg bg-light w-100" style="background-color: #F3F4F8; padding-left: 5%;">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item {{ isset(explode('/', Request::url())[3]) ?
                                            explode('/', Request::url())[3] == 'info' ? 'active' : ''
                                        : ''}}">
                    <a class="nav-link px-3" href="/muve/muve">
                        <span class="footer_font">회사소개</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item {{ isset(explode('/', Request::url())[3]) ?
                                            explode('/', Request::url())[3] == 'terms_conditions' ? 'active' : ''
                                        : ''}}">
                    <a class="nav-link px-3" href="/terms_conditions">
                        <span class="footer_font">이용약관</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item {{ isset(explode('/', Request::url())[3]) ?
                                            explode('/', Request::url())[3] == 'privacy_policy' ? 'active' : ''
                                        : ''}}">
                    <a class="nav-link px-3" href="/privacy_policy">
                        <span class="footer_font">개인정보처리방침</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item {{ isset(explode('/', Request::url())[3]) ?
                                            explode('/', Request::url())[3] == 'info' ? 'active' : ''
                                        : ''}}">
                    <a class="nav-link px-3" href="/info/notice">
                        <span class="footer_font">공지사항</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item {{ isset(explode('/', Request::url())[4]) ?
                                            explode('/', Request::url())[4] == 'quiz' ? 'active' : ''
                                        : ''}}">
                    <a class="nav-link px-3" href="/quiz">
                        <span class="footer_font">사용자매뉴얼</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item {{ isset(explode('/', Request::url())[4]) ?
                                            explode('/', Request::url())[4] == 'inquiry' ? 'active' : ''
                                        : ''}}">
                    <a class="nav-link px-3" href="/info/inquiry">
                        <span class="footer_font">1:1문의</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item {{ isset(explode('/', Request::url())[3]) ?
                                            explode('/', Request::url())[3] == 'mystudy' ? 'active' : ''
                                        : ''}}">
                    <a class="nav-link px-3" href="/profile/study">
                        <span class="footer_font">수료증출력</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item {{ isset(explode('/', Request::url())[4]) ?
                                            explode('/', Request::url())[4] == 'location' ? 'active' : ''
                                        : ''}}">
                    <a class="nav-link px-3" href="/info/location">
                        <span class="footer_font">찾아오시는길</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="pt-5">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-12 pb-3">
                <div class="footer-brand pl-2">
                    <img src="{{ asset('storage/images/userlogo/userSiteLogo.png') }}" alt="Brand">
                </div>
            </div>
            <div class="col-lg-10 col-md-8 col-sm-12">
                <div class="f_widget ab f_about_widget">
                    <div class="f_title">
                        <h3 style="font-family: pretendard-semibold; font-size: 16px; color: #090909;">(주) 더블엠소셜컴퍼니</h3>
                    </div>
                    <p style="font-family: pretendard-regular; font-size: 14px; color: #616474;">대표이사: 김선미, 주소: 대구광역시 동대구로 465 스케일업허브 DASH 405, 406호<br>Tel: 1688-9564, 010-9436-5543, E-mail: wmsc0202@naver.com</p>

                    <p class="copyright pl-0 pb-5" style="font-family: pretendard-regular; font-size: 12px; color: #9495A1;"><span></span> © 2023. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>