@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">배너 관리</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item breadcrumb-text1"></li> -->
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">배너 관리</li>
        </ol>
    </nav>
</div>

<!-- Instructor Account Management Start -->
<div class="container-fluid px-0">

    <div class="rounded pt-4">

        <form method="post" id="instructor-filter-form" action="#">

            <!-- Table Section -->
            <div class="row mb-4">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <select class="form-select form-text-d" name="expose-banner" id="exposeBanner" aria-label="Whether to Expose Banner">
                        <option value="1" selected>전체</option>
                        <option value="2">노출</option>
                        <option value="3">미노출</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <span class="position-rel"><i class="fas fa-search view-search-i" area-hidden="true"></i></span>
                    <input type="text" class="form-control form-text-l search-bar-custom" name="search-banner" id="searchBanner" placeholder="배너명을 입력하세요." aria-label="Search">
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <a href="#" class="btn btn-secondary btn1">
                        검색
                    </a>
                </div>
            </div>
            <div class="row mb-4">

                <div class="col-xl-10 col-lg-10 col-md-6 d-sm-none d-md-block list-count-outer">
                    <span class="position-rel list-count">
                        Total
                        <span class="b-right"></span>
                    </span>
                    <span class="list-count-num">
                        70
                    </span>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                    <a href="{{ route('insAccData') }}" class="btn btn-secondary btn3">
                        배너 추가 등록
                    </a>
                </div>

                <div class="col-sm-12 d-none d-sm-block d-md-none list-count-outer">
                    <span class="position-rel list-count">
                        Total
                    </span>
                    <span class="list-count-num">
                        70
                    </span>
                </div>

            </div>

        </form>

    </div>

    <div class="table-responsive mb-3">

        <table class="table align-middle table-hover">
            <thead class="thead-light text-center">
                <tr class="table-head-1">
                    <th scope="col" class="table-th-text">번호</th>
                    <th scope="col" class="table-th-text">배너명</th>
                    <th scope="col" class="table-th-text">배너 이미지</th>
                    <th scope="col" class="table-th-text">배너 노출</th>
                    <th scope="col" class="table-th-text">배너 노출 순서</th>
                    <th scope="col" class="table-th-text">등록일</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>70</td>
                    <td>[Nursense] 메인 홍보 배너</td>
                    <td>
                        <img src="{{ asset('assets/img/banner-img.png') }}">
                    </td>
                    <td>노출</td>
                    <td>1</td>
                    <td>2023.01.23</td>
                </tr>
                <tr>
                    <td>69</td>
                    <td>[Nursense] 메인 홍보 배너</td>
                    <td>
                        <img src="{{ asset('assets/img/banner-img.png') }}">
                    </td>
                    <td>노출</td>
                    <td>2</td>
                    <td>2023.01.23</td>
                </tr>
                <tr>
                    <td>68</td>
                    <td>[Nursense] 메인 홍보 배너</td>
                    <td>
                        <img src="{{ asset('assets/img/banner-img.png') }}">
                    </td>
                    <td>노출</td>
                    <td>3</td>
                    <td>2023.01.23</td>
                </tr>
                <tr>
                    <td>67</td>
                    <td>[Nursense] 메인 홍보 배너</td>
                    <td>
                        <img src="{{ asset('assets/img/banner-img.png') }}">
                    </td>
                    <td>노출</td>
                    <td>4</td>
                    <td>2023.01.23</td>
                </tr>
            </tbody>
        </table>

    </div>

    <div class="item-flex-end">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link pgln-custom pagination_link_arrows pagination_link_arrows_disabled" href="#" aria-label="Previous">
                        <span aria-hidden="true">&lt;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d pagination_link_active" href="">1</a></li>
                <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d" href="#">2</a></li>
                <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d" href="#">3</a></li>
                <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d" href="#">4</a></li>
                <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d" href="#">5</a></li>
                <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d" href="#">6</a></li>
                <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d" href="#">7</a></li>
                <li class="page-item">
                    <a class="page-link pgln-custom pagination_link_arrows" href="#" aria-label="Next">
                        <span aria-hidden="true">&gt;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</div>
<!-- Instructor Account Management End -->
@endsection