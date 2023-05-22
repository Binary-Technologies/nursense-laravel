@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
    <div class="container">
        <div class="row row-width-1920">

            <div class="col-lg-2">
            {{-- TODO: Side navbar --}}
            </div>

            <div class="col-lg-10 sec-width-1396">

                <section class="img-sec-top text-center comp-height-120 py44 pl0 pr0" style="background-image: linear-gradient(to right, #212880 , #4A227B);">
                    <div class="pl30">
                        <div class="content-box">
                            <div class="title">
                                <h2 class="text-left text-white mb0" style="font-family: pretendard-bold; font-size: 24px; color: #fff;">학습</h2>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="container cont-width-1396">
                    <div class="row my-5 pr-0">

                        <div class="col-md-8">
                        </div>
                        <div class="col-md-4 pr-0">
                            <form class="form-inline justify-content-end my-2 ttl-12">
                                <span>교육 과정</span>
                                <select class="form-control search-bar-custom ml-3" style="width: 150px;">
                                    <option>당뇨</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </form>
                        </div>

                    </div>
                    <div class="row mt-3">

                        <!-- card -->
                        <div class="col-lg-6 py-4 mb-3">
                            <div class="shadow border-rad-10">
                                <a href="learning_details.php">
                                    <div class="row p20">
                                        <div class="pie_progress col-md-3" role="progressbar" data-goal="75" data-barcolor="#212880" data-barsize="20" aria-valuemin="0" aria-valuemax="100">
                                            <div class="pie_progress__number" style="top: 70px;">0%</div>
                                        </div>
                                        <div class="col-md-9 border-rad-5 mb-3 px-2">
                                            <div class="row">
                                                <div class="col-md-12 item-flex-left position-rel curr-in-box pt-4 pb-2">
                                                    <div class="ttl-2">
                                                        학습 1
                                                    </div>
                                                    <div class="ttl-1">
                                                        김영신 교수님
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 position-rel">
                                                    <span class="ttl-3 pr-4">등록일</span>
                                                    <span class="br-right-2"></span>
                                                    <span class="ttl-3">2023.04.05</span>
                                                    <div class="mt-2">
                                                        <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #090909;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p20">
                                        <div class="col-md-12 relative-block border-t1"></div>
                                        <div class="col-md-4 relative-block border-r1">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">최종평가</span>
                                                <span class="ttl-24">미응시</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 relative-block border-r1">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">리포트 제출</span>
                                                <span class="ttl-24">미제출</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">설문조사</span>
                                                <span class="ttl-24">미제출</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- card -->

                        <!-- card -->
                        <div class="col-lg-6 py-4 mb-3">
                            <div class="shadow border-rad-10">
                                <a href="learning_details.php">
                                    <div class="row p20">
                                        <div class="pie_progress col-md-3" role="progressbar" data-goal="65" data-barcolor="#212880" data-barsize="20" aria-valuemin="0" aria-valuemax="100">
                                            <div class="pie_progress__number" style="top: 70px;">0%</div>
                                        </div>
                                        <div class="col-md-9 border-rad-5 mb-3 px-2">
                                            <div class="row">
                                                <div class="col-md-12 item-flex-left position-rel curr-in-box pt-4 pb-2">
                                                    <div class="ttl-2">
                                                        학습 2
                                                    </div>
                                                    <div class="ttl-1">
                                                        김영신 교수님
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 position-rel">
                                                    <span class="ttl-3 pr-4">등록일</span>
                                                    <span class="br-right-2"></span>
                                                    <span class="ttl-3">2023.04.05</span>
                                                    <div class="mt-2">
                                                        <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #090909;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p20">
                                        <div class="col-md-12 relative-block border-t1"></div>
                                        <div class="col-md-4 relative-block border-r1">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">최종평가</span>
                                                <span class="ttl-24" style="color: #3941A2;">응시 완료</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 relative-block border-r1">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">리포트 제출</span>
                                                <span class="ttl-24" style="color: #3941A2;">제출 완료</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">설문조사</span>
                                                <span class="ttl-24" style="color: #3941A2;">미제출</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- card -->

                        <!-- card -->
                        <div class="col-lg-6 py-4 mb-3">
                            <div class="shadow border-rad-10">
                                <a href="learning_details.php">
                                    <div class="row p20">
                                        <div class="pie_progress col-md-3" role="progressbar" data-goal="70" data-barcolor="#212880" data-barsize="20" aria-valuemin="0" aria-valuemax="100">
                                            <div class="pie_progress__number" style="top: 70px;">0%</div>
                                        </div>
                                        <div class="col-md-9 border-rad-5 mb-3 px-2">
                                            <div class="row">
                                                <div class="col-md-12 item-flex-left position-rel curr-in-box pt-4 pb-2">
                                                    <div class="ttl-2">
                                                        학습 3
                                                    </div>
                                                    <div class="ttl-1">
                                                        김영신 교수님
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 position-rel">
                                                    <span class="ttl-3 pr-4">등록일</span>
                                                    <span class="br-right-2"></span>
                                                    <span class="ttl-3">2023.04.05</span>
                                                    <div class="mt-2">
                                                        <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #090909;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p20">
                                        <div class="col-md-12 relative-block border-t1"></div>
                                        <div class="col-md-4 relative-block border-r1">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">최종평가</span>
                                                <span class="ttl-24" style="color: #616474;">등록된 평가 없음</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 relative-block border-r1">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">리포트 제출</span>
                                                <span class="ttl-24" style="color: #616474;">등록된 리포트 없음</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">설문조사</span>
                                                <span class="ttl-24" style="color: #616474;">학습 완료후 참여 가능</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- card -->

                        <!-- card -->
                        <div class="col-lg-6 py-4 mb-3">
                            <div class="shadow border-rad-10">
                                <a href="learning_details.php">
                                    <div class="row p20">
                                        <div class="pie_progress col-md-3" role="progressbar" data-goal="85" data-barcolor="#212880" data-barsize="20" aria-valuemin="0" aria-valuemax="100">
                                            <div class="pie_progress__number" style="top: 70px;">0%</div>
                                        </div>
                                        <div class="col-md-9 border-rad-5 mb-3 px-2">
                                            <div class="row">
                                                <div class="col-md-12 item-flex-left position-rel curr-in-box pt-4 pb-2">
                                                    <div class="ttl-2">
                                                        학습 4
                                                    </div>
                                                    <div class="ttl-1">
                                                        김영신 교수님
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 position-rel">
                                                    <span class="ttl-3 pr-4">등록일</span>
                                                    <span class="br-right-2"></span>
                                                    <span class="ttl-3">2023.04.05</span>
                                                    <div class="mt-2">
                                                        <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #090909;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p20">
                                        <div class="col-md-12 relative-block border-t1"></div>
                                        <div class="col-md-4 relative-block border-r1">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">최종평가</span>
                                                <span class="ttl-24" style="color: #616474;">등록된 평가 없음</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 relative-block border-r1">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">리포트 제출</span>
                                                <span class="ttl-24" style="color: #616474;">등록된 리포트 없음</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">설문조사</span>
                                                <span class="ttl-24" style="color: #616474;">학습 완료후 참여 가능</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- card -->

                        <!-- card -->
                        <div class="col-lg-6 py-4 mb-3">
                            <div class="shadow border-rad-10">
                                <a href="learning_details.php">
                                    <div class="row p20">
                                        <div class="pie_progress col-md-3" role="progressbar" data-goal="50" data-barcolor="#212880" data-barsize="20" aria-valuemin="0" aria-valuemax="100">
                                            <div class="pie_progress__number" style="top: 70px;">0%</div>
                                        </div>
                                        <div class="col-md-9 border-rad-5 mb-3 px-2">
                                            <div class="row">
                                                <div class="col-md-12 item-flex-left position-rel curr-in-box pt-4 pb-2">
                                                    <div class="ttl-2">
                                                        학습 5
                                                    </div>
                                                    <div class="ttl-1">
                                                        김영신 교수님
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 position-rel">
                                                    <span class="ttl-3 pr-4">등록일</span>
                                                    <span class="br-right-2"></span>
                                                    <span class="ttl-3">2023.04.05</span>
                                                    <div class="mt-2">
                                                        <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #090909;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p20">
                                        <div class="col-md-12 relative-block border-t1"></div>
                                        <div class="col-md-4 relative-block border-r1">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">최종평가</span>
                                                <span class="ttl-24" style="color: #3941A2;">응시 완료</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 relative-block border-r1">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">리포트 제출</span>
                                                <span class="ttl-24" style="color: #3941A2;">제출 완료</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">설문조사</span>
                                                <span class="ttl-24" style="color: #3941A2;">미제출</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- card -->

                        <!-- card -->
                        <div class="col-lg-6 py-4 mb-3">
                            <div class="shadow border-rad-10">
                                <a href="learning_details.php">
                                    <div class="row p20">
                                        <div class="pie_progress col-md-3" role="progressbar" data-goal="95" data-barcolor="#212880" data-barsize="20" aria-valuemin="0" aria-valuemax="100">
                                            <div class="pie_progress__number" style="top: 70px;">0%</div>
                                        </div>
                                        <div class="col-md-9 border-rad-5 mb-3 px-2">
                                            <div class="row">
                                                <div class="col-md-12 item-flex-left position-rel curr-in-box pt-4 pb-2">
                                                    <div class="ttl-2">
                                                        학습 6
                                                    </div>
                                                    <div class="ttl-1">
                                                        김영신 교수님
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 position-rel">
                                                    <span class="ttl-3 pr-4">등록일</span>
                                                    <span class="br-right-2"></span>
                                                    <span class="ttl-3">2023.04.05</span>
                                                    <div class="mt-2">
                                                        <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #090909;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p20">
                                        <div class="col-md-12 relative-block border-t1"></div>
                                        <div class="col-md-4 relative-block border-r1">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">최종평가</span>
                                                <span class="ttl-24" style="color: #3941A2;">응시 완료</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 relative-block border-r1">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">리포트 제출</span>
                                                <span class="ttl-24" style="color: #3941A2;">제출 완료</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">설문조사</span>
                                                <span class="ttl-24" style="color: #3941A2;">미제출</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- card -->

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection