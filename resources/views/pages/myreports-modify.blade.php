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
                            <h2 class="text-left text-white">리포트</h2>
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
                        <a href="{{ url('prelearning') }}">리포트</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="{{ url('prelearning') }}">본 학습 1 리포트</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="{{ url('prelearning') }}">리포트 상세</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">수정</li>
                </ol>
            </nav>

            <div class="mt-4">
<form action="/profile/report/update/{{$report->id}}" method="post" enctype="multipart/form-data">
    @csrf
                <div class="row mb-4 pr-4">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <h4 class="form-lbl1 mb-3">* 제목</h4>
                        <div class="item-flex-center my-2">
                            <input type="text" class="form-control val-text py-2 height-52" name="title" id="" placeholder="" value="{{$report->title}}" aria-describedby="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 pl-0">
                        <h4 class="form-lbl1 mb-3">* 마감일</h4>
                        <div class="item-flex-center my-2">
                            <input type="date" class="form-control val-text py-2 height-52 mr-3" name="date" id="" placeholder="" value="{{$date}}" aria-describedby="">
                            <select name="hour" class="form-select val-text py-2 height-52 width-50 mr-3">
                                <option value="{{$hour}}" selected>{{$hour}} <span class="ml-3">시</span></option>
                                <option value="00">00:00</option>
                                <option value="01">01:00</option>
                                <option value="02">02:00</option>
                                <option value="03">03:00</option>
                                <option value="04">04:00</option>
                                <option value="05">05:00</option>
                                <option value="06">06:00</option>
                                <option value="07">07:00</option>
                                <option value="08">08:00</option>
                                <option value="09">09:00</option>
                                <option value="10">10:00</option>
                                <option value="11">11:00</option>
                                <option value="12">12:00</option>
                                <option value="13">13:00</option>
                                <option value="14">14:00</option>
                                <option value="15">15:00</option>
                                <option value="16">16:00</option>
                                <option value="17">17:00</option>
                                <option value="18">18:00</option>
                                <option value="19">19:00</option>
                                <option value="20">20:00</option>
                                <option value="21">21:00</option>
                                <option value="22">22:00</option>
                                <option value="23">23:00</option>
                            </select>
                            <select name="minute" class="form-select val-text py-2 height-52 width-50">
                                <option value="{{$minute}}" selected>{{$minute}} <span class="ml-3">분</span></option>
                                <option value="00">00</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-4 pr-4">
                    <div class="col-12">
                        <h4 class="form-lbl1 mb-3">* 내용</h4>
                        <div class="item-flex-center my-2">
                            <textarea class="form-control val-text-area py-2" name="content" id="" value="" rows="7" aria-describedby="">
                                {{$report->content}}
                            </textarea>
                        </div>
                    </div>
                </div>

                <div class="row mb-4 pr-4">
                    <div class="col-12">
                        <h4 class="form-lbl1 mb-3">첨부파일</h4>
                        <div class="item-flex-center">
                            <div class="width-100">
                                <div class="img-up-box">
                                    <div class="item-flex-center mx-5 mt-5">
                                        @foreach(json_decode($report->file_path) as $filePath)
                                            
                                        <div class="width-100 bg-color-3 border-rad-10 position-rel">
                                            <p class="ttl-12 pt-3 pl-3"> <a href="{{ Storage::url($filePath) }}" class="form-control val-text file-up-bar-custom" target="_blank">
                                                {{ basename($filePath) }}
                                            </a> 
                                        </p>
                                            <a href="#deleteConfirmationModal" class="ttl-17 move-right3 title-border-b1" data-bs-toggle="modal">삭제</a>
                                        </div>
                                        
                                        @endforeach
                                    </div>
                                    <div class="img-up-box-inner">
                                        <div class="mt-1">
                                            <div class="item-flex-center">
                                                <input type="file" class="form-control-file" name="attachments[]" id="attachment" multiple>
                                            </div>
                                            <p class="modal-inner-text2 text-center mb-0">또는 여기로 파일을 끌어와주세요.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="modal-inner-text3">
                                    * 500mb이하의 jpg, png, pdf, hwp, docx파일만 등록할 수 있습니다.<br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <div class="col-12 item-flex-right">
                        <!-- If Completed -->
                        <button type="submit" class="btn-2 mr-4">
                            리포트 수정
                        </button>
                        {{-- <a href="#confirmationModal" class="btn-2 mr-4" data-bs-toggle="modal">리포트 수정</a> --}}
                        <!-- If Deactive -->
                        <!-- <a href="#confirmationModal" class="btn-2 mr-4" data-bs-toggle="modal">리포트 수정</a> -->
                    </div>
                </div>
            </div>
        </form>
            <!-- Delete Confirm Alert Modal -->
            <div class="modal fade" id="deleteConfirmationModal" aria-hidden="true" aria-labelledby="deleteConfirmationModalContent" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center my-3" id="deleteConfirmationModalContent"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0">
                            <h5 class="alert-title text-center mt-1 mb-4">첨부파일 삭제</h5>
                            <p class="alert-text text-center mt-2 mb-5">
                                AdobeStock_318451253.jpeg <br>
                                파일을 삭제하시겠습니까?
                            </p>

                            <div class="item-flex-center my-2">
                                <div class="mx-1">
                                    <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                                </div>
                                <div class="mx-1">
                                    <button class="btn btn-alert2" data-bs-target="#deleteCompletionModal" data-bs-toggle="modal">삭제</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Delete Confirm Alert Modal -->
            <!-- Delete Complete Alert Modal -->
            <div class="modal fade" id="deleteCompletionModal" aria-hidden="true" aria-labelledby="deleteCompletionModalContent" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center my-3" id="deleteCompletionModalContent"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0">
                            <p class="alert-text2 text-center mt-2 mb-5">
                                선택한 파일을 삭제 완료하였습니다.
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
            <!-- Delete Complete Alert Modal -->

            <!-- Confirmation Alert Modal -->
            <div class="modal fade" id="confirmationModal" aria-hidden="true" aria-labelledby="confirmationModalContent" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center my-3" id="confirmationModalContent"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0">
                            <h5 class="alert-title text-center mt-1 mb-4">리포트 수정</h5>
                            <p class="alert-text text-center mt-2 mb-5">
                                본 학습 1 리포트를 수정하시겠습니까?
                            </p>

                            <div class="item-flex-center my-2">
                                <div class="mx-1">
                                    <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                                </div>
                                <div class="mx-1">
                                    <button class="btn btn-alert2" data-bs-target="#completionModal" data-bs-toggle="modal">수정</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Confirmation Alert Modal -->
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
                                본 학습 1 리포트의 수정사항이<br>
                                성공적으로 저장되었습니다.
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