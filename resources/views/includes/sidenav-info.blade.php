<div class="wrapper d-flex">
    <div class="sidebar">

        <nav class="navbar border-b-remove mt90">
            <small class="text-muted" style="padding: 10px 55px;">정보마당</small>
            <ul class="navbar-nav pt-3">
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
											explode('/', Request::url())[4] == 'details' ? 'active' : ''
											: ''}} side-menu-ac">
                    <a class="nav-link px-3" href="info.php">공지사항<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
                                                explode('/', Request::url())[4] == 'news_main' ? 'active' : ''
                                                : ''}} side-menu-ac">
                    <a class="nav-link px-3" href="news_main.php">소식<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
                                                explode('/', Request::url())[4] == 'inquiry' ? 'active' : ''
                                                : ''}} side-menu-ac">
                    <a class="nav-link px-3" href="inquiry.php">1:1문의<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
                                                explode('/', Request::url())[4] == 'location' ? 'active' : ''
                                                : ''}} side-menu-ac">
                    <a class="nav-link px-3" href="location.php">오시는 길<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pt-2 pl-4 {{ isset(explode('/', Request::url())[4]) ?
                                            explode('/', Request::url())[4] == 'resources' ? 'active' : ''
                                            : ''}} side-menu-ac">
                    <a class="nav-link px-3" href="resources.php">자료실<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </nav>

    </div>
</div>