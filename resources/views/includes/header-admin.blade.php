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

                <div class="nav-item dropdown">

                    <a href="#" class="nav-link dropdown-toggle 
                    <?php if (
                        $current_page == 'viewMemIns' ||
                        $current_page == 'insAccData' ||
                        $current_page == 'viewMemStu' ||
                        $current_page == 'stuAccData'
                    ) : ?> active <?php endif; ?> " data-bs-toggle="dropdown">
                        회원 관리
                    </a>

                    <?php
                    $show_class = "";
                    if ($current_page == 'viewMemIns') {
                        $show_class = "show";
                    } else if ($current_page == 'insAccData') {
                        $show_class = "show";
                    } else if ($current_page == 'viewMemStu') {
                        $show_class = "show";
                    } else if ($current_page == 'stuAccData') {
                        $show_class = "show";
                    } else {
                        $show_class = "";
                    }
                    ?>

                    <div class="dropdown-menu bg-transparent border-0 <?php echo $show_class ?> py-0">
                        <a href="{{ url('viewMemIns') }}" class="dropdown-item <?php if ($current_page == 'viewMemIns' || $current_page == 'insAccData') : ?>active show <?php endif; ?>">
                            회원 관리
                        </a>
                        <a href="{{ url('viewMemStu') }}" class="dropdown-item <?php if ($current_page == 'viewMemStu' || $current_page == 'stuAccData') : ?>active show <?php endif; ?>">
                            학생 계정 관리
                        </a>
                    </div>

                </div>
            </div>

        </nav>

    </div>
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">