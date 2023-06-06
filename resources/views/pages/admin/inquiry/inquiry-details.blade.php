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
                        <div class="height-52 item-flex-align-start ps-4 my-2">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                {{$inquiry->answer}}
                            </label>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <a href="{{ route('inquiryUpdate', ['inquiry' => $inquiry->id]) }}" class="btn btn13">
                답변 수정
            </a>
        </div>
    </div>

</div>


</div>
<!-- Inquiry Management End -->

@endsection