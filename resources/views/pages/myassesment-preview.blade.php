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
                    <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">사전 학습 2 평가 미리보기</li>
                </ol>
            </nav>

            <div class="cont-bg">
                <div class="row mx-5">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 pl-0">
                        <h2 class="ttl-4 mt-5 mb-4">{{ $study->name }}</h2>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <!-- card main -->
                <div class="row mx-5">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 box-assesment border-t-custom-assesment shadow border-rad-5 mb-4 px-4">
                        <div class="py-4">
                            <h2 class="ttl-18 py-2">{{ $page == 'pre' ? $study->preLearning->name : $study->final->name }}</h2>
                            <p class="desc-2 text-justify">
                                {{ $page == 'pre' ? $study->preLearning->description : $study->final->description }}
                            </p>
                            <div class="pt-3 mb-2 item-flex-left">
                                <div class="ttl-27 pr-3 min-width-80px">총 문제 수</div>
                                <div class="divider1">|</div>
                                <div class="ttl-1 pl-3">{{ $page == 'pre' ? count($study->preLearning->questions) : count($study->final->questions) }}개</div>
                            </div>
                            <div class="item-flex-left">
                                <div class="ttl-27 pr-3 min-width-80px">종료일시</div>
                                <div class="divider1">|</div>
                                <div class="ttl-1 pl-3">{{ $page == 'pre' ? $study->preLearning->deadline_date : $study->final->deadline_date }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <!-- card main -->

                @foreach ($page == 'pre' ? $study->preLearning->questions : $study->final->questions as $question)
                <!-- card 1 -->
                <div class="row mx-5">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 box-assesment shadow border-rad-5 mb-4 px-4">
                        <div class="py-4">
                            <div class="row border-b-cus mb-4">
                                <div class="col-9 pb-1">
                                    <h2 class="ttl-29 py-2">1. {{ $question->question }}</h2>
                                </div>
                                <div class="col-3 pb-1">
                                    <p class="ttl-30 text-right my-1">{{ $question->points }}점</p>
                                </div>
                            </div>
                            <div class="row">
                                <form method="post" action="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" {{ $question->option_1 == $question->answer ? 'checked' : '' }}>
                                        <label class="form-check-label ttl-31" for="flexRadioDefault1">
                                            {{ $question->option_1 }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" {{ $question->option_2 == $question->answer ? 'checked' : '' }}>
                                        <label class="form-check-label ttl-31" for="flexRadioDefault2">
                                            {{ $question->option_2 }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault13" {{ $question->option_3 == $question->answer ? 'checked' : '' }}>
                                        <label class="form-check-label ttl-31" for="flexRadioDefault3">
                                            {{ $question->option_3 }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" {{ $question->option_4 == $question->answer ? 'checked' : '' }}>
                                        <label class="form-check-label ttl-31" for="flexRadioDefault4">
                                            {{ $question->option_4 }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" {{ $question->option_5 == $question->answer ? 'checked' : '' }}>
                                        <label class="form-check-label ttl-31" for="flexRadioDefault5">
                                            {{ $question->option_5 }}
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <!-- card 1 -->
                @endforeach

                <div class="row my-5">
                    <div class="col-12 item-flex-center">
                        <a href="/profile/assesment" class="btn-1">목록 보기</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection