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

                    <div class="col-lg-9 ans-ckeck-box1 border-rad-10 item-flex-left px-4 mb-3">
                        <div class="">
                            <h2 class="mb-0">총점 88점</h2>
                        </div>
                    </div>

                    <!-- Top card end -->

                    <!-- card 1 -->
                    <div class="col-lg-9 shadow border-rad-10 px-4 mb-3 bg-quiz2">
                        <div class="row border-b-cus pt-2">
                            <div class="col-md-12 position-rel curr-in-box py-2">
                                <div class="row my-2">
                                    <div class="col-md-9 item-flex-left wrong-ans">
                                        <i class="fas fa-times mr-3 pb-1"></i>
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
                                    <input class="form-check-input wrong-ans" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" checked>
                                    <label class="form-check-label wrong-ans" for="exampleRadios3">
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
                    <!-- card 1 -->

                    <!-- card 2 -->
                    <div class="col-lg-9 shadow border-rad-10 px-4 mb-3 bg-quiz2">
                        <div class="row border-b-cus pt-2">
                            <div class="col-md-12 position-rel curr-in-box py-2">
                                <div class="row my-2">
                                    <div class="col-md-9 item-flex-left correct-ans">
                                        <i class="far fa-circle mr-3 pb-1"></i>
                                        <p class="ttl-12-2 mb-0">
                                            2. 다음 중 당뇨 증상과 올바르지 않은 것을 고르시오. 다음 중 당뇨 증상과 올바르지 않은 것을 고르시오.다음 중 당뇨 증상과 올바르지 않은 것을 고르시오.다음 중 당뇨 증상과 올바르지 않은 것을 고르시오.
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
                                    <input class="form-check-input correct-ans" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                                    <label class="form-check-label correct-ans" for="exampleRadios2">
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
                    <!-- card 2 -->

                    <!-- card 3 -->
                    <div class="col-lg-9 shadow border-rad-10 px-4 mb-3 bg-quiz2">
                        <div class="row border-b-cus pt-2">
                            <div class="col-md-12 position-rel curr-in-box py-2">
                                <div class="row my-2">
                                    <div class="col-md-9 item-flex-left wrong-ans">
                                        <i class="fas fa-times mr-3 pb-1"></i>
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
                                    <input class="form-check-input wrong-ans" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                                    <label class="form-check-label wrong-ans" for="exampleRadios2">
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
                    <!-- card 3 -->

                    <!-- card 4 -->
                    <div class="col-lg-9 shadow border-rad-10 px-4 mb-3 bg-quiz2">
                        <div class="row border-b-cus pt-2">
                            <div class="col-md-12 position-rel curr-in-box py-2">
                                <div class="row my-2">
                                    <div class="col-md-9 item-flex-left correct-ans">
                                        <i class="far fa-circle mr-3 pb-1"></i>
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
                                    <input class="form-check-input correct-ans" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" checked>
                                    <label class="form-check-label correct-ans" for="exampleRadios4">
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
                    <!-- card 4 -->

                    <!-- card 5 -->
                    <div class="col-lg-9 shadow border-rad-10 px-4 mb-3 bg-quiz2">
                        <div class="row border-b-cus pt-2">
                            <div class="col-md-12 position-rel curr-in-box py-2">
                                <div class="row my-2">
                                    <div class="col-md-9 item-flex-left correct-ans">
                                        <i class="far fa-circle mr-3 pb-1"></i>
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
                                    <input class="form-check-input correct-ans" type="radio" name="exampleRadios" id="exampleRadios5" value="option5" checked>
                                    <label class="form-check-label correct-ans" for="exampleRadios5">
                                        텍스트텍스트텍스트텍스트텍스트텍스트
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card 5 -->

                    <div class="col-md-12 item-flex-center pt-5 pb-4">
                        <button class="btn btn-5" type="submit">목록 보기</button>
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>


@endsection