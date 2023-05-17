<div class="wrapper d-flex">
    <div class="sidebar">

        <nav class="navbar border-b-remove mt90">
            <small class="text-muted">MUVE소개</small>
            <ul class="navbar-nav pt-3">
                <li class="nav-item pt-2 pl-4 <?php if ($currentpage == "muve.php") {
                                                    echo 'active';
                                                } ?> side-menu-ac">
                    <a class="nav-link px-3" href="muve.php">MUVE란?<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 <?php if ($currentpage == "muve-gallery.php" || $currentpage == "gallery_details.php") {
                                                    echo 'active';
                                                } ?> side-menu-ac">
                    <a class="nav-link px-3" href="muve-gallery.php">갤러리<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </nav>

    </div>
</div>