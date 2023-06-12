@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row">

            <div class="col-lg-2">
                @include('includes.sidenav-info')
            </div>

            <div class="col-lg-10" style="padding: 1%;">

                <section class="page-title text-center pt30 pb30 mt-4" style="background-image: linear-gradient(to right, #212880 , #4A227B); height: 190px">
                    <div class="pl30">
                        <div class="content-box">
                            <div class="title" style="margin-top: 40px;">
                                <h2 class="text-left text-white" style="font-family: pretendard-bold; font-size: 24px; color: #3941A2;">1:1 문의</h2>
                                <h5 class="text-left text-white" style="font-family: pretendard-regular; font-size: 14px; color: #3941A2;">문의를 남겨주시면 신속히 답변해 드리겠습니다.</h5>
                            </div>
                        </div>
                    </div>

                </section>
                <div class="row" style="font-size: 10px; text-align: center;">
                    <div class="col-lg-12">
                        
                        <style>.tab_hover{height: 44px; background-color: #F3F4F8; color: #616474;font-family: pretendard-medium; font-size: 16px;}.tab_hover:hover{background-color: #212880; color: #FFFFFF;}</style>
                        
                        <div class="row">
                            <div class="col-lg-4 mt-5 tab_hover" style="padding: 5px; background-color: #212880; color: #FFFFFF;">
                                <p style="margin-top: 8px;">전체</p>
                            </div>
                            <div class="col-lg-4 mt-5 tab_hover" style="padding: 5px;">
                                <p style="margin-top: 8px;">답변 대기</p>
                            </div>
                            <div class="col-lg-4 mt-5 tab_hover" style="padding: 5px;">
                                <p style="margin-top: 8px;">답변 완료</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row my-5" style="margin-left: 0px;">

                    <div class="col-md-8">
                        Total : 28
                    </div>
                    <div class="col-md-4">
                        <form class="form-inline justify-content-end mx-3 my-2 my-lg-0">
                            <div class="input-group">
                                    <span><i class="fas fa-search home-search-i" area-hidden="true"></i></span>
                                    <input type="search" name="search" value="{{ request('search') }}" class="form-control search-bar-custom" placeholder=" 검색어를 입력하세요." aria-label="Search">
                            </div>
                            
                            <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="width: 118px; height: 40px; margin-left: 20px;">검색</button>
                        </form>
                    </div>

                </div>

                <form action="/delete/inquiry" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="row" style="font-size: 14px;">
                        <div class="col-lg-12 border-rad-5 mt-2 px-4">
                            <table style="width: 100%; text-align: center; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                <tr style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                                <th style="width: 5%; padding: 10px;"><input type="checkbox" style="width: 24px; height: 24px;"/></th>
                                    <th style="width: 5%; padding: 20px;">번호</th>
                                    <th style="width: 65%">제목</th>
                                    <th style="width: 10%">등록 일</th>
                                    <th style="width: 15%">답변 상태</th>
                                </tr>

                                @foreach ($inquiries as $inquiry)
                                    
                                <tr style="border-bottom: #ccc solid thin;">
                                    <td style="width: 5%; padding: 10px;"><input name="ids[]" value="{{$inquiry->id}}" type="checkbox" style="width: 24px; height: 24px;"/></td>
                                    <td style="width: 5%; padding: 20px;">{{$inquiry->id}}</td>
                                    <td style="width: 65%; text-align: left;">
                                        <a href="/info/inquiry/details/{{$inquiry->id}}">
                                            {{$inquiry->title}}
                                        </a>
                                    </td>
                                    <td style="width: 10%">{{$inquiry->created_at}}</td>
                                    <td style="width: 15%">
                                        @if ($inquiry->status == 0)
                                            <span class="table-td-text4">답변 대기</span>
                                        @else
                                            답변 완료
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                
                            </table>
                        </div>
                    </div>
                    <div style="margin-top: 10px; float: left; margin-left: 20px;">
                        <a href="/info/inquiry/register" class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" style="background-color: #212880;color: #FFFFFF; width: 118px; height: 40px; margin-right: 10px; border-radius: 8px;">
                            문의 등록
                        </a>
                        <a href="#confirmationModal" class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" style="background-color: #F3F4F8;color: #9495A1; width: 118px; height: 40px; border: none; border-radius: 8px;" data-bs-toggle="modal">
                            삭제
                        </a>
                    </div>

                    
                    <!-- Delete Confirmation Alert Modal -->
                    <div class="modal fade" id="confirmationModal" aria-hidden="true" aria-labelledby="confirmationModalContent" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center my-3" id="confirmationModalContent"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body pt-0">
                                    <h5 class="alert-title text-center mt-1 mb-4">공지사항 삭제</h5>
                                    <p class="alert-text text-center mt-2 mb-5">
                                        해당 공지사항을 삭제하시겠습니까?
                                    </p>
                    
                                    <div class="item-flex-center my-2">
                                        <div class="mx-1">
                                            <a href="{{ route('inquiry') }}">
                                                <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                                            </a>
                                        </div>
                                        <div class="mx-1">
                                                <button type="submit" class="btn btn-alert2">삭제</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Delete Confirmation Alert Modal -->

                </form>
                
                <div class="pagination-container">
                    {{ $inquiries->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>
</section>


<!-- Delete Complete Alert Modal -->
<div class="modal" tabindex="-1"  style="display: {{ session('inquiry delete') ? 'block' : 'none'}}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="deleteCompletionModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    공지사항 삭제를 완료하였습니다.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <a href="{{route('inquiry')}}">
                            <button type="submit" class="btn btn-alert3" data-bs-target="#" data-bs-toggle="modal">확인</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete Complete Alert Modal -->
@endsection