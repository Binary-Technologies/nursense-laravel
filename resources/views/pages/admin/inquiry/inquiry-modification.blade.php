@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">1:1문의 답변 상세</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/inquiryDash') }}">1:1문의 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">1:1문의 답변 상세</li>
        </ol>
    </nav>
</div>

<!-- Inquiry Management Start -->

<form action="/admin/inquiryUpdate/{{$inquiry->id}}" method="post">
   @csrf
    @method('PUT')
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">
        <table class="table align-middle table-hover mb-4">
            <tbody class="text-center">

                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td width-10 height-52">작성자</td>
                    <td colspan="5" class="table-td-text2 width-40">
                        <div class="height-52 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                {{$inquiry->writerName}}
                            </label>
                        </div>
                    </td>
                    <td scope="row" class="table-td-text1 bg-td width-10 height-52">문의 일자</td>
                    <td colspan="4" class="table-td-text2 width-40">
                        <div class="height-52 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                {{$inquiry->created_at}}
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">제목</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                {{$inquiry->title}}
                            </label>
                        </div>
                    </td>
                </tr>
                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">내용</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4 my-2">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                {{$inquiry->inquiryDetail}}
                            </label>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
        <table class="table align-middle table-hover">
            <tbody class="text-center">

                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">답변 일자</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                {{$inquiry->updated_at}}
                            </label>
                        </div>
                    </td>
                </tr>
                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">답변</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="item-flex-start width-100 ps-4 my-3">
                            <textarea class="form-control val-text" name="contents" id="contents" placeholder="답변을 입력하세요." aria-describedby="Contents Input" rows="4">{{old('contents', $inquiry->answer)}}</textarea>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <a href="#confirmationModal" class="btn btn11" data-bs-toggle="modal">
                답변 수정
            </a>
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
                <h5 class="alert-title text-center mt-1 mb-4">답변 수정</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    수정 사항을 저장하시겠습니까?
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <a href="{{ route('inquiryUpdate', ['inquiry' => $inquiry->id]) }}" class="btn btn-alert1">
                            취소
                        </a>
                        
                    </div>
                    <div class="mx-1">
                        <button type="submit" class="btn btn-alert2">수정</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Confirmation Alert Modal -->



</div>
<!-- Inquiry Management End -->
</form>
@endsection