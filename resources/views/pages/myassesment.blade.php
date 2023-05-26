@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row">

            <div class="col-lg-2">
            {{-- TODO: Side navbar --}}
            </div>

            <div class="col-lg-10" style="padding: 1%;">

                <section class="img-sec-top text-center comp-height-120 py44 pl0 pr0" style="background-image: linear-gradient(to right, #212880 , #4A227B);">
                    <div class="pl30">
                        <div class="content-box">
                            <div class="title">
                                <h2 class="text-left text-white">사전/최종평가</h2>
                            </div>
                        </div>
                    </div>


                </section>
                <br>
                <div class="row">
                    <div class="col-lg-2">
                        <form class="form-inline justify-content-end mx-3 my-2 my-lg-0">
                            <select class="form-control search-bar-custom ml-2" style="width: 250px;">
                                <option>전체</option>
                                <option>당뇨</option>
                                <option>당뇨당뇨</option>
                                <option>당뇨당뇨당뇨</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-2">
                        <form class="form-inline justify-content-end mx-3 my-2 my-lg-0">
                            <select class="form-control search-bar-custom ml-2" style="width: 250px;">
                                <option>전체</option>
                                <option>당뇨</option>
                                <option>당뇨당뇨</option>
                                <option>당뇨당뇨당뇨</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-8" style="text-align: right;">
                        <input type="checkbox" style="width: 18px; height: 18px;"> 진행 중인 평가만 보기
                    </div>
                </div>
                <!-- card -->
                <div class="row">
                    <div class="col-lg-12 shadow border-rad-5 mb-3 px-4 py-4">
                        <div class="row pb-4">
                            <div class="col-md-8 position-rel">
                                <span class="ttl-1 pr-4">사전 학습 1</span>
                                <br>
                                <span class="ttl-3" style="color: #9495A1; font-size: 11px;">제목 |</span>
                                <span class="ttl-3" style="color: #090909;">사전 학습 1 퀴즈</span>

                                <span class="ttl-3" style="color: #9495A1; margin-left: 20px;">총 문제 수 |</span>
                                <span class="ttl-3" style="color: #090909;">15개</span>
                                <br />
                                <span class="ttl-3" style="color: #9495A1;">종료일 |</span>
                                <span class="ttl-3" style="color: #090909;">2023.01.11</span>
                                <br />
                                <div class="curr-brd-r pl20 mt-3 border-rad-5" style="background-color: #F5F7FE; width: 300px;">
                                    2023년도 1학기 . 당뇨 - 간호학과
                                </div>
                            </div>
                            <div class="col-md-4" style="text-align: center;">

                                <span class="ttl-3" style="color: #3941A2; font-size: 11px;">등록완료</span>
                                <br />
                                <span class="ttl-3" style="color: #7479BD; font-size: 11px;">(2022.12.14)</span>

                                <br />
                                <br />
                                <span class="curr-brd">
                                    수정하기
                                </span>
                                <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">미리보기</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="row">
                    <div class="col-lg-12 shadow border-rad-5 mb-3 px-4 py-4">
                        <div class="row pb-4">
                            <div class="col-md-8 position-rel">
                                <span class="ttl-1 pr-4">사전 학습 1</span>
                                <br>
                                <span class="ttl-3" style="color: #9495A1; font-size: 11px;">제목 |</span>
                                <span class="ttl-3" style="color: #090909;">사전 학습 1 퀴즈</span>

                                <span class="ttl-3" style="color: #9495A1; margin-left: 20px;">총 문제 수 |</span>
                                <span class="ttl-3" style="color: #090909;">15개</span>
                                <br />
                                <span class="ttl-3" style="color: #9495A1;">종료일 |</span>
                                <span class="ttl-3" style="color: #090909;">2023.01.11</span>
                                <br />
                                <div class="curr-brd-r pl20 mt-3 border-rad-5" style="background-color: #F5F7FE; width: 300px;">
                                    2023년도 1학기 . 당뇨 - 간호학과
                                </div>
                            </div>
                            <div class="col-md-4" style="text-align: center;">

                                <span class="ttl-3" style="color: #3941A2; font-size: 11px;">등록완료</span>
                                <br />
                                <span class="ttl-3" style="color: #7479BD; font-size: 11px;">(2022.12.14)</span>

                                <br />
                                <br />
                                <span class="curr-brd">
                                    수정하기
                                </span>
                                <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">미리보기</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="row">
                    <div class="col-lg-12 shadow border-rad-5 mb-3 px-4 py-4">
                        <div class="row pb-4">
                            <div class="col-md-8 position-rel">
                                <span class="ttl-1 pr-4">사전 학습 1</span>
                                <br>
                                <span class="ttl-3" style="color: #9495A1; font-size: 11px;">제목 |</span>
                                <span class="ttl-3" style="color: #090909;">사전 학습 1 퀴즈</span>

                                <span class="ttl-3" style="color: #9495A1; margin-left: 20px;">총 문제 수 |</span>
                                <span class="ttl-3" style="color: #090909;">15개</span>
                                <br />
                                <span class="ttl-3" style="color: #9495A1;">종료일 |</span>
                                <span class="ttl-3" style="color: #090909;">2023.01.11</span>
                                <br />
                                <div class="curr-brd-r pl20 mt-3 border-rad-5" style="background-color: #F5F7FE; width: 300px;">
                                    2023년도 1학기 . 당뇨 - 간호학과
                                </div>
                            </div>
                            <div class="col-md-4" style="text-align: center;">

                                <span class="ttl-3" style="color: #3941A2; font-size: 11px;">등록완료</span>
                                <br />
                                <span class="ttl-3" style="color: #7479BD; font-size: 11px;">(2022.12.14)</span>

                                <br />
                                <br />
                                <span class="curr-brd">
                                    수정하기
                                </span>
                                <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">미리보기</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- card -->
            </div>
        </div>
</section>
@endsection