@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">공지사항 상세</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/noticeDash') }}">컨텐츠 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/noticeDash') }}">공지사항 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">공지사항 상세</li>
        </ol>
    </nav>
</div>

<!-- Notice Management Start -->
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">
        <table class="table align-middle table-hover">
            <tbody class="text-center">
                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">메인 페이지 노출</td>
                    <td colspan="8" class="table-td-text3">
                        <div class="height-52 item-flex-align-start ps-4">
                            <label class="lbl-y2">
                                @if($notice->main_exposure == 0)노출

                        @else 미노출
                        
                        @endif
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">카드 노출</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4">
                            <label class="lbl-y2">
                                @if($notice->exposure == 0)노출

                        @else 미노출
                        
                        @endif
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">제목</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 pe-5">
                                {{$notice->title}}
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">등록일</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4">
                            <label class="lbl-y2">
                                {{$notice->created_at->format('Y-m-d')}}
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">조회수</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4">
                            <label class="lbl-y2">
                                {{$notice->views}}

                            </label>
                        </div>
                    </td>
                </tr>
                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">내용</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="ps-4 pe-5">
                            <div class="lbl-y2 mb-2">
                                <p class="text-justify">
                                    {!! html_entity_decode($notice->content) !!}
                                    
                                </p>
                               
                            </div>
                            <!-- <div class="item-flex-center">
                                <img src="{{asset('assets/img/banner-img.png')}}" class="width-100" alt="#">
                            </div> -->
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <a href="#confirmationModal" class="btn btn14" data-bs-toggle="modal">
                삭제
            </a>

            <a href="{{ route('noticeUpdate', ['notice' => $notice->id]) }}" class="btn btn13 ms-3">
                수정
            </a>
            
        </div>
    </div>

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
                        <a href="{{ route('noticeDetails', ['notice' => $notice->id]) }}">
                            <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                        </a>
                    </div>
                    <div class="mx-1">
                        <form action="{{ route('noticeDelete', ['notice' => $notice->id]) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-alert2" data-bs-target="#deleteCompletionModal" data-bs-toggle="modal">삭제</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete Confirmation Alert Modal -->



</div>
<!-- Notice Management End -->

@endsection