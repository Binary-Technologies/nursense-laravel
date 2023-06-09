@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row">

            <div class="col-lg-2">
                @include('includes.sidenav-info')
            </div>


            <div class="col-lg-10" style="padding: 1%;">

                <section class="page-title text-center pt30 pb30 mt-4" style="background-image: linear-gradient(to right, #212880 , #4A227B); height: 190px">
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="title" style="margin-top: -40px; margin-left: -40px;">
                                <h2 class="text-left text-white" style="font-family: pretendard-bold; font-size: 24px;">1:1 문의</h2>
                                <p class="text-left cl-w text-white" style="font-family: pretendard-regular; font-size: 14px;">문의를 남겨주시면 신속히 답변해 드리겠습니다.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                
                <div class="row my-5" style="margin-left: 0px;">
                
                    <div class="col-lg-12">
                        <ul class="bread-crumb item-flex-left">
                            <li><a href="news_main.php" class="ttl-20">정보마당</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li class="ttl-20">1:1 문의</li>
                        </ul>
                    </div>
                    <form action="/delete/inquiry/{{$inquiry->id}}" method="post">
                        @csrf
                        @method('DELETE')
                    <div class="row my-4" style="width: 100%;">
                    <div class="col-lg-12">
                        
                    <table style="width: 100%;">
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="width: 10%; padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    제목
                                </td>
                                <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                   {{$inquiry->title}}
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    등록일
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    {{$inquiry->created_at}}
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    답변 상태
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #767885;">
                                    @if ($inquiry->status == 0)
                                        <span class="table-td-text4">답변 대기</span>
                                    @else
                                        답변 완료
                                    @endif
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    내용
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    {{$inquiry->inquiryDetail}}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 20px;"></td>
                                </td>
                                <td style="padding: 20px;">
                                   
                                </td>
                            </tr>
                            @if ($inquiry->status === 1)
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    답변
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    {{$inquiry->answer}}
                                </td>
                            </tr>
                            
            
                            @endif

                            <tr>
                                <td colspan="2" style="text-align: right; padding: 20px; ">
                                    <a href="#confirmationModal" data-bs-toggle="modal" class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" style="background-color: #FF625F;border-color: #FF625F; color: #ffffff; padding-bottom: 10px;padding-top: 10px;padding-left: 50px;padding-right: 50px; border-radius: 6px;">
                                        삭제
                                    </a>

                                    <a href="/info/inquiry"  class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" style="background-color: #ffffff;color: #212880;padding-bottom: 10px;padding-top: 10px;padding-left: 50px;padding-right: 50px;border-color: #1B3EA8; border-radius: 6px;">
                                        목록
                                    </a>
                                   
                                </td>
                            </tr>
                    </table>

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
                                            <a href="/info/inquiry/details/{{$inquiry->id}}" class="btn btn-alert1">
                                                취소
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
                        
                    </div>
                    </div>
                </form>
                </div>

            </div>

        </div>
</section>
@endsection