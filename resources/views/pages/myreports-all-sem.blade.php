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
                    <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">리포트 상세</li>
                </ol>
            </nav>

            <div class="mt-4">

                <div class="table-responsive pt-4 mb-3">
                    <table class="table align-middle table-hover">
                        <tbody class="text-center">

                            <tr class="table-head-2">
                                <td scope="row" class="table-td-text1 bg-td height-52">제목</td>
                                <td colspan="8" class="table-td-text2">
                                    <div class="height-52 item-flex-left pl-4 pr-5">
                                        <label class="lbl-y2 py-0 my-0 pr-5">
                                            {{$report->title}}
                                            {{-- 가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다. --}}
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="table-td-text1 bg-td height-52">등록일</td>
                                <td colspan="8" class="table-td-text2">
                                    <div class="height-52 item-flex-left pl-4 pr-5">
                                        <label class="lbl-y2 py-0 my-0 pr-5">
                                            {{$report->publish_date}}
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="table-td-text1 bg-td height-52">마감일</td>
                                <td colspan="8" class="table-td-text2">
                                    <div class="height-52 item-flex-left pl-4 pr-5">
                                        <label class="lbl-y2 py-0 my-0 pr-5">
                                            {{$report->deadline_date}}
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="table-td-text1 bg-td height-52">내용</td>
                                <td colspan="8" class="table-td-text2">
                                    <div class="pl-4 pr-5">
                                        <label class="lbl-y2 py-0 my-0 mr-0">
                                            {{$report->content}}
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-head-3">
                                <td scope="row" class="table-td-text1 bg-td height-52">첨부 자료</td>
                                <td colspan="8" class="table-td-text2">
                                    <div class="pl-4 pr-5">
                                        <div class="height-52 item-flex-left">
                                            <span class="ml-2">
                                                <ul>
                                                    @foreach(json_decode($report->file_path) as $filePath)
                                                        <li>
                                                            <span class="i-color-1"><i class='far fa-file-alt'></i></span>
                                                                <span class="ms-2">
                                                                <a href="{{ Storage::url($filePath) }}" target="_blank">
                                                                    {{ basename($filePath)}}
                                                                </a>
                                                            </span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="row my-5">
                    <div class="col-12 item-flex-right">
                        <!-- Delete -->
                        <a href="#deleteConfirmationModal" class="btn-4 mr-4" data-bs-toggle="modal">삭제</a>
                        <!-- Modify -->
                        <a href="{{route('reportsModify')}}" class="btn-2 mr-4">수정</a>
                        <!-- List -->
                        <a href="#" class="btn-5 mr-4">목록</a>
                    </div>
                </div>
            </div>

            <!-- Delete Confirm Alert Modal -->
            <div class="modal fade" id="deleteConfirmationModal" aria-hidden="true" aria-labelledby="deleteConfirmationModalContent" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center my-3" id="deleteConfirmationModalContent"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0">
                            <h5 class="alert-title text-center mt-1 mb-4">리포트 삭제</h5>
                            <p class="alert-text text-center mt-2 mb-5">
                                본 학습 1 리포트를 삭제하시겠습니까?
                            </p>

                            <div class="item-flex-center my-2">
                                <div class="mx-1">
                                    
                                    <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                                </div>
                                <div class="mx-1">
                                    <form action="/profile/delete/{{$report->id}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-alert2" data-bs-target="#deleteCompletionModal" data-bs-toggle="modal">삭제</button>
                                    </form>
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
                                본 학습 1 리포트가 삭제되었습니다.
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
                                본학습 1 리포트 등록을 완료하였습니다.
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