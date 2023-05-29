@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">교수자 계정 관리</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/instructorDash') }}">회원 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/instructorDash') }}">교수자 계정 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">교수자 계정 상세</li>
        </ol>
    </nav>
</div>

<!-- Instructor Account Management Start -->
<div class="container-fluid px-0">
    <div class="rounded pt-4">
        <div class="row my-5">

            <div class="col-xl-3">

                <!-- 1 -->
                <div class="pt-4">

                    <div class="item-flex-center position-rel profile-img-outer">
                        <img src="{{ asset('assets/img/face.png')}}" alt="dp">
                        <!-- <div class="edit_dp_i">
                            <a href=""><img src="{{ asset('assets/img/dp_icon.png') }}" class=""></a>
                        </div> -->
                    </div>
                    <div class="pt15 pb10 text-center">
                        <span class="ttl-dp">홍길동</span>
                    </div>
                    <div class="ttl-dp2 item-flex-center pb15">
                        <span>ID</span>
                        <span class="mx-2">&#x2022;</span>
                        <span>abc123490</span>
                    </div>
                    <div class="item-flex-center">
                        <a href="#" class="btn btn-secondary btn4">
                            탈퇴
                        </a>
                    </div>

                </div>
                <!-- 1 -->

            </div>

            <div class="col-xl-9">

                <div class="row">
                    <div class="col-xl-9 pl-0 py-4">
                        <h4 class="ttl-acc-blue position-rel title-border-t">기본 정보</h4>
                    </div>
                    <div class="col-xl-3 item-flex-center pl-0 py-4">
                        <div class="btn5-outer">
                            <a href="{{ route('insAccDataEdit') }}" class="btn btn5">
                                수정
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mr-5">
                    <div class="col-xl-12 bg-color-2 border-rad-10">
                        <div class="row">
                            <div class="col-xl-6">
                                <label class="ttl-lbl1 pt-3 mb-1">학교</label>
                                <p class="ttl-p1">경북대학교</p>
                            </div>
                            <div class="col-xl-6">
                                <label class="ttl-lbl1 pt-3 mb-1">학과</label>
                                <p class="ttl-p1">간호학과</p>
                            </div>
                            <div class="col-xl-12">
                                <div class="border-b-cus2"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <label class="ttl-lbl1 pt-3 mb-1">휴대폰 번호</label>
                                <p class="ttl-p1">01012345678</p>
                            </div>
                            <div class="col-xl-6">
                                <label class="ttl-lbl1 pt-3 mb-1">이메일</label>
                                <p class="ttl-p1">abc@naver.com</p>
                            </div>
                            <div class="col-xl-12">
                                <div class="border-b-cus2"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <label class="ttl-lbl1 pt-3 mb-1">직종</label>
                                <p class="ttl-p1">간호사</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col-xl-12 pl-0 pb-4">
                        <h4 class="ttl-acc-blue position-rel title-border-t">계정 정보</h4>
                    </div>
                </div>
                <div class="row mr-5">

                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12 pl-0">
                                <label class="ttl-lbl2 mb-2">아이디</label>
                            </div>
                            <div class="col-xl-11 bg-color-2 border-rad-10">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <p class="ttl-p1 pt-3">Abc123490</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12 pl-0">
                                <label class="ttl-lbl2 mb-2">비밀번호</label>
                            </div>
                            <div class="col-xl-12 bg-color-2 border-rad-10">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <p class="ttl-p1 pt-3">&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-3 mr-5">
                    <div class="col-xl-12 bg-color-2 border-rad-10">
                        <div class="row">
                            <div class="col-xl-6">
                                <label class="ttl-lbl1 pt-3 mb-1">활동 상태</label>
                                <p class="ttl-p1">학습 가능</p>
                            </div>
                            <div class="col-xl-6">
                                <label class="ttl-lbl1 pt-3 mb-1">계정 등록일</label>
                                <p class="ttl-p1">2023.01.23</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col-xl-12 pl-0 pb-4">
                        <h4 class="ttl-acc-blue position-rel title-border-t">수강생 정보</h4>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <select class="form-select form-text-d" name="semester" id="semester" aria-label="Semester Selection">
                            <option value="1" selected>2023년도 1학기</option>
                            <option value="2">2022년 2학기</option>
                            <option value="3">2022년 1학기</option>
                            <option value="4">2021년 2학기</option>
                        </select>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <select class="form-select form-text-d" name="majorSl" id="majorSl" aria-label="Select Major">
                            <option value="1" selected>당뇨 - 간호학과</option>
                            <option value="2">욕창 - 간호학과</option>
                        </select>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 py-2">
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 py-2">
                        <span class="position-rel pe-2"><input type="checkbox" name="" id="" class="form-check-input" aria-label=""></span>
                        <span class="form-text-d">수료 수강생만 보기</span>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <select class="form-select form-text-d" name="alignmentCrt" id="alignmentCrt" aria-label="Select Alignment Criteria">
                            <option value="1" selected>이름 순</option>
                            <option value="2">이름 순</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xl-8 col-lg-8 col-md-6 list-count-outer">
                        <span class="position-rel list-count">
                            Total
                            <span class="b-right"></span>
                        </span>
                        <span class="list-count-num">
                            70
                        </span>
                    </div>
                </div>



                <div class="table-responsive mb-3">

                    <table class="table align-middle table-hover">
                        <thead class="thead-light text-center">
                            <tr class="table-head-1">
                                <th scope="col" class="table-th-text">이름</th>
                                <th scope="col" class="table-th-text">성별</th>
                                <th scope="col" class="table-th-text">학과학과</th>
                                <th scope="col" class="table-th-text">학년/학번</th>
                                <th scope="col" class="table-th-text">사전 학습 평가</th>
                                <th scope="col" class="table-th-text">본 학습 평가</th>
                                <th scope="col" class="table-th-text">리포트</th>
                                <th scope="col" class="table-th-text">총점(100점)</th>
                                <th scope="col" class="table-th-text">수료 여부</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>오하윤</td>
                                <td>여</td>
                                <td>간호학과</td>
                                <td>3학년/2019123456</td>
                                <td>30점/40점</td>
                                <td>40점/50점</td>
                                <td>10점/10점10점/10점</td>
                                <td class="tr-txt1">80점</td>
                                <td class="tr-txt1">수료</td>
                            </tr>
                            <tr>
                                <td>김지훈</td>
                                <td>남</td>
                                <td>간호학과</td>
                                <td>3학년/2019123457</td>
                                <td>30점/40점</td>
                                <td>70점/50점</td>
                                <td>10점/10점10점/10점</td>
                                <td class="tr-txt1">-</td>
                                <td class="tr-txt1">수료</td>
                            </tr>
                            <tr>
                                <td>오하윤</td>
                                <td>여</td>
                                <td>간호학과</td>
                                <td>3학년/2019123458</td>
                                <td>30점/40점</td>
                                <td>50점/50점</td>
                                <td>10점/10점10점/10점</td>
                                <td class="tr-txt1">80점</td>
                                <td class="tr-txt1">-</td>
                            </tr>
                            <tr>
                                <td>김지훈</td>
                                <td>남</td>
                                <td>간호학과</td>
                                <td>4학년/2019123455</td>
                                <td>30점/40점</td>
                                <td>40점/50점</td>
                                <td>10점/10점10점/10점</td>
                                <td class="tr-txt1">80점</td>
                                <td class="tr-txt1">수료</td>
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

        </div>
    </div>
</div>
<!-- Instructor Account Management End -->

@endsection