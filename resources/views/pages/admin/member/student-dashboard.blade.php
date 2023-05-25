@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">학생 계정 관리</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">회원 관리</li>
            <!-- <li class="breadcrumb-item breadcrumb-text1"><a href="{{ url('dashBoard') }}">Dashboard</a></li> -->
            <!-- <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li> -->
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">학생 계정 관리</li>
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
                    <select class="form-select form-text-d" name="university" id="university" aria-label="University Selection">
                        <option value="1" selected>전체 학교</option>
                        <option value="2">경북대학교</option>
                        <option value="3">대구대학교</option>
                        <option value="4">부산대학교</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <select class="form-select form-text-d" name="major" id="major" aria-label="Select Major">
                        <option value="1" selected>전체 학과</option>
                        <option value="2">간호학과</option>
                        <option value="3">물리치료학과</option>
                        <option value="4">방사선학과</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <select class="form-select form-text-d" name="criteria" id="criteria" aria-label="Alignment Criteria">
                        <option value="1" selected>이름 순</option>
                        <option value="2">최근 등록 순</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <input type="date" class="form-control form-text-l" name="reg-date" id="regDate" aria-describedby="Account Reg Date">
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <span class="position-rel"><i class="fas fa-search view-search-i" area-hidden="true"></i></span>
                    <input type="text" class="form-control form-text-l search-bar-custom" name="search1" id="search1" placeholder="이름, 아이디를 입력하세요." aria-label="Search">
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <a href="#" class="btn btn-secondary btn1">
                        검색
                    </a>
                </div>
            </div>
            <div class="row mb-4">

                <div class="col-xl-8 col-lg-8 col-md-6 d-sm-none d-md-block list-count-outer">
                    <span class="position-rel list-count">
                        Total
                        <span class="b-right"></span>
                    </span>
                    <span class="list-count-num">
                        70
                    </span>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                    <a href="#" class="btn btn-secondary btn2">
                        임시 계정 발송
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                    <a href="{{ route('stuAccData') }}" class="btn btn-secondary btn3">
                        학생 등록
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
                    <th scope="col">
                        <span><input type="checkbox" name="" id="" class="form-check-input" aria-label="CheckboxTh"></span>
                    </th>
                    <th scope="col" class="table-th-text">번호</th>
                    <th scope="col" class="table-th-text">이름</th>
                    <th scope="col" class="table-th-text">아이디</th>
                    <th scope="col" class="table-th-text">활동 상태</th>
                    <th scope="col" class="table-th-text">학교</th>
                    <th scope="col" class="table-th-text">학과</th>
                    <th scope="col" class="table-th-text">휴대폰 번호</th>
                    <th scope="col" class="table-th-text">이메일</th>
                    <th scope="col" class="table-th-text">계정 등록일</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td scope="row">
                        <span><input type="checkbox" name="" id="" class="form-check-input" aria-label=""></span>
                    </td>
                    <td>70</td>
                    <td>김지연</td>
                    <td>rlawldus11</td>
                    <td>학습 가능</td>
                    <td>경북대학교</td>
                    <td>간호학과</td>
                    <td>01012345678</td>
                    <td>kimjiyeon@naver.com</td>
                    <td>2023.01.23</td>
                </tr>
                <tr>
                    <td scope="row">
                        <span><input type="checkbox" name="" id="" class="form-check-input" aria-label=""></span>
                    </td>
                    <td>72</td>
                    <td>김지연</td>
                    <td>rlawldus11</td>
                    <td>학습 가능</td>
                    <td>경북대학교</td>
                    <td>간호학과</td>
                    <td>01012345678</td>
                    <td>kimjiyeon@naver.com</td>
                    <td>2023.01.23</td>
                </tr>
                <tr>
                    <td scope="row">
                        <span><input type="checkbox" name="" id="" class="form-check-input" aria-label=""></span>
                    </td>
                    <td>73</td>
                    <td>김지연</td>
                    <td>rlawldus11</td>
                    <td>학습 가능</td>
                    <td>경북대학교</td>
                    <td>간호학과</td>
                    <td>01012345678</td>
                    <td>kimjiyeon@naver.com</td>
                    <td>2023.01.23</td>
                </tr>
                <tr>
                    <td scope="row">
                        <span><input type="checkbox" name="" id="" class="form-check-input" aria-label=""></span>
                    </td>
                    <td>74</td>
                    <td>김지연</td>
                    <td>rlawldus11</td>
                    <td>학습 가능</td>
                    <td>경북대학교</td>
                    <td>간호학과</td>
                    <td>01012345678</td>
                    <td>kimjiyeon@naver.com</td>
                    <td>2023.01.23</td>
                </tr>
                <tr>
                    <td scope="row">
                        <span><input type="checkbox" name="" id="" class="form-check-input" aria-label=""></span>
                    </td>
                    <td>75</td>
                    <td>김지연</td>
                    <td>rlawldus11</td>
                    <td>학습 가능</td>
                    <td>경북대학교</td>
                    <td>간호학과</td>
                    <td>01012345678</td>
                    <td>kimjiyeon@naver.com</td>
                    <td>2023.01.23</td>
                </tr>
                <tr>
                    <td scope="row">
                        <span><input type="checkbox" name="" id="" class="form-check-input" aria-label=""></span>
                    </td>
                    <td>76</td>
                    <td>김지연</td>
                    <td>rlawldus11</td>
                    <td>학습 가능</td>
                    <td>경북대학교</td>
                    <td>간호학과</td>
                    <td>01012345678</td>
                    <td>kimjiyeon@naver.com</td>
                    <td>2023.01.23</td>
                </tr>
                <tr>
                    <td scope="row">
                        <span><input type="checkbox" name="" id="" class="form-check-input" aria-label=""></span>
                    </td>
                    <td>77</td>
                    <td>김지연</td>
                    <td>rlawldus11</td>
                    <td>학습 가능</td>
                    <td>경북대학교</td>
                    <td>간호학과</td>
                    <td>01012345678</td>
                    <td>kimjiyeon@naver.com</td>
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