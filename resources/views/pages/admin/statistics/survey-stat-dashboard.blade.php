@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">설문 통계</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/surveyStatDash') }}">통계 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">설문 통계</li>
        </ol>
    </nav>
</div>

<!-- Statistics Survey Management Start -->
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
                    <span class="position-rel"><i class="fas fa-search view-search-i" area-hidden="true"></i></span>
                    <input type="text" class="form-control form-text-l search-bar-custom" name="search1" id="search1" placeholder="학습명, 교수명을 입력하세요." aria-label="Search">
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

            </div>

        </form>

    </div>

    <div class="table-responsive mb-3">

        <table class="table align-middle table-hover">
            <thead class="thead-light text-center">
                <tr class="table-head-1">
                    <th scope="col" class="table-th-text">번호</th>
                    <th scope="col" class="table-th-text width-40">학습명</th>
                    <th scope="col" class="table-th-text">세부학습명</th>
                    <th scope="col" class="table-th-text">학교</th>
                    <th scope="col" class="table-th-text">학과</th>
                    <th scope="col" class="table-th-text">교 명</th>
                    <th scope="col" class="table-th-text">참여 수</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>70</td>
                    <td class="text-left width-40">
                        <a href="{{ route('surveyStatDetails') }}" class="td-a-custom">
                            당뇨
                        </a>
                    </td>
                    <td>학습 1</td>
                    <td>경북대학교</td>
                    <td>간호학과</td>
                    <td>오하윤</td>
                    <td>100명</td>
                </tr>
                <tr>
                    <td>69</td>
                    <td class="text-left width-40">
                        <a href="{{ route('surveyStatDetails') }}" class="td-a-custom">
                            당뇨
                        </a>
                    </td>
                    <td>학습 1</td>
                    <td>경북대학교</td>
                    <td>간호학과</td>
                    <td>오하윤</td>
                    <td>100명</td>
                </tr>
                <tr>
                    <td>68</td>
                    <td class="text-left width-40">
                        <a href="{{ route('surveyStatDetails') }}" class="td-a-custom">
                            당뇨
                        </a>
                    </td>
                    <td>학습 1</td>
                    <td>경북대학교</td>
                    <td>간호학과</td>
                    <td>오하윤</td>
                    <td>100명</td>
                </tr>
                <tr>
                    <td>67</td>
                    <td class="text-left width-40">
                        <a href="{{ route('surveyStatDetails') }}" class="td-a-custom">
                            당뇨당뇨당뇨당뇨당뇨당뇨당뇨당뇨
                        </a>
                    </td>
                    <td>학습 1</td>
                    <td>경북대학교</td>
                    <td>간호학과</td>
                    <td>오하윤</td>
                    <td>100명</td>
                </tr>
                <tr>
                    <td>66</td>
                    <td class="text-left width-40">
                        <a href="{{ route('surveyStatDetails') }}" class="td-a-custom">
                            당뇨당뇨당뇨당뇨당뇨당뇨당뇨당뇨당뇨당뇨당뇨당뇨당뇨당뇨당뇨당뇨당뇨당...
                        </a>
                    </td>
                    <td>학습 1</td>
                    <td>경북대학교</td>
                    <td>간호학과</td>
                    <td>오하윤</td>
                    <td>100명</td>
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
<!-- Statistics Survey Management End -->
@endsection