@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">수료증 관리</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/scoreCertifyDash') }}">배점 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">수료증 관리</li>
        </ol>
    </nav>
</div>

<!-- Score Management Start -->
<div class="container-fluid px-0">

    <div class="rounded pt-4"></div>

    <div class="table-responsive pt-4 mb-3">

        <!-- 1 -->
        <div class="mt-3 mb-4">
            <h4 class="ttl-acc-blue position-rel title-border-t">수료증 발급 커트라인</h4>
        </div>
        <table class="table align-middle table-hover mb-5">
            <tbody class="text-center">

                <tr class="table-head-2">
                    <td colspan="10" class="table-td-text1 bg-td height-30 text-left">
                        <span class="ms-5">
                            수료증 발급 커트라인
                        </span>
                    </td>
                </tr>
                <tr class="table-head-3">
                    <td class="ps-5">
                        <div class="item-flex-start ps-4 py-3">
                            80점
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>

        <div class="mb-4"></div>

        <!-- 2 -->
        <div class="mt-5 mb-4">
            <h4 class="ttl-acc-blue position-rel title-border-t">수료증 설명</h4>
        </div>
        <table class="table align-middle table-hover">
            <tbody class="text-center">

                <tr class="table-head-1">
                    <td scope="row" class="table-td-text1 bg-td height-52">수료증 설명</td>
                    <td colspan="8" class="table-td-text2 bg-white-cus">
                        <div class="item-flex-align-start ps-4 pe-5 py-3">
                            <label class="lbl-y2 pe-5">
                                가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다. 가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다. 가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                            </label>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <a href="{{ route('scoreCertifyUpdate') }}" class="btn btn13">
                수정
            </a>
        </div>
    </div>

</div>
<!-- Score Management End -->
@endsection