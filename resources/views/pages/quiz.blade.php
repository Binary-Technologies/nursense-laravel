@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
    <div class="row">

        <div class="col-lg-2">
            @include('includes.sidenav-info')
        </div>

        <div class="col-lg-10 bg-quiz" style="width: 100%; padding: 0px;">

            <section class="img-sec-top text-center comp-height-120 py44 pl0 pr0" style="background-image: linear-gradient(to right, #212880 , #212880);">
                <div class="pl30">
                    <div class="content-box">
                        <div class="title">
                            <h2 class="text-left text-white mb0" style="font-family: pretendard-bold; font-size: 24px; color: #fff;">사전 평가 '학습 1'</h2>
                        </div>
                    </div>
                </div>
            </section>

            <div class="my-5">
                <div class="row item-flex-center">

                    <!-- Top card start -->

                    <div class="col-lg-9 shadow border-t-custom-quiz border-rad-10 px-4 mb-3 bg-quiz2">
                        <div class="row py-4">
                            <div class="col-md-12 item-flex-left curr-in-box">
                                <p class="ttl-18">사전 학습 2 평가 등록 제목</p>
                            </div>
                            <div class="col-md-12 item-flex-left curr-in-box">
                                <p class="ttl-16 text-justify">따뜻한 풀밭에 커다란 살 노래하며 남는 위하여서, 뼈 말이다. 위하여, 그들의 가지에 이 남는 가슴에 굳세게 쓸쓸하랴? 같이, 대중을 낙원을 얼음이 공자는 심장의 철환하였는가? 황금시대의 청춘이 우리는 철환하였는가? 인생에 두기 장식하는 그와 구할 곳이 창공에 듣는다. 행복스럽고 별과 찾아다녀도, 동력은 생생하며, 얼마나 것이다. 전인 노래하며 있는 있으랴? 청춘 간에 가장 구하지 돋고, 같은 꽃이 그들을 칼이다. 행복스럽고 같으며, 보내는 피고 이상의 이상 새 쓸쓸하랴?</p>
                            </div>
                            <div class="col-md-12 item-flex-left curr-in-box pt-3">
                                <span class="ttl-27 pr-4 relative-block border-r2">총 문제 수</span>
                                <span class="ttl-28">1개</span>
                            </div>
                            <div class="col-md-12 item-flex-left curr-in-box pt-2">
                                <span class="ttl-27">종료일시</span>
                                <span class="ttl-28 pr-quiz-date">2023.01.23 18:00</span>
                            </div>
                        </div>
                    </div>

                    <!-- Top card end -->

                    <!-- card -->
                    <div class="col-lg-9 shadow border-rad-10 px-4 mb-3 bg-quiz2">
                        <div class="row border-b-cus pt-2">
                            <div class="col-md-12 position-rel curr-in-box py-2">
                                <div class="row my-2">
                                    <div class="col-md-9 item-flex-left">
                                        <p class="ttl-12-2 mb-0">
                                            1. 다음 중 당뇨 증상과 올바르지 않은 것을 고르시오.
                                        </p>
                                    </div>
                                    <div class="col-md-3 item-flex-right">
                                        <p class="ttl-19 mb-0 mt--16">
                                            5점
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-md-8 position-rel">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                    <label class="form-check-label" for="exampleRadios4">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
                                    <label class="form-check-label" for="exampleRadios5">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <!-- card -->
                    <div class="col-lg-9 shadow border-rad-10 px-4 mb-3 bg-quiz2">
                        <div class="row border-b-cus pt-2">
                            <div class="col-md-12 position-rel curr-in-box py-2">
                                <div class="row my-2">
                                    <div class="col-md-9 item-flex-left">
                                        <p class="ttl-12-2 mb-0">
                                            2. 다음 중 당뇨 증상과 올바르지 않은 것을 고르시오.
                                        </p>
                                    </div>
                                    <div class="col-md-3 item-flex-right">
                                        <p class="ttl-19 mb-0 mt--16">
                                            5점
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-md-8 position-rel">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                    <label class="form-check-label" for="exampleRadios1">
                                        텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                    <label class="form-check-label" for="exampleRadios4">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
                                    <label class="form-check-label" for="exampleRadios5">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <!-- card -->
                    <div class="col-lg-9 shadow border-rad-10 px-4 mb-3 bg-quiz2">
                        <div class="row border-b-cus pt-2">
                            <div class="col-md-12 position-rel curr-in-box py-2">
                                <div class="row my-2">
                                    <div class="col-md-9 item-flex-left">
                                        <p class="ttl-12-2 mb-0">
                                            3. 다음 중 당뇨 증상과 올바르지 않은 것을 고르시오.
                                        </p>
                                    </div>
                                    <div class="col-md-3 item-flex-right">
                                        <p class="ttl-19 mb-0 mt--16">
                                            5점
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-md-8 position-rel">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                    <label class="form-check-label" for="exampleRadios1">
                                        텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                    <label class="form-check-label" for="exampleRadios4">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
                                    <label class="form-check-label" for="exampleRadios5">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <!-- card -->
                    <div class="col-lg-9 shadow border-rad-10 px-4 mb-3 bg-quiz2">
                        <div class="row border-b-cus pt-2">
                            <div class="col-md-12 position-rel curr-in-box py-2">
                                <div class="row my-2">
                                    <div class="col-md-9 item-flex-left">
                                        <p class="ttl-12-2 mb-0">
                                            4. 다음 중 당뇨 증상과 올바르지 않은 것을 고르시오.
                                        </p>
                                    </div>
                                    <div class="col-md-3 item-flex-right">
                                        <p class="ttl-19 mb-0 mt--16">
                                            5점
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-md-8 position-rel">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                    <label class="form-check-label" for="exampleRadios1">
                                        텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                    <label class="form-check-label" for="exampleRadios4">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
                                    <label class="form-check-label" for="exampleRadios5">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <!-- card -->
                    <div class="col-lg-9 shadow border-rad-10 px-4 mb-3 bg-quiz2">
                        <div class="row border-b-cus pt-2">
                            <div class="col-md-12 position-rel curr-in-box py-2">
                                <div class="row my-2">
                                    <div class="col-md-9 item-flex-left">
                                        <p class="ttl-12-2 mb-0">
                                            5. 다음 중 당뇨 증상과 올바르지 않은 것을 고르시오.
                                        </p>
                                    </div>
                                    <div class="col-md-3 item-flex-right">
                                        <p class="ttl-19 mb-0 mt--16">
                                            5점
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-md-8 position-rel">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                    <label class="form-check-label" for="exampleRadios1">
                                        텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                    <label class="form-check-label" for="exampleRadios4">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
                                    <label class="form-check-label" for="exampleRadios5">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->

                    <div class="col-md-12 item-flex-center pt-5 pb-4">
                        <a href="#scoreModal" class="btn btn-2" data-bs-toggle="modal">제출</a>
                    </div>

                </div>
            </div>

            <!-- Score Alert Modal -->
            <div class="modal fade" id="scoreModal" aria-hidden="true" aria-labelledby="scoreModalContent" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center my-3" id="scoreModalContent"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0">
                            <p class="alert-text text-center mt-1 mb-2">
                                총점
                            </p>
                            <h5 class="alert-title text-center mt-1 mb-5">88점</h5>

                            <div class="item-flex-center my-2">
                                <div class="mx-1">
                                    <button class="btn btn-alert3" data-bs-target="#" data-bs-toggle="modal">확인</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Score Alert Modal -->

        </div>
    </div>
</section>


@endsection