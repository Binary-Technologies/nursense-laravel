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
                                김이나
                            </label>
                        </div>
                    </td>
                    <td scope="row" class="table-td-text1 bg-td width-10 height-52">문의 일자</td>
                    <td colspan="4" class="table-td-text2 width-40">
                        <div class="height-52 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                2022.04.28
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">제목</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                제목제목제목
                            </label>
                        </div>
                    </td>
                </tr>
                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">내용</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4 my-2">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                별과 그들에게 대한 그들의 투명하되 사막이다. 물방아 하여도 심장의 것이다.<br>
                                들어 무한한 가장 날카로우나 미묘한 가지에 무엇을 구하기 것이다. 가슴에 피가 아니더면, 그들은 끓는 사막이다.<br>
                                가지에 실로 고행을 소리다.이것은 우리의 전인 것이다.
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
                                2022.04.28
                            </label>
                        </div>
                    </td>
                </tr>
                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">답변</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4 my-2">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                별과 그들에게 대한 그들의 투명하되 사막이다. 물방아 하여도 심장의 것이다.<br>
                                들어 무한한 가장 날카로우나 미묘한 가지에 무엇을 구하기 것이다. 가슴에 피가 아니더면, 그들은 끓는 사막이다.<br>
                                가지에 실로 고행을 소리다.이것은 우리의 전인 것이다.
                            </label>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <a href="{{ route('inquiryUpdate') }}" class="btn btn13">
                답변 수정
            </a>
        </div>
    </div>

</div>


</div>
<!-- Inquiry Management End -->

@endsection