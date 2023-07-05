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
                            <h2 class="text-left text-white">나의 학습 내역</h2>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row mt-4">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <form class="form-inline justify-content-end mx-3 my-2 my-lg-0">
                        <span>교육 과정</span>
                        <select class="form-select search-bar-custom ml-2" style="width: 150px;">
                            @foreach ($user->curricula as $curriculum)
                            <option value="{{ $curriculum->id }}">{{ $curriculum->name }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 py-4">
                    <h4 class="ttl-14">당뇨</h4>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-2">
                    <div class="pt-4">
                        <h4 class="ttl-5 relative-block title-border-t">기본 정보</h4>
                    </div>
                    <div class="pt-3">
                        <span class="ttl-15 mr-3">시작일</span>
                        <span class="ttl-12">
                            {{ $study->mainStudy->created_at }}
                        </span>
                    </div>
                    <div>
                        <span class="ttl-15 mr-3">종료일</span>
                        <span class="ttl-12">
                            {{ $study->mainStudy->end_date }}
                        </span>
                    </div>
                    <div>
                        <span class="ttl-15 mr-3">설문여부</span>
                        <span class="ttl-12">
                            {{ $study->userSurvey ? '완료' : '미완료' }}
                        </span>
                    </div>
                </div>
                <!-- card -->
                <div class="col-lg-5">
                    <div class="shadow border-rad-5 py-3 px-4 mb-3">
                        <div class="row">
                            <div class="col-md-7 border-rad-5 mb-3 px-2">
                                <div class="row">
                                    <div class="col-md-12 item-flex-left position-rel curr-in-box pt-4 pb-2">
                                        <div class="ttl-2" style="width: 150px;">
                                            총 진도율
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 position-rel">
                                        <span class="ttl-3 pr-4">최근 학습</span>
                                        <br />
                                        <span class="ttl-3" style="color: #212880;">챕터 4 .</span>
                                        <span class="ttl-3" style="color: #212880;">{{ $study->mainStudy->curriculum->name }}</span>
                                        <div class="mt-2">
                                            <span class="desc-1" style="color: #0062cc;">{{ $study->mainStudy->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pie_progress col-md-5" style="margin-top: 20px;" role="progressbar" data-goal="70" data-barcolor="#7479BD" data-barsize="15" aria-valuemin="0" aria-valuemax="100">
                                <div class="pie_progress__number" style="margin-top: 15px;">0%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="col-lg-5">
                    <div class="shadow border-rad-5 py-4 px-4 mb-3">
                        <div class="row">
                            <div class="col-md-7 border-rad-5 mb-3 px-2">
                                <div class="row">
                                    <div class="col-md-12  position-rel curr-in-box pt-2 pb-2">
                                        <div class="ttl-2" style="width: 150px;">
                                            평가 점수
                                        </div>
                                        <span class="ttl-3" style="color: #9495A1; font-size: 11px;">전체 문항 수</span>
                                        <span class="ttl-3" style="color: #090909; font-size: 11px;">
                                            {{ $study->mainStudy->final ? count($study->mainStudy->final->questions) : '-' }}개
                                        </span>
                                        <br />
                                        <span class="ttl-3" style="color: #9495A1; font-size: 11px;">정답 문항 수</span>
                                        <span class="ttl-3" style="color: #090909; font-size: 11px;">{{ $correct }}개일</span>
                                        <br />
                                        <span class="ttl-3" style="color: #9495A1; font-size: 11px;">오답 문항 수</span>
                                        <span class="ttl-3" style="color: #FF625F; font-size: 11px;">{{ $incorrect }}개</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5" style="margin-top: 100px;">
                                <div style="font-size: 24px; color: #7479BD; margin-left: 50px;"><b>72점</b></div>
                            </div>
                        </div>

                        <div class="progress" style=" height: 8px;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width:72%; background-color: #7479BD;">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- card -->
            </div>

            <div class="row mb-4" style="font-size: 14px;">
                <div class="col-lg-12 border-rad-5 mt-2 px-4">
                    <table style="width: 100%;">
                        <tr class="text-center" style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                            <th style="width: 10%; padding: 10px;">번호</th>
                            <th style="width: 45%">학습명</th>
                            <th style="width: 10%">시작일</th>
                            <th style="width: 10%">종료일</th>
                            <th style="width: 15%">평가 완료 여부</th>
                            <th style="width: 10%">평가 점수</th>
                        </tr>
                        <?php $totalScore = 0; $totalUserScore = 0; ?>
                        @foreach ($preLearnings as $preLearning)
                        <tr class="text-center" style="border-bottom: #ccc solid thin;">
                            <td style="width: 10%; padding: 10px;">{{ $preLearning->id }}</td>
                            <td style="width: 45%">{{ $preLearning->name }}</td>
                            <td style="width: 10%">{{ $preLearning->register_date }}</td>
                            <td style="width: 10%">{{ $preLearning->deadline_date }}</td>
                            <td style="width: 15%">{{ $preLearning->completeDate == '-' ? '' : '완료' }}</td>
                            <td style="width: 10%">{{ $preLearning->userScore }}점/{{ $preLearning->score }}점</td>
                        </tr>
                        <?php $totalScore += $preLearning->score; $totalUserScore += $preLearning->userScore; ?>
                        @endforeach
                        <tr style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                            <td colspan="5"></td>
                            <td class="pr-3">
                                <p class="tr-txt10 text-right mt-2 mb-0 mr-4">평가 점수 총점</p>
                                <p class="tr-txt3 text-right mb-2 mr-4">
                                    <span class="tr-txt5">{{ $totalUserScore }}</span> /{{ $totalScore }}점
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row mb-4" style="font-size: 14px;">
                <div class="col-lg-12 border-rad-5 mt-2 px-4">
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
                                            <span class="tr-txt7">{{ $totalUserScore }}</span> /{{ $totalScore }}점
                                        </p>
                                    </td>
                                    <td>
                                        <p class="tr-txt6 mb-0">
                                            <span class="tr-txt7">{{ $study->userFinalScore }}</span> /{{ $study->finalScore }}점
                                        </p>
                                    </td>
                                    <td>
                                        <p class="tr-txt6 mb-0">
                                            <span class="tr-txt7">{{ $study->userReportScore }}</span> /{{ $study->reportScore }}점
                                        </p>
                                    </td>
                                    <td>
                                        <p class="tr-txt8 mb-0">
                                            <span class="tr-txt9">{{ $totalUserScore + $study->userFinalScore + $study->userReportScore }}</span> /{{ $totalScore + $study->finalScore + $study->userReportScore }}점
                                        </p>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-6">
                                            수료
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="ttl-3">
                            *총 평가 점수가 80점 이상일 경우 수료증 발급이 가능합니다.
                        </div>
                    </div>
                </div>
                <div class="item-flex-right">
                    <div class="mr-4">
                        <div class="ttl-15 text-right">
                            <span><i class="far fa-question-circle mr-1"></i>수료증이란?</span>
                        </div>
                        <div class="mt-1">
                            <!-- If Deactive -->
                            <button class="btn btn-3" type="submit">수료증 발급하기</button>
                            <!-- If Active -->
                            <button class="btn btn-2 d-none" type="submit">수료증 발급하기</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For display modal -->
            <button class="btn btn-2" data-bs-target="#certificateDownloadModal" data-bs-toggle="modal">Sample Testing Button for Display Certificate Download Modal</button>
            <!-- For display modal -->

        </div>


        <!-- Certificate Download Modal -->
        <div class="modal fade" id="certificateDownloadModal" aria-hidden="true" aria-labelledby="certificateDownloadModalContent" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header mt-3 mb-1">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                        <div class="row py-4">
                            <div class="col-9">
                                <div class="item-flex-center">
                                    <img src="{{asset('images/certificate.png')}}" class="width-80" alt="Certificate">
                                </div>
                            </div>
                            <div class="col-3 position-rel">
                                <div class="btn-abs-certi">
                                    <div class="item-flex-center">
                                        <div>
                                            <a href="#" class="btn btn-2 mb-3">다운로드</a>
                                            <a href="#" class="btn btn-5-2">인쇄</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Certificate Download Modal -->

    </div>
</section>
@endsection