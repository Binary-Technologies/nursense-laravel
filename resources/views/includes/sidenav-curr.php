<div class="wrapper d-flex">
    <div class="sidebar">

        <nav class="navbar border-b-remove mt90">
            <small class="text-muted">교육과정</small>
            <ul class="navbar-nav pt-3">

                <li class="nav-item pt-2 pl-4">
                    <a class="nav-link dropdown-toggle border-left-transparent px-3" id="curriculum1" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        온라인사전학습
                    </a>
                    <div class="dropdown-menu drp-m show"> <!-- Remove this "show" class to active show/hide dropdown menu function -->
                        <div class="
                        <?php if (
                            $currentpage == "curriculum.php"
                        ) {
                            echo 'active';
                        } ?> side-menu-ac drp-menu">
                            <a class="dropdown-item" href="curriculum.php"><i class="fas fa-circle sub-menu-i"></i> 사전학습<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="
                        <?php if (
                            $currentpage == "curr" ||
                            $currentpage == "quiz" ||
                            $currentpage == "quizCheckAns"
                        ) {
                            echo 'active';
                        } ?> side-menu-ac drp-menu">
                            <a class="dropdown-item" href="{{ url('/curriculum/curr') }}"><i class="fas fa-circle sub-menu-i"></i> 사전학습평가<span class="sr-only">(current)</span></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item pt-2 pl-4">
                    <a class="nav-link dropdown-toggle border-left-transparent px-3" id="curriculum2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        본학습
                    </a>
                    <div class="dropdown-menu drp-m show"> <!-- Remove this "show" class to active show/hide dropdown menu function -->
                        <div class="<?php if ($currentpage == "guide.php") {
                                        echo 'active';
                                    } ?> side-menu-ac drp-menu">
                            <a class="dropdown-item" href="guide.php"><i class="fas fa-circle sub-menu-i"></i> 이용안내<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="<?php if ($currentpage == "download.php") {
                                        echo 'active';
                                    } ?> side-menu-ac drp-menu">
                            <a class="dropdown-item" href="download.php"><i class="fas fa-circle sub-menu-i"></i> 다운로드<span class="sr-only">(current)</span></a>
                        </div>
                        <div class="<?php if ($currentpage == "learning.php" || $currentpage == "learning_details.php") {
                                        echo 'active';
                                    } ?> side-menu-ac drp-menu">
                            <a class="dropdown-item" href="learning.php"><i class="fas fa-circle sub-menu-i"></i> 학습<span class="sr-only">(current)</span></a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>

    </div>
</div>