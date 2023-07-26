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

            <br>
            <div class="row mb-3">
                <div class="col-2">
                    <form class="form-inline justify-content-end my-2 my-lg-0">
                        <select class="form-select search-bar-custom" style="width: 250px;">
                            <option>전체 학기</option>
                            <option>당뇨</option>
                            <option>당뇨당뇨</option>
                            <option>당뇨당뇨당뇨</option>
                        </select>
                    </form>
                </div>
                <div class="col-2">
                    <form class="form-inline justify-content-end my-2 my-lg-0">
                        <select class="form-select search-bar-custom" style="width: 250px;">
                            <option>전체 학습 과정</option>
                            <option>당뇨</option>
                            <option>당뇨당뇨</option>
                            <option>당뇨당뇨당뇨</option>
                        </select>
                    </form>
                </div>
                <div class="col-8 pr-4" style="text-align: right;">
                    <div class="item-flex-right">
                        <input type="checkbox" class="mr-3" style="width: 18px; height: 18px;">
                        <p class="pt-3 pb-0">진행 중인 리포트만 보기</p>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-4">Total &nbsp;|&nbsp; 3</div>
            </div>
            @foreach ($reports as $report)

            <!-- card -->
            <div class="row mb-4 px-3">
                <div class="col-lg-12 shadow border-rad-5 mb-3 px-4 py-4">
                    <div class="row pb-4">
                        <div class="col-md-8 position-rel">
                            <span class="ttl-1 pr-4">{{$report->curriculum->name}}</span>
                            <br>
                            <span class="ttl-3" style="color: #9495A1; font-size: 11px;">제목 &nbsp;|</span>
                            <span class="ttl-3" style="color: #090909;">{{ $report->report->title }}</span>

                            <br />
                            <span class="ttl-3" style="color: #9495A1;">종료일 &nbsp;|</span>
                            <span class="ttl-3" style="color: #FF625F;">
                                {{ $report->report->deadline_date }}
                            </span>
                            <br />
                            <div class="curr-brd-r pl20 mt-3 border-rad-5" style="background-color: #F5F7FE; width: 300px;">
                                {{ $report->semester->semester }} . {{ $report->curriculum->name }} - {{ $report->department->name }}
                            </div>
                        </div>
                        <div class="col-md-4" style="text-align: right;">

                            <span class="ttl-3" style="color: #3941A2; font-size: 11px;">등록완료</span>
                            <br />
                            <span class="ttl-3" style="color: #7479BD; font-size: 11px;">({{ $report->report->publish_date }})</span>

                            <br />
                            <br />
                            <!-- <span class="curr-brd">
                                수정하기
                            </span> -->
                            <button class="btn btn-outline-secondary btn-sm btn-curr mr-2">수정하기</button>
                            <a href="/profile/reportsAllSem/{{$report->id}}" class="btn btn-outline-secondary btn-sm btn-curr2">
                                미리보기
                            </a>
                            {{-- <button class="btn btn-outline-secondary btn-sm btn-curr2" type="submit"></button> --}}
                        </div>
                    </div>

                </div>
            </div>
            <!-- card -->
            @endforeach           
            <div class="row my-5 px-3">

                <div class="col-8">Total &nbsp;|&nbsp; 70</div>
                <div class="col-2" style="color: #FFFFFF;">
                    <select class="form-select mr-sm-2 search-bar-custom">
                        <option>전체</option>
                        <option>전체</option>
                        <option>전체</option>
                    </select>
                </div>
                <div class="col-2" style="padding-left: 10px; color: #FFFFFF;">
                    <select class="form-select mr-sm-2 search-bar-custom">
                        <option>전체</option>
                        <option>전체</option>
                        <option>전체</option>
                    </select>
                </div>

            </div>

            <form action="/profile/reports/studentGrade" method="post">
                @csrf
                <div class="row mb-3" style="font-size: 10px;">
                    <div class="col-lg-12 mb-3">
                        <table class="p-2" style="width: 100%;">
                            <tr style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                                <th style="width: 5%; padding: 10px;"><input type="checkbox"></th>
                                <th style="width: 8%; padding: 10px;">번호</th>
                                <th style="width: 8%; padding: 10px;">이름</th>
                                <th style="width: 14%; padding: 10px;">학년/학번</th>
                                <th style="width: 9%; padding: 10px;">제출 여부</th>
                                <th style="width: 12%">제출 일시</th>
                                <th style="width: 30%">제출 파일</th>
                                <th class="text-center">PASS / FAIL</th>
                            </tr>
                            @foreach ($userReports as $userReport)
                                
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                                <td style="width: 8%; padding: 10px;">{{$userReport->id}}
                                    <input type="hidden" name="user_report_id[]" value="{{ $userReport->id }}">
                                </td>
                                <td style="width: 8%; padding: 10px;">{{$userReport->student->name}}</td>
                                <td style="width: 14%; padding: 10px;">{{$userReport->student->std_id}}</td>
                                <td style="width: 9%; padding: 10px;">제출</td>
                                <td style="width: 12%; padding: 10px;">{{$userReport->userReport->created_at}}</td>
                                <td style="width: 30%; padding: 10px;color: #3941A2;"><u>
                                                            <li>
                                                                <span class="i-color-1"><i class='far fa-file-alt'></i></span>
                                                                    <span class="ms-2">
                                                                    <a href="{{ Storage::url($userReport->userReport->file_path) }}" target="_blank">
                                                                        {{ basename($userReport->userReport->file_path)}}
                                                                    </a>
                                                                </span>
                                                            </li>
                                    </u></td>
                                <td>
                                    <div class="item-flex-center">
                                        <div class="pr-3">
                                            <div class="item-flex-center">
                                                <input name="grade" type="radio" value="1" class="mr-2" style="width: 18px; height: 18px;" {{ old('grade', $userReport->userReport->grade) == 1 ? 'checked' : '' }}>
                                                <p class="pt-3 pb-0" style="color: #1B1D1F;">PASS</p>
                                            </div>
                                        </div>
                                        <div class="pr-3">
                                            <div class="item-flex-left">
                                                <input name="grade" type="radio" value="0" class="mr-2" style="width: 18px; height: 18px;" {{ old('grade', $userReport->userReport->grade) == 0 ? 'checked' : '' }}>
                                                <p class="pt-3 pb-0" style="color: #1B1D1F;">FAIL</p>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                            
                        </table>
                    </div>
                    <div class="col-3 item-flex-left">
                        <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" style="background-color: #F3F4F8;color: #9495A1;">다운로드</button>
                    </div>
                    <div class="col-6 item-flex-center">
                        <nav aria-label="Page navigation muve gallery">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link pagination_link_arrows pagination_link_arrows_disabled" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&lt;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link pagination_link pagination_link_active" href="">1</a></li>
                                <li class="page-item"><a class="page-link pagination_link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link pagination_link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link pagination_link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link pagination_link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link pagination_link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link pagination_link" href="#">7</a></li>
                                <li class="page-item">
                                    <a class="page-link pagination_link_arrows" href="#" aria-label="Next">
                                        <span aria-hidden="true">&gt;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-3 item-flex-right">
                        {{-- <a href="#confirmationModal" data-bs-toggle="modal" class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #3941A2;color: #ffffff;">평가 저장</a> --}}
                        <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #3941A2;color: #ffffff;">
                            평가 저장
                        </button>
                    </div>

                    <div class="col-12 my-3">
                        <div style="background-color: #D7D9EC;color: #3941A2;padding: 20px; text-align: center;">제출 현황 닫기</div>
                    </div>

                </div>
        </form>

            <!-- card -->
            <div class="row mb-4 px-3">
                <div class="col-lg-12 shadow border-rad-5 mb-3 px-4 py-4">
                    <div class="row pb-4">
                        <div class="col-md-8 position-rel">
                            <span class="ttl-1 pr-4">사전 학습 1</span>
                            <br>
                            <span class="ttl-3" style="color: #9495A1; font-size: 11px;">제목 &nbsp;|</span>
                            <span class="ttl-3" style="color: #090909;">사전 학습 1 리포트</span>

                            <br />
                            <span class="ttl-3" style="color: #9495A1;">종료일 &nbsp;|</span>
                            <span class="ttl-3" style="color: #FF625F;">2023.01.11</span>
                            <br />
                            <div class="curr-brd-r pl20 mt-3 border-rad-5" style="background-color: #F5F7FE; width: 300px;">
                                2023년도 1학기 . 당뇨 - 간호학과
                            </div>
                        </div>
                        <div class="col-md-4" style="text-align: right;">

                            <span class="ttl-3" style="color: #3941A2; font-size: 11px;">등록완료</span>
                            <br />
                            <span class="ttl-3" style="color: #7479BD; font-size: 11px;">(2022.12.14)</span>

                            <br />
                            <br />
                            <!-- <span class="curr-brd">
                                수정하기
                            </span> -->
                            <button class="btn btn-outline-secondary btn-sm btn-curr mr-2">수정하기</button>
                            <button class="btn btn-outline-secondary btn-sm btn-curr2" type="submit">미리보기</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- card -->


            <!-- Confirmation Alert Modal -->
            <div class="modal fade" id="confirmationModal" aria-hidden="true" aria-labelledby="confirmationModalContent" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center my-3" id="confirmationModalContent"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0">
                            <h5 class="alert-title text-center mt-1 mb-4">리포트 평가</h5>
                            <p class="alert-text text-center mt-2 mb-5">
                                평가 내용을 저장하시겠습니까?
                            </p>

                            <div class="item-flex-center my-2">
                                <div class="mx-1">
                                    <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                                </div>
                                <div class="mx-1">
                                    <button class="btn btn-alert2" data-bs-target="#completionModal" data-bs-toggle="modal">평가</button>
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
                                수강생 리포트<br>
                                평가가 완료되었습니다.
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
        </div>
    </div>
</section>
@endsection