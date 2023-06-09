@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row">

            <div class="col-lg-2">
                @include('includes.sidenav-info')
            </div>

            <div class="col-lg-10">

                <section class="img-sec-top text-center comp-height-120 py44 pl0 pr0" style="background-image: linear-gradient(to right, #212880 , #4A227B);">
                    <div class="pl30">
                        <div class="content-box">
                            <div class="title">
                                <h2 class="text-left text-white mb0" style="font-family: pretendard-bold; font-size: 24px; color: #fff;">학습</h2>
                            </div>
                        </div>
                    </div>
                </section>

                <div style="padding: 1%;">
                    <div class="row pr-0">

                        <div class="col-md-8">
                        </div>
                        <div class="col-md-4 pr-0">
                            <form class="form-inline justify-content-end my-2 ttl-12">
                                <span>교육 과정</span>
                                <select class="form-control search-bar-custom ml-3" style="width: 150px;">
                                    <option>당뇨</option>
                                </select>
                            </form>
                        </div>

                    </div>
                    <div class="row mt-3">
                        @foreach ($studies as $study)
                        <!-- card -->
                        <div class="col-lg-6 py-4 mb-3">
                            <div class="shadow border-rad-10">
                                <a href="/curriculum/learning/details/{{ $study->id }}">
                                    <div class="row p20">
                                        <div class="pie_progress col-md-3" role="progressbar" data-goal="75" data-barcolor="#212880" data-barsize="20" aria-valuemin="0" aria-valuemax="100">
                                            <div class="pie_progress__number" style="top: 70px;">0%</div>
                                        </div>
                                        <div class="col-md-9 border-rad-5 mb-3 px-2">
                                            <div class="row">
                                                <div class="col-md-12 item-flex-left position-rel curr-in-box pt-4 pb-2">
                                                    <div class="ttl-2">
                                                        {{ $study->mainStudy->name}}
                                                    </div>
                                                    <div class="ttl-1">
                                                        {{ $study->mainStudy->instructor->name }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 position-rel">
                                                    <span class="ttl-3 pr-4">등록일</span>
                                                    <span class="br-right-2"></span>
                                                    <span class="ttl-3">{{ $study->mainStudy->end_date }}</span>
                                                    <div class="mt-2">
                                                        <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #090909;">
                                                            {{ $study->mainStudy->description }}
                                                        </span>
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
                                                @if ($study->mainStudy->final == null)
                                                <span class="ttl-24" style="color: #616474;">등록된 평가 없음</span>
                                                @else
                                                @if(count($study->userFinalAnswers) == 0)
                                                <span class="ttl-24">미응시</span>
                                                @else
                                                <span class="ttl-24" style="color: #3941A2;">응시 완료</span>
                                                @endif
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 relative-block border-r1">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">리포트 제출</span>
                                                @if ($study->mainStudy->report == null)
                                                <span class="ttl-24" style="color: #616474;">등록된 평가 없음</span>
                                                @else
                                                @if($study->userReport == null)
                                                <span class="ttl-24">미응시</span>
                                                @else
                                                <span class="ttl-24" style="color: #3941A2;">응시 완료</span>
                                                @endif
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item-flex-center">
                                                <span class="ttl-3 pr-2">설문조사</span>
                                                @if ($study->mainStudy->survey == null)
                                                <span class="ttl-24" style="color: #616474;">등록된 평가 없음</span>
                                                @else
                                                @if($study->userSurvey == null)
                                                <span class="ttl-24">미응시</span>
                                                @else
                                                <span class="ttl-24" style="color: #3941A2;">응시 완료</span>
                                                @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- card -->
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
</section>
<script>
    var element = document.getElementById("curriculum2");
    element.classList.add("dropdown-menu-item");
</script>
@endsection