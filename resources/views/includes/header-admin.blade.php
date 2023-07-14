<div class="container-xxl position-relative bg-white d-flex p-0">

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Sidebar Start -->
    <div class="sidebar pb-3">

        <nav class="navbar pt-0">

            <a href="{{ url('/') }}" class="navbar-brand item-flex-center mb-3 pe-0 me-0">
                <img src="{{ asset('storage/images/adminlogo/adminSiteLogo.png') }}">
            </a>

            <?php $current_page = basename($_SERVER['REQUEST_URI']); ?>

            <div class="navbar-nav w-100" id="nav-active">

                <!-- <a href="{{ url('dashBoard') }}" class="nav-item nav-link <?php if ($current_page == 'dashBoard') : ?> active <?php endif; ?>">
                    Dashboard
                </a> -->

                <!-- Instructor, Student Management -->
                <div class="nav-item dropdown">

                    <a href="#" class="nav-link dropdown-toggle 
                    <?php if (
                        $current_page == 'instructorDash' ||
                        $current_page == 'insAccData' ||
                        $current_page == 'insAccDataEdit' ||
                        $current_page == 'insAccDataEditDp' ||
                        $current_page == 'insReg' ||
                        $current_page == 'studentDash' ||
                        $current_page == 'stuAccData' ||
                        $current_page == 'stuAccDataEdit' ||
                        $current_page == 'stuAccDataEditDp' ||
                        $current_page == 'stuReg'
                    ) : ?> active <?php endif; ?> " data-bs-toggle="dropdown">
                        회원 관리
                    </a>

                    <?php
                    $show_class = "";
                    if ($current_page == 'instructorDash') {
                        $show_class = "show";
                    } else if ($current_page == 'insAccData') {
                        $show_class = "show";
                    } else if ($current_page == 'insAccDataEdit') {
                        $show_class = "show";
                    } else if ($current_page == 'insAccDataEditDp') {
                        $show_class = "show";
                    } else if ($current_page == 'insReg') {
                        $show_class = "show";
                    } else if ($current_page == 'studentDash') {
                        $show_class = "show";
                    } else if ($current_page == 'stuAccData') {
                        $show_class = "show";
                    } else if ($current_page == 'stuAccDataEdit') {
                        $show_class = "show";
                    } else if ($current_page == 'stuAccDataEditDp') {
                        $show_class = "show";
                    } else if ($current_page == 'stuReg') {
                        $show_class = "show";
                    } else {
                        $show_class = "";
                    }
                    ?>

                    <div class="dropdown-menu bg-transparent border-0 <?php echo $show_class ?> py-0">

                        <!-- Instructor Management -->
                        <a href="{{ url('admin/instructorDash') }}" class="dropdown-item 
                        <?php if (
                            $current_page == 'instructorDash' ||
                            $current_page == 'insAccData' ||
                            $current_page == 'insAccDataEdit' ||
                            $current_page == 'insAccDataEditDp' ||
                            $current_page == 'insReg'
                        ) : ?>active show <?php endif; ?>">
                            회원 관리
                        </a>

                        <!-- Student Management -->
                        <a href="{{ url('admin/studentDash') }}" class="dropdown-item 
                        <?php if (
                            $current_page == 'studentDash' ||
                            $current_page == 'stuAccData' ||
                            $current_page == 'stuAccDataEdit' ||
                            $current_page == 'stuAccDataEditDp' ||
                            $current_page == 'stuReg'
                        ) : ?>active show <?php endif; ?>">
                            학생 계정 관리
                        </a>
                    </div>

                </div>

                <!-- Banner Management -->
                <a href="{{ url('admin/bannerDash') }}" class="nav-item nav-link 
                <?php if (
                    $current_page == 'bannerDash' ||
                    $current_page == 'bannerAdd' ||
                    $current_page == 'bannerAddAttFilereg' ||
                    $current_page == 'bannerDetails' ||
                    $current_page == 'bannerUpdate'
                ) : ?> active <?php endif; ?>">
                    배너 관리
                </a>

                <!-- Notice, News, Direction, Resource Management -->
                <div class="nav-item dropdown">

                    <a href="#" class="nav-link dropdown-toggle 
                    <?php if (
                        $current_page == 'noticeDash' ||
                        $current_page == 'noticeReg' ||
                        $current_page == 'noticeDetails' ||
                        $current_page == 'noticeUpdate' ||
                        $current_page == 'newsDash' ||
                        $current_page == 'newsReg' ||
                        $current_page == 'newsDetails' ||
                        $current_page == 'newsUpdate' ||
                        $current_page == 'directionDetails' ||
                        $current_page == 'directionUpdate' ||
                        $current_page == 'resourceDash' ||
                        $current_page == 'resourceReg' ||
                        $current_page == 'resourceAttFileReg' ||
                        $current_page == 'resourceDetails' ||
                        $current_page == 'resourceUpdate'
                    ) : ?> active <?php endif; ?> " data-bs-toggle="dropdown">
                        컨텐츠 관리
                    </a>

                    <?php
                    $show_class = "";
                    if ($current_page == 'noticeDash') {
                        $show_class = "show";
                    } else if ($current_page == 'noticeReg') {
                        $show_class = "show";
                    } else if ($current_page == 'noticeDetails') {
                        $show_class = "show";
                    } else if ($current_page == 'noticeUpdate') {
                        $show_class = "show";
                    } else if ($current_page == 'newsDash') {
                        $show_class = "show";
                    } else if ($current_page == 'newsReg') {
                        $show_class = "show";
                    } else if ($current_page == 'newsDetails') {
                        $show_class = "show";
                    } else if ($current_page == 'newsUpdate') {
                        $show_class = "show";
                    } else if ($current_page == 'directionDetails') {
                        $show_class = "show";
                    } else if ($current_page == 'directionUpdate') {
                        $show_class = "show";
                    } else if ($current_page == 'resourceDash') {
                        $show_class = "show";
                    } else if ($current_page == 'resourceReg') {
                        $show_class = "show";
                    } else if ($current_page == 'resourceAttFileReg') {
                        $show_class = "show";
                    } else if ($current_page == 'resourceDetails') {
                        $show_class = "show";
                    } else if ($current_page == 'resourceUpdate') {
                        $show_class = "show";
                    } else {
                        $show_class = "";
                    }
                    ?>

                    <div class="dropdown-menu bg-transparent border-0 <?php echo $show_class ?> py-0">

                        <!-- Notice Management -->
                        <a href="{{ url('admin/noticeDash') }}" class="dropdown-item 
                        <?php if (
                            $current_page == 'noticeDash' ||
                            $current_page == 'noticeReg' ||
                            $current_page == 'noticeDetails' ||
                            $current_page == 'noticeUpdate'
                        ) : ?>active show <?php endif; ?>">
                            공지사항 관리
                        </a>

                        <!-- News Management -->
                        <a href="{{ url('admin/newsDash') }}" class="dropdown-item 
                        <?php if (
                            $current_page == 'newsDash' ||
                            $current_page == 'newsReg' ||
                            $current_page == 'newsDetails' ||
                            $current_page == 'newsUpdate'
                        ) : ?>active show <?php endif; ?>">
                            소식 관리
                        </a>

                        <!-- Direction Management -->
                        <a href="{{ url('admin/directionDetails') }}" class="dropdown-item 
                        <?php if (
                            $current_page == 'directionDetails' ||
                            $current_page == 'directionUpdate'
                        ) : ?>active show <?php endif; ?>">
                            오시는 길 관리
                        </a>

                        <!-- Resource Management -->
                        <a href="{{ url('admin/resourceDash') }}" class="dropdown-item 
                        <?php if (
                            $current_page == 'resourceDash' ||
                            $current_page == 'resourceReg' ||
                            $current_page == 'resourceAttFileReg' ||
                            $current_page == 'resourceDetails' ||
                            $current_page == 'resourceUpdate'
                        ) : ?>active show <?php endif; ?>">
                            자료실 관리
                        </a>

                    </div>

                </div>

                <!-- Inquiry Management -->
                <a href="{{ url('admin/inquiryDash') }}" class="nav-item nav-link 
                <?php if (
                    $current_page == 'inquiryDash' ||
                    $current_page == 'inquiryReg' ||
                    $current_page == 'inquiryDetails' ||
                    $current_page == 'inquiryUpdate'
                ) : ?> active <?php endif; ?>">
                    1:1문의 관리
                </a>

                <!-- Menu, Logo Management -->
                <div class="nav-item dropdown">

                    <a href="#" class="nav-link dropdown-toggle 
                    <?php if (
                        $current_page == 'menuReg' ||
                        $current_page == 'logoReg'
                    ) : ?> active <?php endif; ?> " data-bs-toggle="dropdown">
                        메뉴 관리
                    </a>

                    <?php
                    $show_class = "";
                    if ($current_page == 'menuReg') {
                        $show_class = "show";
                    } else if ($current_page == 'logoReg') {
                        $show_class = "show";
                    } else {
                        $show_class = "";
                    }
                    ?>

                    <div class="dropdown-menu bg-transparent border-0 <?php echo $show_class ?> py-0">

                        <!-- Menu Management -->
                        <a href="{{ url('admin/menuReg') }}" class="dropdown-item 
                        <?php if (
                            $current_page == 'menuReg'
                        ) : ?>active show <?php endif; ?>">
                            메뉴명 관리
                        </a>

                        <!-- Logo Management -->
                        <a href="{{ url('admin/logoReg') }}" class="dropdown-item 
                        <?php if (
                            $current_page == 'logoReg'
                        ) : ?>active show <?php endif; ?>">
                            로고 관리
                        </a>

                    </div>

                </div>

                <!-- Statistics Management -->
                <div class="nav-item dropdown">

                    <a href="#" class="nav-link dropdown-toggle
                    <?php if (
                        $current_page == 'surveyStatDash' ||
                        $current_page == 'surveyStatDetails' ||
                        $current_page == 'surveyItemDash' ||
                        $current_page == 'surveyItemReg' ||
                        $current_page == 'surveyItemUpdate'
                    ) : ?> active <?php endif; ?> " data-bs-toggle="dropdown">
                        통계 관리
                    </a>

                    <?php
                    $show_class = "";
                    if ($current_page == 'surveyStatDash') {
                        $show_class = "show";
                    } else if ($current_page == 'surveyStatDetails') {
                        $show_class = "show";
                    } else if ($current_page == 'surveyItemDash') {
                        $show_class = "show";
                    } else if ($current_page == 'surveyItemReg') {
                        $show_class = "show";
                    } else if ($current_page == 'surveyItemUpdate') {
                        $show_class = "show";
                    } else {
                        $show_class = "";
                    }
                    ?>

                    <div class="dropdown-menu bg-transparent border-0 <?php echo $show_class ?> py-0">

                        <!-- Survey Stat Management -->
                        <a href="{{ url('admin/surveyStatDash') }}" class="dropdown-item
                        <?php if (
                            $current_page == 'surveyStatDash' ||
                            $current_page == 'surveyStatDetails'
                        ) : ?>active show <?php endif; ?>">
                            설문 통계
                        </a>

                        <!-- Survey Item Management -->
                        <a href="{{ url('admin/surveyItemDash') }}" class="dropdown-item
                        <?php if (
                            $current_page == 'surveyItemDash' ||
                            $current_page == 'surveyItemReg' ||
                            $current_page == 'surveyItemUpdate'
                        ) : ?>active show <?php endif; ?>">
                            설문 항목
                        </a>

                    </div>

                </div>

                <!-- Score Management -->
                <div class="nav-item dropdown">

                    <a href="#" class="nav-link dropdown-toggle 
                    <?php if (
                        $current_page == 'scoreEvalDash' ||
                        $current_page == 'scoreEvalUpdate' ||
                        $current_page == 'scoreCertifyDash' ||
                        $current_page == 'scoreCertifyUpdate'
                    ) : ?> active <?php endif; ?> " data-bs-toggle="dropdown">
                        배점 관리
                    </a>

                    <?php
                    $show_class = "";
                    if ($current_page == 'scoreEvalDash') {
                        $show_class = "show";
                    } else if ($current_page == 'scoreEvalUpdate') {
                        $show_class = "show";
                    } else if ($current_page == 'scoreCertifyDash') {
                        $show_class = "show";
                    } else if ($current_page == 'scoreCertifyUpdate') {
                        $show_class = "show";
                    } else {
                        $show_class = "";
                    }
                    ?>

                    <div class="dropdown-menu bg-transparent border-0 <?php echo $show_class ?> py-0">

                        <!-- Score Management -->
                        <a href="{{ url('admin/scoreEvalDash') }}" class="dropdown-item 
                        <?php if (
                            $current_page == 'scoreEvalDash' ||
                            $current_page == 'scoreEvalUpdate'
                        ) : ?>active show <?php endif; ?>">
                            평가 배점 관리
                        </a>

                        <!-- Certification Management -->
                        <a href="{{ url('admin/scoreCertifyDash') }}" class="dropdown-item 
                        <?php if (
                            $current_page == 'scoreCertifyDash' ||
                            $current_page == 'scoreCertifyUpdate'
                        ) : ?>active show <?php endif; ?>">
                            수료증 관리
                        </a>

                    </div>

                </div>

                <!-- Instructor, Student Reports Management -->
                <div class="nav-item dropdown">

                    <a href="#" class="nav-link dropdown-toggle 
                    <?php if (
                        $current_page == 'insReportDash' ||
                        $current_page == 'insReportDetails' ||
                        $current_page == 'stuReportDash' ||
                        $current_page == 'stuReportDetails'
                    ) : ?> active <?php endif; ?> " data-bs-toggle="dropdown">
                        리포트 관리
                    </a>

                    <?php
                    $show_class = "";
                    if ($current_page == 'insReportDash') {
                        $show_class = "show";
                    } else if ($current_page == 'insReportDetails') {
                        $show_class = "show";
                    } else if ($current_page == 'stuReportDash') {
                        $show_class = "show";
                    } else if ($current_page == 'stuReportDetails') {
                        $show_class = "show";
                    } else {
                        $show_class = "";
                    }
                    ?>

                    <div class="dropdown-menu bg-transparent border-0 <?php echo $show_class ?> py-0">

                        <!-- Instructor Reports Management -->
                        <a href="{{ url('admin/insReportDash') }}" class="dropdown-item 
                        <?php if (
                            $current_page == 'insReportDash' ||
                            $current_page == 'insReportDetails'
                        ) : ?>active show <?php endif; ?>">
                            교수자 리포트 자료
                        </a>

                        <!-- Student Reports Management -->
                        <a href="{{ url('admin/stuReportDash') }}" class="dropdown-item 
                        <?php if (
                            $current_page == 'stuReportDash' ||
                            $current_page == 'stuReportDetails'
                        ) : ?>active show <?php endif; ?>">
                            학생 리포트
                        </a>

                    </div>

                </div>

                <!-- Gallery Management -->
                <a href="{{ url('admin/galleryDash') }}" class="nav-item nav-link 
                <?php if (
                    $current_page == 'galleryDash' ||
                    $current_page == 'galleryReg' ||
                    $current_page == 'galleryRegComplete' ||
                    $current_page == 'galleryDetails' ||
                    $current_page == 'galleryUpdate'
                ) : ?> active <?php endif; ?>">
                    갤러리 관리
                </a>

                <!-- University Code Management -->
                <a href="{{ url('admin/univCodeDash') }}" class="nav-item nav-link 
                <?php if (
                    $current_page == 'univCodeDash' ||
                    $current_page == 'univCodeReg' ||
                    $current_page == 'univCodeDetails' ||
                    $current_page == 'univCodeUpdate'
                ) : ?> active <?php endif; ?>">
                    학교 코드 관리
                </a>

            </div>

        </nav>

        <div class="log-out-btn">
            <a class="item-flex-start" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <span class="me-2"><i class='far fa-arrow-alt-circle-right'></i></span>
                <span>로그아웃</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

        <!-- Log Out Alert Modal -->
        <!-- <div class="modal fade" id="logOutModal" aria-hidden="true" aria-labelledby="logOutModalContent" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center my-3" id="logOutModalContent"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                        <h5 class="alert-title text-center mt-1 mb-4">로그아웃</h5>
                        <p class="alert-text text-center mt-2 mb-5">
                            로그아웃 하시겠습니까?
                        </p>

                        <div class="item-flex-center my-2">
                            <div class="mx-1">
                                <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                            </div>
                            <div class="mx-1">
                                <button class="btn btn-alert2" data-bs-target="#completionModal" data-bs-toggle="modal">로그아웃</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Log Out Alert Modal -->

    </div>
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">