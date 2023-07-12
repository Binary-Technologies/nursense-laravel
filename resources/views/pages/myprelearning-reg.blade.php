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
                            <h2 class="text-left text-white">사전학습</h2>
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
                        <a href="/profile/prelearning">평가 관리</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="/profile/prelearning">사전학습</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">사전 학습 등록</li>
                </ol>
            </nav>
        <form action="" method="post">
            <div class="mt-4">

                <div class="row mb-4 pr-4">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <h4 class="form-lbl1 mb-3">* 학습 과정</h4>
                        <div class="item-flex-center my-2">
                            <input type="text" class="form-control val-text py-2 height-52" name="" id="" placeholder="학습 과정" value="" aria-describedby="">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12 pl-0">
                        <h4 class="form-lbl1 mb-3">* 제목</h4>
                        <div class="item-flex-center my-2">
                            <input type="text" class="form-control val-text py-2 height-52" name="" id="" placeholder="제목을 입력해 주세요." value="" aria-describedby="">
                        </div>
                    </div>
                </div>

                <div class="row mb-4 pr-4">
                    <div class="col-12">
                        <h4 class="form-lbl1 mb-3">* 내용</h4>
                        <div class="item-flex-center my-2">
                            <textarea class="form-control val-text-area py-2" placeholder="내용을 입력해 주세요." name="" id="" value="" rows="7" aria-describedby=""></textarea>
                        </div>
                    </div>
                </div>

                <div class="row mb-4 pr-4">
                    <div class="col-12">
                        <h4 class="form-lbl1 mb-3">첨부파일</h4>
                        <div class="item-flex-center">
                            <div class="width-100">
                                <div class="img-up-box">
                                    <div class="img-up-box-inner">
                                        <div class="mt-1">
                                            <div class="item-flex-center">
                                                <button class="btn btn9 mt-2">파일 선택</button>
                                            </div>
                                            <p class="modal-inner-text2 text-center mb-0">또는 여기로 파일을 끌어와주세요.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="modal-inner-text3">
                                    * pdf 형식의 총 1개의 파일을 등록할 수 있습니다.<br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <div class="col-12 item-flex-right">
                        <!-- If Completed -->
                        <a href="#completionModal" class="btn-3 mr-4" data-bs-toggle="modal">사전학습 등록</a>
                        <!-- If Active -->
                        <!-- <a href="#completionModal" class="btn-2 mr-4" data-bs-toggle="modal">사전학습 등록</a> -->
                        <!-- If Fail -->
                        <!-- <a href="#failModal" class="btn-3 mr-4" data-bs-toggle="modal">사전학습 등록</a> -->
                    </div>
                </div>
            </div>
        </form>
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
                                사전학습 등록을 완료하였습니다.
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