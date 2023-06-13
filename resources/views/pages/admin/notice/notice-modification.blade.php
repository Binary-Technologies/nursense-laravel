@extends('layouts.admin')

@section('dashboardContent')
@include('includes.messages')

<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">공지사항 수정</h5>
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
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/noticeDetails') }}">공지사항 상세</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">공지사항 수정</li>
        </ol>
    </nav>
</div>

<!-- Notice Management Start -->
<form action="/admin/notice/noticeUpdate/{{$notice->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">
        <table class="table align-middle table-hover">
            <tbody class="text-center">
                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">메인 페이지 노출</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="form-check height-52 item-flex-align-start">
                            <input class="form-check-input ms-1 me-2" type="radio" name="flexRadioDefault" value="0" {{ old('flexRadioDefault', $notice->main_exposure) == 0 ? 'checked' : '' }}  id="flexRadioDefault1" >
                            <label class="form-check-label lbl-y1" for="flexRadioDefault1">
                                노출
                            </label>
                            <input class="form-check-input ms-1 me-2" type="radio" name="flexRadioDefault" value="1" {{ old('flexRadioDefault', $notice->main_exposure) == 1 ? 'checked' : '' }}  id="flexRadioDefault2">
                            <label class="form-check-label lbl-y1" for="flexRadioDefault2">
                                미노출
                            </label>
                        </div>
                    </td>
                </tr>
                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">카드 노출</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="form-check height-52 item-flex-align-start">
                            <input class="form-check-input ms-1 me-2" type="radio" name="flexRadioDefault2" value="0" {{ old('flexRadioDefault2', $notice->exposure) == 0 ? 'checked' : '' }}  id="flexRadioDefault3" >
                            <label class="form-check-label lbl-y1" for="flexRadioDefault3">
                                노출
                            </label>
                            <input class="form-check-input ms-1 me-2" type="radio" name="flexRadioDefault2" value="1" {{ old('flexRadioDefault2', $notice->exposure) == 1 ? 'checked' : '' }}  id="flexRadioDefault4">
                            <label class="form-check-label lbl-y1" for="flexRadioDefault4">
                                미노출
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">* 제목</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <input type="text" class="form-control val-text" name="title" id="noticeName" value="{{ old('title', $notice->title) }}" aria-describedby="Notice Title Input">
                        </div>
                    </td>
                </tr>

                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">* 내용</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="item-flex-start width-50 ml30 my-3">
                            <textarea class="form-control val-text" name="contents" id="contents" aria-describedby="Contents Input" rows="2"> {{ old('contents', $notice->content) }}</textarea>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <div class="item-flex-end">
                <a href="#confirmationModal" class="btn btn9" data-bs-toggle="modal">
                    수정 완료
                </a>
            </div>

            
        </div>
    </div>

</div>

<!-- Confirmation Alert Modal -->
<div class="modal fade" id="confirmationModal" aria-hidden="true" aria-labelledby="confirmationModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="confirmationModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <h5 class="alert-title text-center mt-1 mb-4">공지사항 수정</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    수정 사항을 저장하시겠습니까?
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                    </div>
                    <div class="mx-1">
                        <button type="submit" class="btn btn11">등록 완료</button>
                        <!-- <a href="#confirmationModal" class="btn btn9" data-bs-toggle="modal">
                            수정 완료
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Confirmation Alert Modal -->


</div>
</form>
<!-- Notice Management End -->
<script>
    ClassicEditor
    .create( document.querySelector( '#contents' ) )
    .catch( error => {
    console.error( error );
    } );
    </script>
    
@endsection
