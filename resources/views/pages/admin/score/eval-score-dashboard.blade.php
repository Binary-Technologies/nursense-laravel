@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">평가 배점 관리</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/scoreEvalDash') }}">배점 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">평가 배점 관리</li>
        </ol>
    </nav>
</div>

<!-- Score Management Start -->
<div class="container-fluid px-0">

    <div class="rounded pt-4"></div>

    <div class="table-responsive mb-3">
        <table class="table align-middle table-hover">
            <thead class="thead-light text-center">
                <tr class="table-head-1">
                    <th scope="col" class="table-th-text">
                        <div class="item-flex-align-center height-40">
                            사전 학습 평가
                        </div>
                    </th>
                    <th scope="col" class="table-th-text">
                        <div class="item-flex-align-center height-40">
                            본 학습(최종) 평가
                        </div>
                    </th>
                    <th scope="col" class="table-th-text">
                        <div class="item-flex-align-center height-40">
                            리포트
                        </div>
                    </th>
                    <th scope="col" class="table-th-text">
                        <div class="item-flex-align-center height-40">
                            총 평가 점수
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>
                        <div class="item-flex-align-center height-40">
                            {{ $score->pre_learning }}점
                        </div>
                    </td>
                    <td>
                        <div class="item-flex-align-center height-40">
                            {{ $score->main_study }}점
                        </div>
                    </td>
                    <td>
                        <div class="item-flex-align-center height-40">
                            {{ $score->report }}점
                        </div>
                    </td>
                    <td>
                        <div class="item-flex-align-center height-40">
                            100점
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <a href="{{ route('scoreEvalUpdate') }}" class="btn btn13">
                수정
            </a>
        </div>
    </div>

</div>
<!-- Score Management End -->
@endsection