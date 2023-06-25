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
                            <h2 class="text-left text-white">수강생 관리</h2>
                        </div>
                    </div>
                </div>


            </section>
            <div class="row" style="font-size: 10px; text-align: center;">
                <div class="col-lg-12">

                    <div class="row my-5">
                        <div class="col-2" style="color: #FFFFFF;">
                            <select class="form-select mr-sm-2 height-52 search-bar-custom">
                                <option>2023년도 1학기</option>
                                <option>2023년도 1학기</option>
                                <option>2023년도 1학기</option>
                            </select>
                        </div>
                        <div class="col-2" style="color: #FFFFFF;">
                            <select class="form-select mr-sm-2 height-52 search-bar-custom">
                                <option>당뇨 - 간호학과</option>
                                <option>당뇨 - 간호학과</option>
                                <option>당뇨 - 간호학과</option>
                            </select>
                        </div>
                        <div class="col-2" style="color: #FFFFFF;">
                            <select class="form-select mr-sm-2 height-52 search-bar-custom">
                                <option>전체</option>
                                <option>전체</option>
                                <option>전체</option>
                            </select>
                        </div>
                        <div class="col-4">
                        </div>
                        <div class="col-2" style="color: #FFFFFF;">
                            <select class="form-select mr-sm-2 height-52 search-bar-custom">
                                <option>이름 순</option>
                                <option>이름 순</option>
                                <option>이름 순</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">

                <div class="col-md-8 py-2">
                    Total &nbsp;|&nbsp; 70
                </div>
                <div class="col-md-4">
                    <form class="form-inline justify-content-end mx-3 my-lg-0">
                        <input class="form-control mr-sm-2 height-52 search-bar-custom" type="search" placeholder="검색어를 입력하세요." aria-label="Search">
                        <button class="btn btn-outline-secondary btn-2 my-2 my-sm-0" type="submit">검색</button>
                    </form>
                </div>

            </div>

            <div class="row" style="font-size: 14px;">

                <div class="col-lg-12 border-rad-5 mb-4">
                    <table style="width: 100%;">
                        <tr style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                            <th style="width: 5%; padding: 10px;"><input type="checkbox"></th>
                            <th style="width: 6%; padding: 10px;">번호</th>
                            <th style="width: 8%; padding: 10px;">이름</th>
                            <th style="width: 6%; padding: 10px;">성별</th>
                            <th style="width: 9%; padding: 10px;">학과</th>
                            <th style="width: 16%">학년/학번</th>
                            <th style="width: 12%">사전 학습 평가</th>
                            <th style="width: 10%">본 학습 평가</th>
                            <th style="width: 10%">리포트</th>
                            <th style="width: 10%">총점(100점)</th>
                            <th style="width: 8%">수료 여부</th>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                            <td style="width: 6%; padding: 10px;">70</td>
                            <td style="width: 8%; padding: 10px;">
                                <a href="{{route('MemberInfoMng')}}">김선미</a>
                            </td>
                            <td style="width: 6%; padding: 10px;">여</td>
                            <td style="width: 9%; padding: 10px;">간호학과</td>
                            <td style="width: 16%; padding: 10px;">3학년/2019123456</td>
                            <td style="width: 12%; padding: 10px;">30점/40점</td>
                            <td style="width: 10%; padding: 10px;">40점/50점</td>
                            <td style="width: 10%; padding: 10px;">10점/10점</td>
                            <td style="width: 10%; padding: 10px;color: #3941A2;"><b>80점</b></td>
                            <td style="width: 8%; padding: 10px;color: #3941A2;"><b>수료</b></td>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                            <td style="width: 6%; padding: 10px;">70</td>
                            <td style="width: 8%; padding: 10px;">
                                <a href="{{route('MemberInfoMng')}}">김선미</a>
                            </td>
                            <td style="width: 6%; padding: 10px;">여</td>
                            <td style="width: 9%; padding: 10px;">간호학과</td>
                            <td style="width: 16%; padding: 10px;">3학년/2019123456</td>
                            <td style="width: 12%; padding: 10px;">30점/40점</td>
                            <td style="width: 10%; padding: 10px;">40점/50점</td>
                            <td style="width: 10%; padding: 10px;">10점/10점</td>
                            <td style="width: 10%; padding: 10px;color: #3941A2;"><b>80점</b></td>
                            <td style="width: 8%; padding: 10px;color: #3941A2;"><b>수료</b></td>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                            <td style="width: 6%; padding: 10px;">70</td>
                            <td style="width: 8%; padding: 10px;">
                                <a href="{{route('MemberInfoMng')}}">김선미</a>
                            </td>
                            <td style="width: 6%; padding: 10px;">여</td>
                            <td style="width: 9%; padding: 10px;">간호학과</td>
                            <td style="width: 16%; padding: 10px;">3학년/2019123456</td>
                            <td style="width: 12%; padding: 10px;">30점/40점</td>
                            <td style="width: 10%; padding: 10px;">40점/50점</td>
                            <td style="width: 10%; padding: 10px;">10점/10점</td>
                            <td style="width: 10%; padding: 10px;color: #3941A2;"><b>80점</b></td>
                            <td style="width: 8%; padding: 10px;color: #3941A2;"><b>수료</b></td>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                            <td style="width: 6%; padding: 10px;">70</td>
                            <td style="width: 8%; padding: 10px;">
                                <a href="{{route('MemberInfoMng')}}">김선미</a>
                            </td>
                            <td style="width: 6%; padding: 10px;">여</td>
                            <td style="width: 9%; padding: 10px;">간호학과</td>
                            <td style="width: 16%; padding: 10px;">3학년/2019123456</td>
                            <td style="width: 12%; padding: 10px;">30점/40점</td>
                            <td style="width: 10%; padding: 10px;">40점/50점</td>
                            <td style="width: 10%; padding: 10px;">10점/10점</td>
                            <td style="width: 10%; padding: 10px;color: #3941A2;"><b>80점</b></td>
                            <td style="width: 8%; padding: 10px;color: #3941A2;"><b>수료</b></td>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                            <td style="width: 6%; padding: 10px;">70</td>
                            <td style="width: 8%; padding: 10px;">
                                <a href="{{route('MemberInfoMng')}}">김선미</a>
                            </td>
                            <td style="width: 6%; padding: 10px;">여</td>
                            <td style="width: 9%; padding: 10px;">간호학과</td>
                            <td style="width: 16%; padding: 10px;">3학년/2019123456</td>
                            <td style="width: 12%; padding: 10px;">30점/40점</td>
                            <td style="width: 10%; padding: 10px;">40점/50점</td>
                            <td style="width: 10%; padding: 10px;">10점/10점</td>
                            <td style="width: 10%; padding: 10px;color: #3941A2;"><b>80점</b></td>
                            <td style="width: 8%; padding: 10px;color: #3941A2;"><b>수료</b></td>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                            <td style="width: 6%; padding: 10px;">70</td>
                            <td style="width: 8%; padding: 10px;">
                                <a href="{{route('MemberInfoMng')}}">김선미</a>
                            </td>
                            <td style="width: 6%; padding: 10px;">여</td>
                            <td style="width: 9%; padding: 10px;">간호학과</td>
                            <td style="width: 16%; padding: 10px;">3학년/2019123456</td>
                            <td style="width: 12%; padding: 10px;">30점/40점</td>
                            <td style="width: 10%; padding: 10px;">40점/50점</td>
                            <td style="width: 10%; padding: 10px;">10점/10점</td>
                            <td style="width: 10%; padding: 10px;color: #3941A2;"><b>80점</b></td>
                            <td style="width: 8%; padding: 10px;color: #3941A2;"><b>수료</b></td>
                        </tr>
                        <tr style="border-bottom: #ccc solid thin;">
                            <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                            <td style="width: 6%; padding: 10px;">70</td>
                            <td style="width: 8%; padding: 10px;">
                                <a href="{{route('MemberInfoMng')}}">김선미</a>
                            </td>
                            <td style="width: 6%; padding: 10px;">여</td>
                            <td style="width: 9%; padding: 10px;">간호학과</td>
                            <td style="width: 16%; padding: 10px;">3학년/2019123456</td>
                            <td style="width: 12%; padding: 10px;">30점/40점</td>
                            <td style="width: 10%; padding: 10px;">40점/50점</td>
                            <td style="width: 10%; padding: 10px;">10점/10점</td>
                            <td style="width: 10%; padding: 10px;color: #3941A2;"><b>80점</b></td>
                            <td style="width: 8%; padding: 10px;color: #3941A2;"><b>수료</b></td>
                        </tr>

                    </table>
                    <!-- Hidden Section -->
                    <div class="item-flex-center my-5 d-none">
                        <div class="my-5">
                            <div class="pt-4">
                                <span class="table-bottom-txt">검색어와 일치한 내용이 없어요</span>
                            </div>
                            <div class="item-flex-center my-4">
                                <a href="#" class="btn btn-5">목록으로 돌아가기</a>
                            </div>
                        </div>
                    </div>
                    <div class="border-b"></div>
                </div>

                <div class="col-4 item-flex-left">
                    <a href="#" class="btn btn-2 my-2 my-sm-1 mr-2">메일 발송</a>
                    <a href="#smsModal" data-bs-toggle="modal" class="btn btn-2 my-2 my-sm-1 mr-2">SMS 발송</a>
                </div>
                <div class="col-8 item-flex-right">
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

            </div>

        </div>

        <!-- Confirmation Alert Modal -->
        <div class="modal fade" id="smsModal" aria-hidden="true" aria-labelledby="smsModalContent" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header mt-3 mb-1">
                        <h5 class="alert-title-modal-top text-center" id="smsModalContent">SMS 발송</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                        <div class="item-flex-center pb-2 position-rel">
                            <textarea class="form-control val-text" rows="7" name="" id="" value="" aria-describedby="">내용을 입력하세요.</textarea>

                            <!-- If Deactive -->
                            <div class="sms-word-sount">
                                0/1000
                            </div>
                            <!-- If Active -->
                            <div class="sms-word-sount d-none">
                                <span class="word-count-active">232</span>/1000
                            </div>

                        </div>
                        <div class="item-flex-right my-3">
                            <!-- If Active -->
                            <a href="{{route('MemberInfoMng')}}" class="btn btn-2 d-none">SMS 발송</a>
                            <!-- If Deactive -->
                            <a href="#" class="btn btn-3">SMS 발송</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Confirmation Alert Modal -->

    </div>
    </div>
</section>
@endsection