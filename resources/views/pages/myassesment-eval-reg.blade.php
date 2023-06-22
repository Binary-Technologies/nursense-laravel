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
                        <a href="{{ url('assestment') }}">마이페이지</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="{{ url('assestment') }}">평가 관리</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="{{ url('assestment') }}">사전/최종평가</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">사전 학습 2 평가 등록</li>
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
                            <div class="item-flex-center my-2">
                                <input type="text" class="form-control val-text py-2" name="" id="" placeholder="제목을 입력해주세요." value="" aria-describedby="">
                            </div>
                            <div class="item-flex-center my-2">
                                <textarea class="form-control val-text-area py-2" name="" id="" value="" rows="2" aria-describedby="">평가의 내용 설명을 입력해주세요.</textarea>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="pt-3 mb-2 item-flex-left">
                                        <div class="ttl-27 pr-3 min-width-80px">총 문제 수</div>
                                        <div class="divider1">|</div>
                                        <div class="ttl-1 pl-3">1개</div>
                                    </div>
                                    <div class="item-flex-left">
                                        <div class="ttl-27 pr-3 min-width-80px">총 배점</div>
                                        <div class="divider1">|</div>
                                        <div class="ttl-1 pl-3">0점</div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="row my-4">
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                            <p class="form-text-lbl my-1">종료일시</p>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <input type="date" class="form-control val-text" name="" id="" aria-describedby="">
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <select class="form-select form-text-d" name="" id="" aria-label="">
                                                <option value="1" selected>시</option>
                                                <option value="2"></option>
                                                <option value="3"></option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <select class="form-select form-text-d" name="" id="" aria-label="">
                                                <option value="1" selected>분</option>
                                                <option value="2"></option>
                                                <option value="3"></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
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
                                    <h2 class="ttl-29 py-2">1. 질문을 입력해주세요.</h2>
                                </div>
                                <div class="col-3 pb-1">
                                    <p class="ttl-30 text-right my-1">-점</p>
                                </div>
                            </div>
                            <div class="row">
                                <form method="post" action="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label ttl-31" for="flexRadioDefault1">
                                            답지1
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 position-rel">
                        <div class="add-icon-btn-abs">
                            <div class="add-icon-btn">
                                <i class='fas fa-plus-circle'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 1 -->

                <!-- card 2 for Add -->
                <div class="row mx-5">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 box-assesment shadow border-rad-5 mb-4 px-4">
                        <div class="py-4">
                            <div class="row mb-4">
                                <div class="col-12">
                                    <div class="item-flex-center my-2">
                                        <input type="text" class="form-control val-text py-2" name="" id="" placeholder="질문을 입력해주세요." value="" aria-describedby="">
                                    </div>
                                </div>
                            </div>

                            <form method="post" action="#">
                                <!-- 1 -->
                                <div class="row border-b-cus mx-1 mb-4">
                                    <div class="form-check col-6 item-flex-left mb-4">
                                        <div class="ml-1">
                                            <input class="form-check-input" type="radio" name="" id="">
                                            <label class="form-check-label ttl-1" for="">
                                                답지1
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check col-6 item-flex-right mb-4">
                                        <div class="mr-1">
                                            <input class="form-check-input" type="radio" name="" id="" checked>
                                            <label class="form-check-label ttl-1 mr-2" for="">
                                                정답
                                            </label>
                                            <a href="#" class="ttl-31">
                                                X
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="row border-b-cus mx-1 mb-4">
                                    <div class="form-check col-6 item-flex-left mb-4">
                                        <div class="ml-1">
                                            <input class="form-check-input" type="radio" name="" id="">
                                            <label class="form-check-label ttl-31" for="">
                                                답지 추가
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="row mx-1">
                                    <div class="form-check col-6 item-flex-left mb-4">
                                        <div class="ml-1">
                                            <input class="form-check-input" type="checkbox" name="" id="" checked>
                                            <label class="form-check-label ttl-31" for="">
                                                선택지 섞기
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check col-6 item-flex-right mb-4">
                                        <div class="mr-1">
                                            <div class="item-flex-right my-2">
                                                <input type="text" class="form-control val-text py-2 width-50 height-40 position-rel" name="" id="" placeholder="배점 입력" value="" aria-describedby="">
                                                <a href="#" class="asses-eval-reg-abs">점</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-2 position-rel">
                        <div class="add-icon-btn-abs">
                            <div class="add-icon-btn">
                                <i class='fas fa-plus-circle'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 2 for Add -->

                <div class="row my-5">
                    <div class="col-12 item-flex-center">
                        <!-- If Completed -->
                        <a href="#completionModal" class="btn-2" data-bs-toggle="modal">저장</a>
                        <!-- If Fail -->
                        <!-- <a href="#failModal" class="btn-2" data-bs-toggle="modal">저장</a> -->
                    </div>
                </div>
            </div>

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
                                총 배점이 100점이 아닐 경우<br>
                                저장되지 않습니다.
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
            <!-- Fail Alert Modal -->
            <div class="modal fade" id="failModal" aria-hidden="true" aria-labelledby="failModalContent" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center my-3" id="failModalContent"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0">
                            <p class="alert-text2 text-center mt-2 mb-5">
                                사전학습 2 평가가 성공적으로<br>
                                저장되었습니다.
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
            <!-- Fail Alert Modal -->

        </div>
    </div>
</section>
@endsection