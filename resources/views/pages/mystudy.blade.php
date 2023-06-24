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

            <div class="row my-4">

                <div class="col-md-8">
                </div>
                <div class="col-md-4">
                    <form class="form-inline justify-content-end mx-3 my-2 my-lg-0">
                        <span>교육 과정</span>
                        <select class="form-select search-bar-custom ml-2" style="width: 150px;">
                            <option>전체</option>
                            <option>당뇨</option>
                            <option>당뇨당뇨</option>
                            <option>당뇨당뇨당뇨</option>
                        </select>
                    </form>
                </div>

            </div>
            <div class="row mb-4">
                <div class="col-lg-2">
                    <span class="ttl-3">본 학습</span>
                    <br />
                    <span class="ttl-3" style="color: #9495A1; font-size: 11px;">시작일</span>
                    <span class="ttl-3" style="color: #090909; font-size: 11px;">2023년 3월 1일</span>
                    <br />
                    <span class="ttl-3" style="color: #9495A1; font-size: 11px;">종료일</span>
                    <span class="ttl-3" style="color: #090909; font-size: 11px;">2023년 8월 31일</span>
                    <br />
                    <span class="ttl-3" style="color: #9495A1; font-size: 11px;">설문여부</span>
                    <span class="ttl-3" style="color: #090909; font-size: 11px;">미완료</span>
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
                                        <span class="ttl-3" style="color: #212880;">노인 당뇨</span>
                                        <div class="mt-2">
                                            <span class="desc-1" style="color: #0062cc;">2023년 8월 31일(목)</span>
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
                                        <span class="ttl-3" style="color: #090909; font-size: 11px;">20개</span>
                                        <br />
                                        <span class="ttl-3" style="color: #9495A1; font-size: 11px;">정답 문항 수</span>
                                        <span class="ttl-3" style="color: #090909; font-size: 11px;">16개일</span>
                                        <br />
                                        <span class="ttl-3" style="color: #9495A1; font-size: 11px;">오답 문항 수</span>
                                        <span class="ttl-3" style="color: #FF625F; font-size: 11px;">4개</span>
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
                        <tr style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                            <th style="width: 10%; padding: 10px;">번호</th>
                            <th style="width: 45%">학습명</th>
                            <th style="width: 10%">시작일</th>
                            <th style="width: 10%">종료일</th>
                            <th style="width: 15%">평가 완료 여부</th>
                            <th style="width: 10%">평가 점수</th>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 10%; padding: 10px;">10</td>
                            <td style="width: 45%">학습 1. 노인 당뇨 기본</td>
                            <td style="width: 10%">2023.02.11</td>
                            <td style="width: 10%">2023.02.28</td>
                            <td style="width: 15%">완료</td>
                            <td style="width: 10%">100점/100점</td>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 10%; padding: 10px;">10</td>
                            <td style="width: 45%">학습 1. 노인 당뇨 기본</td>
                            <td style="width: 10%">2023.02.11</td>
                            <td style="width: 10%">2023.02.28</td>
                            <td style="width: 15%">완료</td>
                            <td style="width: 10%">100점/100점</td>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 10%; padding: 10px;">10</td>
                            <td style="width: 45%">학습 1. 노인 당뇨 기본</td>
                            <td style="width: 10%">2023.02.11</td>
                            <td style="width: 10%">2023.02.28</td>
                            <td style="width: 15%">완료</td>
                            <td style="width: 10%">100점/100점</td>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 10%; padding: 10px;">10</td>
                            <td style="width: 45%">학습 1. 노인 당뇨 기본</td>
                            <td style="width: 10%">2023.02.11</td>
                            <td style="width: 10%">2023.02.28</td>
                            <td style="width: 15%">완료</td>
                            <td style="width: 10%">100점/100점</td>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 10%; padding: 10px;">10</td>
                            <td style="width: 45%">학습 1. 노인 당뇨 기본</td>
                            <td style="width: 10%">2023.02.11</td>
                            <td style="width: 10%">2023.02.28</td>
                            <td style="width: 15%">완료</td>
                            <td style="width: 10%">100점/100점</td>
                        </tr>
                        <tr>
                            <td colspan="6" style="background-color: #F5F7FE; text-align: right;color: #3941A2; font-size: 12px;">평가 점수 총점<br><b>230점 </b>/400점</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row mb-4" style="font-size: 14px;">
                <div class="col-lg-12  border-rad-5 mt-2 px-4">
                    <table style="width: 100%;">
                        <tr style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                            <th style="width: 20%; padding: 10px;">사전 학습</th>
                            <th style="width: 20%">본 학습</th>
                            <th style="width: 20%">본 학습</th>
                            <th style="width: 20%">총 평가 점수</th>
                            <th style="width: 20%">수료 여부</th>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 20%; padding: 10px;"><b>25</b>/30점</td>
                            <td style="width: 20%; padding: 10px;"><b>40</b>/30점</td>
                            <td style="width: 20%; padding: 10px;"><b>10</b>/30점</td>
                            <td style="width: 20%; padding: 10px; color: #3941A2;"><b>75</b>/30점</td>
                            <td style="width: 20%; padding: 10px;"></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="font-size: 8px; color: #9495A1;">*총 평가 점수가 80점 이상일 경우 수료증 발급이 가능합니다.</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="font-size: 8px; color: #9495A1; text-align: right">?수료증이란?</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="font-size: 8px; color: #9495A1; text-align: right">
                                <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #F3F4F8;color: #9495A1;">수료증 발급하기</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row mb-4" style="font-size: 14px;">
                <div class="col-lg-12  border-rad-5 mt-2 px-4">
                    <table style="width: 100%;">
                        <tr style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                            <th style="width: 20%; padding: 10px;">사전 학습</th>
                            <th style="width: 20%">본 학습</th>
                            <th style="width: 20%">본 학습</th>
                            <th style="width: 20%">총 평가 점수</th>
                            <th style="width: 20%">수료 여부</th>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 20%; padding: 10px;"><b>25</b>/30점</td>
                            <td style="width: 20%; padding: 10px;"><b>40</b>/30점</td>
                            <td style="width: 20%; padding: 10px;"><b>10</b>/30점</td>
                            <td style="width: 20%; padding: 10px; color: #3941A2;"><b>75</b>/30점</td>
                            <td style="width: 20%; padding: 10px;"></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="font-size: 8px; color: #9495A1;">*총 평가 점수가 80점 이상일 경우 수료증 발급이 가능합니다.</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="font-size: 8px; color: #9495A1; text-align: right">?수료증이란?</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="font-size: 8px; color: #9495A1; text-align: right">
                                <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #F3F4F8;color: #9495A1;">수료증 발급하기</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row mb-4" style="font-size: 14px;">
                <div class="col-lg-12  border-rad-5 mt-2 px-4">
                    <table style="width: 100%;">
                        <tr style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                            <th style="width: 20%; padding: 10px;">사전 학습</th>
                            <th style="width: 20%">본 학습</th>
                            <th style="width: 20%">본 학습</th>
                            <th style="width: 20%">총 평가 점수</th>
                            <th style="width: 20%">수료 여부</th>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 20%; padding: 10px;"><b>25</b>/30점</td>
                            <td style="width: 20%; padding: 10px;"><b>40</b>/30점</td>
                            <td style="width: 20%; padding: 10px;"><b>10</b>/30점</td>
                            <td style="width: 20%; padding: 10px; color: #3941A2;"><b>75</b>/30점</td>
                            <td style="width: 20%; padding: 10px;"></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="font-size: 8px; color: #9495A1;">*총 평가 점수가 80점 이상일 경우 수료증 발급이 가능합니다.</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="font-size: 8px; color: #9495A1; text-align: right">?수료증이란?</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="font-size: 8px; color: #9495A1; text-align: right">
                                <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #F3F4F8;color: #9495A1;">수료증 발급하기</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection