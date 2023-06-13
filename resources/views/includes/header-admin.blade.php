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
                <img src="{{ asset('assets/img/logo.png') }}">
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

    </div>
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">