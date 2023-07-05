@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
    <div class="row">

        <div class="col-lg-2">
            @include('includes.sidenav-info')
        </div>

        <div class="col-lg-10" style="padding: 1%;">

            <section class="img-sec-top text-center comp-height-120 py44 pl0 pr0" style="background-image: linear-gradient(to right, #212880 , #4A227B);">
                <div class="pl30">
                    <div class="content-box">
                        <div class="title">
                            <h2 class="text-left text-white mb0">수강생 관리</h2>
                        </div>
                    </div>
                </div>
            </section>

            <nav aria-label="breadcrumb" class="">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="{{ url('mymanage') }}">마이페이지</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="{{ url('mymanage') }}">수강생 관리</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">수강생 상세정보</li>
                </ol>
            </nav>

            <div class="row mt-4 mb-5">

                <div class="col-lg-3">

                    <!-- 1 -->
                    <div class="pt-4">

                        <div class="item-flex-center relative-block profile-img-outer">
                            <img src="/images/face.png" alt="dp">
                            <div class="edit_dp_i">
                                <a href="myprofile-dp-upload.php"><img src="/images/dp_icon.png" class=""></a>
                            </div>
                        </div>
                        <div class="pt15 pb10 text-center">
                            <span class="ttl-14">{{ $student->name }}</span>
                        </div>
                        <div class="ttl-15 item-flex-center">
                            <span>ID</span>
                            <span class="mx-2">&#x2022;</span>
                            <span>{{ $student->std_id }}</span>
                        </div>

                    </div>
                    <!-- 1 -->

                </div>

                <div class="col-lg-9">

                    <div class="row">
                        <div class="col-12 pl-0 py-4">
                            <h4 class="ttl-5 relative-block title-border-t">기본 정보</h4>
                        </div>
                    </div>
                    <div class="row mr-5 mb-4">
                        <div class="col-lg-12 bg-color-2 border-rad-10">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="ttl-3 pt-3 mb-1">학교</label>
                                    <p class="ttl-12 ">{{ $student->uni_id }}</p>
                                </div>
                                <div class="col-lg-6">
                                    <label class="ttl-3 pt-3 mb-1">학과</label>
                                    <p class="ttl-12 ">{{ $student->dep_id }}</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-b-cus2"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="ttl-3 pt-3 mb-1">학년</label>
                                    <p class="ttl-12 ">{{ $student->grade }}</p>
                                </div>
                                <div class="col-lg-6">
                                    <label class="ttl-3 pt-3 mb-1">학번</label>
                                    <p class="ttl-12 ">{{ $student->std_id }}</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-b-cus2"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="ttl-3 pt-3 mb-1">휴대폰 번호</label>
                                    <p class="ttl-12 ">{{ $student->pno }}</p>
                                </div>
                                <div class="col-lg-6">
                                    <label class="ttl-3 pt-3 mb-1">이메일</label>
                                    <p class="ttl-12 ">{{ $student->email }}</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-b-cus2"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="ttl-3 pt-3 mb-1">직종</label>
                                    <p class="ttl-12 ">{{ $student->std_id }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-5">
                        <div class="col-12 pl-0">
                            <h4 class="ttl-5 relative-block title-border-t">학습 진행도</h4>
                        </div>
                    </div>
                    <div class="row mr-5 mb-2">
                        <div class="table-responsive mt-4 pl-0">

                            <table class="table align-middle table-hover">
                                <thead class="thead-light text-center">
                                    <tr class="table-head-1">
                                        <th scope="col" class="table-th-text width-5">번호</th>
                                        <th scope="col" class="table-th-text width-25">학습명</th>
                                        <th scope="col" class="table-th-text width-30">진행도</th>
                                        <th scope="col" class="table-th-text width-10">최근 학습일</th>
                                        <th scope="col" class="table-th-text width-10">평가 점수</th>
                                        <th scope="col" class="table-th-text width-20"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($student->mainStudies as $study)
                                    <tr>
                                        <td>{{ $study->id }}</td>
                                        <td>{{ $study->mainStudy->name }}</td>
                                        <td>
                                            <div class="item-flex-center">
                                                <div class="width-70">
                                                    <div class="item-flex-left">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="width-30">
                                                    <div class="item-flex-right">
                                                        <span class="progress-txt-blue ml-2">학습 완료</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $study->mainStudy->updated_at }}</td>
                                        <td>{{ ($study->userFinal ? $study->userFinal->total_points : 0) + ($study->userReport ? $study->userReport->grade : 0) }}점/{{ $study->mainStudy->report->grade + $study->mainStudy->final->total_points }}점</td>
                                        <td>
                                            <div class="height-52 item-flex-center">
                                                <!-- If Active -->
                                                <a href="#" class="btn btn-6">
                                                    자료실 등록
                                                </a>
                                                <!-- If Deactive -->
                                                <a href="#" class="btn btn-3 d-none">
                                                    자료실 등록
                                                </a>
                                                <!-- If Pass -->
                                                <a href="#" class="btn btn-5 d-none">
                                                    자료실 등록
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    {{-- <tr>
                                        <td>4</td>
                                        <td>본 학습 1. 노인 당뇨 - 리포트</td>
                                        <td>
                                            <div class="item-flex-center">
                                                <span class="progress-txt-blue ml-2">pass <i class="fas fa-check ml-1"></i></span>
                                            </div>
                                        </td>
                                        <td>2023.01.31</td>
                                        <td>10점/10점</td>
                                        <td>
                                            <div class="height-52 item-flex-center">
                                                <!-- If Active -->
                                                <a href="#" class="btn btn-6 d-none">
                                                    자료실 등록
                                                </a>
                                                <!-- If Deactive -->
                                                <a href="#" class="btn btn-3 d-none">
                                                    자료실 등록
                                                </a>
                                                <!-- If Pass -->
                                                <a href="#" class="btn btn-5">
                                                    자료실 등록
                                                </a>
                                            </div>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <div class="row pt-5">
                        <div class="col-12 pl-0">
                            <h4 class="ttl-5 relative-block title-border-t">총 평가 점수</h4>
                        </div>
                    </div>
                    <div class="row mr-5 mb-2">
                        <div class="table-responsive mt-4 pl-0">

                            <table class="table align-middle table-hover">
                                <thead class="thead-light text-center">
                                    <tr class="table-head-1">
                                        <th scope="col" class="table-th-text">사전 학습</th>
                                        <th scope="col" class="table-th-text">본 학습</th>
                                        <th scope="col" class="table-th-text">리포트</th>
                                        <th scope="col" class="table-th-text">총 평가 점수</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>
                                            <p class="tr-txt6 mb-0">
                                                <span class="tr-txt7">26</span> /30점
                                            </p>
                                        </td>
                                        <td>
                                            <p class="tr-txt6 mb-0">
                                                <span class="tr-txt7">52</span> /60점
                                            </p>
                                        </td>
                                        <td>
                                            <p class="tr-txt6 mb-0">
                                                <span class="tr-txt7">10</span> /10점
                                            </p>
                                        </td>
                                        <td>
                                            <p class="tr-txt8 mb-0">
                                                <span class="tr-txt9">88</span> /100점
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>
</section>
@endsection