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
                                <h2 class="text-left text-white mb0" style="font-family: pretendard-bold; font-size: 24px; color: #fff;">학습 '학습 1'</h2>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row my-5">

                    <div class="col-lg-12">
                        <ul class="bread-crumb item-flex-left">
                            <li><a href="index.php" class="ttl-20">교육과정</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li><a href="#" class="ttl-20">본학습</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li><a href="curriculum.php" class="ttl-20">학습</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li><a href="learning.php" class="ttl-20">당뇨</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li class="ttl-21">학습 1</li>
                        </ul>
                    </div>

                </div>

                <div class="row" style="padding: 1%;">
                    <!-- card -->
                    <div class="col-lg-12 shadow border-rad-10 py-2 mb-3 pl-0 pr-0 bg-learning-info">

                        <div class="row p20">
                            <div class="pie_progress col-md-2" role="progressbar" data-goal="75" data-barcolor="#212880" data-barsize="20" aria-valuemin="0" aria-valuemax="100">
                                <div class="pie_progress__number top-104">0%</div>
                            </div>
                            <div class="col-md-7 border-rad-5 mb-3 px-2">
                                <div class="row">
                                    <div class="col-md-12 item-flex-left position-rel curr-in-box pt-4 pb-2">
                                        <div class="ttl-2">
                                            {{ $study->mainStudy->name}}
                                        </div>
                                        <div class="ttl-20">
                                            {{ $study->mainStudy->instructor->name }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 position-rel">
                                        <span class="ttl-1 pr-4">종료일</span>
                                        <span class="br-right-2"></span>
                                        <span class="ttl-1">{{ $study->mainStudy->end_date }}</span>
                                        <div class="mt-2">
                                            <span class="ttl-1">
                                                {{ $study->mainStudy->description }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-4">
                                <div class="align-item-top-end mb-5">
                                    <a href="#"><span class="ttl-8-2 pr-4 a-learn">{{ $study->mainStudy->curriculum->name }}</span></a>
                                </div>
                                <div class="align-item-top-end">
                                    <button class="btn btn-outline-secondary btn-sm btn-learn">프로그램 실행</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- card -->
                </div>

                <!-- Title 1 start -->
                <div class="row py-3">
                    <div class="col-lg-12 pl-0 py-5">
                        <h4 class="ttl-5 relative-block title-border-t">최종 평가</h4>
                        
                    </div>
                </div>
                @if($study->mainStudy->final == null)
                <h1>Not added</h1>
                @else
                <div class="row my-4" style="width: 100%;">
                    <div class="col-lg-12">
                        <table style="width: 100%;">
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="width: 10%; padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        제목
                                    </td>
                                    <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        {{ $study->mainStudy->final->name }}
                                    </td>
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        등록일
                                    </td>
                                    <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        {{ $study->mainStudy->final->register_date }}
                                    </td>
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        마감일
                                    </td>
                                    <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        {{ $study->mainStudy->final->deadline_date }}
                                    </td>
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        내용
                                    </td>
                                    <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        {{ $study->mainStudy->final->description }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px;" colspan="2">&nbsp;</td>
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="width: 10%; padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        응시 여부
                                    </td>
                                    @if(count($study->userFinalAnswers) > 0)
                                    <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #3941A2;">
                                        응시 완료
                                    </td>
                                    @else
                                    <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #FF625F;">
                                        제목
                                    </td>
                                    @endif
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        응시일
                                    </td>
                                    <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        {{ count($study->userFinalAnswers) > 0 ? $study->userFinalAnswers[0]->created_at : '' }}
                                    </td>
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        최종 점수
                                    </td>
                                    <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        @if(count($study->userFinalAnswers) > 0)
                                        @php $points = 0; @endphp
                                        @foreach ($study->userFinalAnswers as $item)
                                        @php $points += $item->points @endphp
                                        @endforeach
                                        {{ $points }}점
                                        <a href="/curriculum/learning/final-quiz/CheckAns/{{ $study->mainStudy->final->id }}">Answers</a>
                                        @else
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: right; padding: 20px; ">
                                        <a href="{{ $study->mainStudy->final->deadline_date > now() && count($study->userFinalAnswers) == 0 ? '/curriculum/learning/final-quiz/'.$study->mainStudy->final->id : '' }}" class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" style="background-color: #ffffff; color: #3941A2; padding-bottom: 10px;padding-top: 10px;padding-left: 35px; padding-right: 35px; border: 1px solid #3941A2; border-radius: 6px;">최종 평가 응시</a>
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
                @endif
                <!-- Title 1 end -->

                <!-- Title 2 start -->
                <div class="row py-3">
                    <div class="col-lg-12 pl-0 py-5">
                        <h4 class="ttl-5 relative-block title-border-t">최종 평가</h4>
                    </div>
                </div>
                @if($study->mainStudy->report == null)
                <h1>Not added</h1>
                @else
                <div class="row my-4" style="width: 100%;">
                    <div class="col-lg-12">
                        <table style="width: 100%;">
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="width: 10%; padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        제목
                                    </td>
                                    <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        {{ $study->mainStudy->report->title }}
                                    </td>
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        등록일
                                    </td>
                                    <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        {{ $study->mainStudy->report->publish_date }}
                                    </td>
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        마감일
                                    </td>
                                    <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        {{ $study->mainStudy->report->deadline_date }}
                                    </td>
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        내용
                                    </td>
                                    <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        {{ $study->mainStudy->report->content }}
                                    </td>
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        첨부 자료
                                    </td>
                                    <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        <img src="/images/pdf.png">
                                        <a href="{{ Storage::url($study->mainStudy->report->file_path) }}" target="_blank">
                                            {{ basename($study->mainStudy->report->file_path) }}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px;" colspan="2">&nbsp;</td>
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="width: 10%; padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        제출 여부
                                    </td>
                                    @if($study->userReport != null)
                                    <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #3941A2;">
                                        응시 완료
                                    </td>
                                    @else
                                    <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #FF625F;">
                                        미제출
                                    </td>
                                    @endif
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        채점 상황
                                    </td>
                                    <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        {{ $study->userReport != null ? $study->userReport->grade : '' }}
                                    </td>
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        제출일
                                    </td>
                                    <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        {{ $study->userReport != null ? $study->userReport->created_at : '' }}
                                    </td>
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        첨부파일
                                    </td>
                                    <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        {{ $study->userReport != null ? $study->userReport->file_name : '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: right; padding: 20px; ">
                                        @if($study->mainStudy->report->deadline_date > now() && $study->userReport == null)
                                        <form action="/curriculum/learning/report" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <input type="hidden" name="study_id" value="{{ $study->id }}">
                                            <label for="file" class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" style="background-color: #ffffff; color: #3941A2; padding-bottom: 10px;padding-top: 10px;padding-left: 35px; padding-right: 35px; border: 1px solid #3941A2; border-radius: 6px;">첨부파일 등록</label>
                                            <input type="file" style="visibility: hidden" name="file" id="file" required>
                                        </form>
                                        @elseif($study->mainStudy->report->deadline_date > now() && $study->userReport != null)
                                        <form action="/curriculum/learning/report" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <input type="hidden" name="study_id" value="{{ $study->id }}">
                                            <input type="hidden" name="report_id" value="{{ $study->userReport->id }}">
                                            <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #ffffff; color: #FF625F; padding-bottom: 10px;padding-top: 10px;padding-left: 35px; padding-right: 35px; border: 1px solid #3941A2; border-radius: 6px;">리포트 제출</button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
                @endif
                <!-- Title 2 end -->

                <!-- Title 3 start -->
                <div class="row py-3">
                    <div class="col-lg-12 pl-0 py-5">
                        <h4 class="ttl-5 relative-block title-border-t">최종 평가</h4>
                    </div>
                </div>
                @if($study->mainStudy->survey == null)
                <h1>Not added</h1>
                @else
                <div class="row my-4" style="width: 100%;">
                    <div class="col-lg-12">
                        <table style="width: 100%;">
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        제출일
                                    </td>
                                    <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                        {{ $study->mainStudy->end_date }}
                                    </td>
                                </tr>
                                <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                    <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                        첨부파일
                                    </td>
                                    @if($study->userSurvey != null)
                                    <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #3941A2;">
                                        응시 완료
                                    </td>
                                    @else
                                    <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #FF625F;">
                                        미제출
                                    </td>
                                    @endif
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: right; padding: 20px; ">
                                        <a href="{{ $study->mainStudy->end_date > now() && $study->userSurvey == null ? '/curriculum/learning/final-quiz/'.$study->mainStudy->final->id : '' }}" class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" style="background-color: #ffffff; color: #3941A2; padding-bottom: 10px;padding-top: 10px;padding-left: 35px; padding-right: 35px; border: 1px solid #3941A2; border-radius: 6px;">최종 평가 응시</a>
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
                @endif
                <!-- Title 3 end -->
            </div>
        </div>
    </div>
</section>
@endsection