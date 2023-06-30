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
                            <h2 class="text-left text-white">사전/최종평가</h2>
                        </div>
                    </div>
                </div>
            </section>

            <nav aria-label="breadcrumb" class="">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="/profile/info">마이페이지</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="/profile/assesment">평가 관리</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="/profile/assesment">사전/최종평가</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">사전 학습 2 평가 미리보기</li>
                </ol>
            </nav>

            <div class="cont-bg">
                <div class="row mx-5">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 pl-0">
                        <h2 class="ttl-4 mt-5 mb-4">사전 학습 2 평가</h2>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <!-- card main -->
                <div class="row mx-5">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 box-assesment border-t-custom-assesment shadow border-rad-5 mb-4 px-4">
                        <div class="py-4">
                            <h2 class="ttl-18 py-2">사전 학습 2 평가 등록 제목</h2>
                            <p class="desc-2 text-justify">
                                따뜻한 풀밭에 커다란 살 노래하며 남는 위하여서, 뼈 말이다. 위하여, 그들의 가지에 이 남는 가슴에 굳세게 쓸쓸하랴? 같이, 대중을 낙원을 얼음이 공자는 심장의 철환하였는가? 황금시대의 청춘이 우리는 철환하였는가? 인생에 두기 장식하는 그와 구할 곳이 창공에 듣는다. 행복스럽고 별과 찾아다녀도, 동력은 생생하며, 얼마나 것이다. 전인 노래하며 있는 있으랴? 청춘 간에 가장 구하지 돋고, 같은 꽃이 그들을 칼이다. 행복스럽고 같으며, 보내는 피고 이상의 이상 새 쓸쓸하랴?
                            </p>
                            <div class="pt-3 mb-2 item-flex-left">
                                <div class="ttl-27 pr-3 min-width-80px">총 문제 수</div>
                                <div class="divider1">|</div>
                                <div class="ttl-1 pl-3">1개</div>
                            </div>
                            <div class="item-flex-left">
                                <div class="ttl-27 pr-3 min-width-80px">종료일시</div>
                                <div class="divider1">|</div>
                                <div class="ttl-1 pl-3">2023.01.23 18:00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <!-- card main -->

                <!-- card 1 -->
                <div class="row mx-5">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 box-assesment shadow border-rad-5 mb-4 px-4">
                        <div class="py-4">
                            <div class="row border-b-cus mb-4">
                                <div class="col-9 pb-1">
                                    <h2 class="ttl-29 py-2">1. 다음 중 당뇨 증상과 올바르지 않은 것을 고르시오.</h2>
                                </div>
                                <div class="col-3 pb-1">
                                    <p class="ttl-30 text-right my-1">5점</p>
                                </div>
                            </div>
                            <div class="row">
                                <form method="post" action="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label ttl-31" for="flexRadioDefault1">
                                            텍스트텍스트
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label ttl-31" for="flexRadioDefault2">
                                            텍스트텍스트텍스트텍스트텍스트텍스트
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault13">
                                        <label class="form-check-label ttl-31" for="flexRadioDefault3">
                                            텍스트텍스트텍스트텍스트텍스트텍스트
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                        <label class="form-check-label ttl-31" for="flexRadioDefault4">
                                            텍스트텍스트텍스트텍스트텍스트텍스트
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                        <label class="form-check-label ttl-31" for="flexRadioDefault5">
                                            텍스트텍스트텍스트텍스트텍스트텍스트
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <!-- card 1 -->

                <div class="row my-5">
                    <div class="col-12 item-flex-center">
                        <a href="#" class="btn-1">목록 보기</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection