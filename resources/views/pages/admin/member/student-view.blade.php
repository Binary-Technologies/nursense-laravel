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
            <li class="breadcrumb-item breadcrumb-text1">학생 계정 관리</li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">학생 계정 상세</li>
        </ol>
    </nav>
</div>

<!-- Student Account Management Start -->
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
                            <a href="{{ route('stuAccDataEdit') }}" class="btn btn-secondary btn5">
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
                                <label class="ttl-lbl1 pt-3 mb-1">학년</label>
                                <p class="ttl-p1">3학년</p>
                            </div>
                            <div class="col-xl-6">
                                <label class="ttl-lbl1 pt-3 mb-1">학번</label>
                                <p class="ttl-p1">12345678</p>
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
                        <h4 class="ttl-acc-blue position-rel title-border-t">학습 내역</h4>
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
                <div class="table-responsive">

                    <table class="table align-middle table-hover mb-0">
                        <thead class="thead-light text-center">
                            <tr class="table-head-1">
                                <th scope="col" class="table-th-text">교육 과정</th>
                                <th scope="col" class="table-th-text">분류</th>
                                <th scope="col" class="table-th-text">학습명</th>
                                <th scope="col" class="table-th-text">시작일</th>
                                <th scope="col" class="table-th-text">종료일</th>
                                <th scope="col" class="table-th-text">완료 여부</th>
                                <th scope="col" class="table-th-text">평가 점수</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>당뇨</td>
                                <td>사전 학습</td>
                                <td>학습 1. 노인 당뇨 기본</td>
                                <td>2023.02.11</td>
                                <td>2023.02.28</td>
                                <td class="tr-txt1">평가 완료</td>
                                <td>100점/100점</td>
                            </tr>
                            <tr>
                                <td>당뇨</td>
                                <td>사전 학습</td>
                                <td>학습 1. 노인 당뇨 기본</td>
                                <td>2023.02.11</td>
                                <td>2023.02.28</td>
                                <td class="tr-txt1">평가 완료</td>
                                <td>100점/100점</td>
                            </tr>
                            <tr>
                                <td>당뇨</td>
                                <td>사전 학습</td>
                                <td>학습 1. 노인 당뇨 기본</td>
                                <td>2023.02.11</td>
                                <td>2023.02.28</td>
                                <td class="tr-txt2">평가 완료</td>
                                <td>100점/100점</td>
                            </tr>
                            <tr>
                                <td>당뇨</td>
                                <td>사전 학습</td>
                                <td>학습 1. 노인 당뇨 기본</td>
                                <td>2023.02.11</td>
                                <td>2023.02.28</td>
                                <td class="tr-txt1">평가 완료</td>
                                <td>100점/100점</td>
                            </tr>
                            <tr class="table-active">
                                <td colspan="6"></td>
                                <td class="position-rel">
                                    <span class="tr-txt3">평가 점수 총점</span><br>
                                    <p class="tr-txt4 mb-0">
                                        <span class="tr-txt5">230점</span> /400점
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <!-- 2nd Table -->
                <div class="row pt-5">
                    <div class="col-xl-12 pl-0 pb-4">
                        <h4 class="ttl-acc-blue position-rel title-border-t">총 평가 점수</h4>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <select class="form-select form-text-d" name="semester2" id="semester2" aria-label="Semester Selection 2">
                            <option value="1" selected>2023년도 1학기</option>
                            <option value="2">2022년 2학기</option>
                            <option value="3">2022년 1학기</option>
                            <option value="4">2021년 2학기</option>
                        </select>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <select class="form-select form-text-d" name="majorSl2" id="majorSl2" aria-label="Select Major 2">
                            <option value="1" selected>당뇨 - 간호학과</option>
                            <option value="2">욕창 - 간호학과</option>
                        </select>
                    </div>
                </div>

                <div class="table-responsive mt-4 mb-3">

                    <table class="table align-middle table-hover">
                        <thead class="thead-light text-center">
                            <tr class="table-head-1">
                                <th scope="col" class="table-th-text">사전 학습</th>
                                <th scope="col" class="table-th-text">본 학습</th>
                                <th scope="col" class="table-th-text">리포트</th>
                                <th scope="col" class="table-th-text">총 평가 점수</th>
                                <th scope="col" class="table-th-text">수료 여부</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>
                                    <p class="tr-txt6 mb-0">
                                        <span class="tr-txt7">25</span> /30점
                                    </p>
                                </td>
                                <td>
                                    <p class="tr-txt6 mb-0">
                                        <span class="tr-txt7">25</span> /30점
                                    </p>
                                </td>
                                <td>
                                    <p class="tr-txt6 mb-0">
                                        <span class="tr-txt7">25</span> /30점
                                    </p>
                                </td>
                                <td>
                                    <p class="tr-txt8 mb-0">
                                        <span class="tr-txt9">25</span> /30점
                                    </p>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-secondary btn6">
                                        수료
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- Student Account Management End -->

@endsection