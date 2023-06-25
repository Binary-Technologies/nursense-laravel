<div class="wrapper d-flex">
    <div class="sidebar">

        <nav class="navbar border-b-remove mt90">
            <small class="text-muted">마이 페이지</small>
            <ul class="navbar-nav pt-3">

                <li class="nav-item pt-2 pl-4 <?php if ($currentpage == "myprofile.php") {
                                                    echo 'active';
                                                } ?> side-menu-ac">
                    <a class="nav-link px-3" href="myprofile.php">회원정보<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 <?php if ($currentpage == "mystudy.php") {
                                                    echo 'active';
                                                } ?> side-menu-ac">
                    <a class="nav-link px-3" href="mystudy.php">나의 학습 내역<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 
                <?php if (
                    $currentpage == "mymanage" ||
                    $currentpage == "MemberInfoMng"
                ) {
                    echo 'active';
                } ?> side-menu-ac">
                    <a class="nav-link px-3" href="{{ url('profile/mymanage') }}">수강생 관리<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item pt-2 pl-4">
                    <a class="nav-link dropdown-toggle border-left-transparent px-3" id="profile-m" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        평가 관리
                    </a>
                    <div class="dropdown-menu drp-m show"> <!-- Remove this "show" class to active show/hide dropdown menu function -->
                        <div class="
                        <?php if (
                            $currentpage == "assestment" ||
                            $currentpage == "assesmentPrev" ||
                            $currentpage == "assesmentEvalReg" ||
                            $currentpage == "assesmentRevision"
                        ) {
                            echo 'active';
                        } ?> side-menu-ac drp-menu">
                            <a class="dropdown-item" href="{{ url('profile/assesment') }}"><i class="fas fa-circle sub-menu-i"></i> 사전/최종평가<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="
                        <?php if (
                            $currentpage == "prelearning" ||
                            $currentpage == "prelearningReg" ||
                            $currentpage == "prelearningModify"
                        ) {
                            echo 'active';
                        } ?> side-menu-ac drp-menu">
                            <a class="dropdown-item" href="{{url('profile/reports)}}"><i class="fas fa-circle sub-menu-i"></i> 사전학습<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="
                        <?php if (
                            $currentpage == "reports" ||
                            $currentpage == "reportsReg" ||
                            $currentpage == "reportsAllSem" ||
                            $currentpage == "reportsModify"
                        ) {
                            echo 'active';
                        } ?> side-menu-ac drp-menu">
                            <a class="dropdown-item" href="myreports.php"><i class="fas fa-circle sub-menu-i"></i> 리포트<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="
                        <?php if (
                            $currentpage == "allocation"
                        ) {
                            echo 'active';
                        } ?> side-menu-ac drp-menu">
                            <a class="dropdown-item" href="myallocation.php"><i class="fas fa-circle sub-menu-i"></i> 배점 설정<span class="sr-only">(current)</span></a>
                        </div>
                    </div>
                </li>

                <li class="nav-item pt-2 pl-4 <?php if ($currentpage == "#") {
                                                    echo 'active';
                                                } ?> side-menu-ac">
                    <a class="nav-link px-3" href="#">로그아웃<span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </nav>

    </div>
</div>