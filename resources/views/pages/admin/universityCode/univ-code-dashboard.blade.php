@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">학교 코드 관리</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">
                학교 코드 관리
            </li>
        </ol>
    </nav>
</div>

<!-- University Code Management Start -->
<div class="container-fluid px-0">

    <div class="rounded pt-4">

        <form method="post" id="university-code-filter-form" action="#">

            <!-- Table Section -->
            <div class="row mb-4">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <span class="position-rel"><i class="fas fa-search view-search-i" area-hidden="true"></i></span>
                    <input type="text" class="form-control form-text-l search-bar-custom" name="search-univ-code" id="searchUnivCode" placeholder=" 학교, 코드명을 입력하세요." aria-label="Search">
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
                    <a href="{{ route('univCodeReg') }}" class="btn btn-secondary btn3">
                        학교 코드 등록
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
                    <th scope="col" class="table-th-text">학교</th>
                    <th scope="col" class="table-th-text">코드명</th>
                    <th scope="col" class="table-th-text">학과</th>
                    <th scope="col" class="table-th-text">최종 저장일</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>70</td>
                    <td><a href="{{ route('univCodeDetails') }}" class="td-a-custom">한국대학교</a></td>
                    <td>BDJK098</td>
                    <td>간호학과</td>
                    <td>2023.01.31</td>
                </tr>
                <tr>
                    <td>69</td>
                    <td><a href="{{ route('univCodeDetails') }}" class="td-a-custom">경북대학교</a></td>
                    <td>BDAJ102</td>
                    <td>간호학과, 물리치료학과, 방사선학과,보건관리학과, 응급구조학과, 임상병리학과, 응급구조학과, 의료장비과 …</td>
                    <td>2023.01.30</td>
                </tr>
                <tr>
                    <td>68</td>
                    <td><a href="{{ route('univCodeDetails') }}" class="td-a-custom">한국대학교</a></td>
                    <td>BDJK098</td>
                    <td>간호학과</td>
                    <td>2023.01.31</td>
                </tr>
                <tr>
                    <td>67</td>
                    <td><a href="{{ route('univCodeDetails') }}" class="td-a-custom">한국대학교</a></td>
                    <td>BDJK098</td>
                    <td>간호학과</td>
                    <td>2023.01.31</td>
                </tr>
                <tr>
                    <td>66</td>
                    <td><a href="{{ route('univCodeDetails') }}" class="td-a-custom">한국대학교</a></td>
                    <td>BDJK098</td>
                    <td>간호학과</td>
                    <td>2023.01.31</td>
                </tr>
            </tbody>
        </table>

    </div>

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

<!-- Confirmation Alert Modal -->
<div class="modal fade" id="confirmationModal" aria-hidden="true" aria-labelledby="confirmationModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="confirmationModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <h5 class="alert-title text-center mt-1 mb-4">임시 계정 발송</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    선택한 회원에게 임시 계정 발송을<br>
                    진행하시겠습니까?
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                    </div>
                    <div class="mx-1">
                        <button class="btn btn-alert2" data-bs-target="#completionModal" data-bs-toggle="modal">발송</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Confirmation Alert Modal -->
<!-- Completion Alert Modal -->
<div class="modal fade" id="completionModal" aria-hidden="true" aria-labelledby="completionModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="completionModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    임시 계정 발송을 완료하였습니다.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert3" data-bs-target="#" data-bs-toggle="modal">확인</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Completion Alert Modal -->

</div>
<!-- University Code Management End -->

@endsection