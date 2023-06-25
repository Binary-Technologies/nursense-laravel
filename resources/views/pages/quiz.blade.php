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
                                    <p class="ttl-18">{{ $quiz->name }}</p>
                                </div>
                                <div class="col-md-12 item-flex-left curr-in-box">
                                    <p class="ttl-16 text-justify">{{ $quiz->description }}</p>
                                </div>
                                <div class="col-md-12 item-flex-left curr-in-box pt-3">
                                    <span class="ttl-27 pr-4 relative-block border-r2">총 문제 수</span>
                                    <span class="ttl-28">{{ count($quiz->questions) }}개</span>
                                </div>
                                <div class="col-md-12 item-flex-left curr-in-box pt-2">
                                    <span class="ttl-27">종료일시</span>
                                    <span class="ttl-28 pr-quiz-date">{{ $quiz->deadline_date }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Top card end -->
                        <?php $i = 1; ?>
                        @foreach ($quiz->questions as $question)
                        <!-- card -->
                        <div class="col-lg-9 shadow border-rad-10 px-4 mb-3 bg-quiz2">
                            <div class="row border-b-cus pt-2">
                                <div class="col-md-12 position-rel curr-in-box py-2">
                                    <div class="row my-2">
                                        <div class="col-md-9 item-flex-left">
                                            <p class="ttl-12-2 mb-0">
                                                {{ $i.'. '.$question->question }}
                                            </p>
                                        </div>
                                        <div class="col-md-3 item-flex-right">
                                            <p class="ttl-19 mb-0 mt--16">
                                                {{ $question->points }}점
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
                                            {{ $question->option_1 }}
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            {{ $question->option_2 }}
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">
                                            {{ $question->option_3 }}
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios4">
                                            {{ $question->option_4 }}
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
                                        <label class="form-check-label" for="exampleRadios5">
                                            {{ $question->option_5 }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <?php $i++; ?>
                        @endforeach

                        <div class="col-md-12 item-flex-center pt-5 pb-4">
                            <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit" style="color: #ffffff; background-color: #212880;padding-left: 40px;padding-right: 40px;padding-bottom: 10px;padding-top: 10px;">제출</button>
                        </div>

                    </div>
                </div>


            </div>
        </div>
</section>


@endsection