@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">설문 항목</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/surveyItemDash') }}">통계 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">설문 항목</li>
        </ol>
    </nav>
</div>

<!-- Statistics Item Management Start -->
<div class="container-fluid px-0">

    <div class="rounded pt-4">

        <form method="post" id="statistics-item-filter-form" action="#">

            <!-- Table Section -->
            <div class="row mb-4">

                <div class="col-xl-10 col-lg-10 col-md-6 d-md-block list-count-outer">

                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                    <a href="{{ route('surveyItemReg') }}" class="btn btn-secondary btn3">
                        설문 추가
                    </a>
                </div>

            </div>

        </form>

    </div>

    <div class="table-responsive mb-3">

        <table class="table align-middle table-hover">
            <thead class="thead-light text-center">
                <tr class="table-head-1">
                    <th scope="col" class="table-th-text">번호</th>
                    <th scope="col" class="table-th-text">제목</th>
                    <th scope="col" class="table-th-text">문항</th>
                    <th scope="col" class="table-th-text">기능</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($surveys as $survey)
                <tr>
                    <td>{{ $survey->id }}</td>
                    <td class="text-left">{{ $survey->title }}</td>
                    <td class="text-left">
                        @foreach (json_decode($survey->questions) as $question)
                        <div>{{ $question }}</div>
                        @endforeach
                    </td>
                    <td>
                        <div class="height-52 item-flex-center">
                            <a href="{{ url('/admin/surveyItemUpdate', ['surveyItem' => $survey->id]) }}" class="btn btn5 btn5-1 width-70">
                                수정
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

<div class="item-flex-end mb-5">
    {{ $surveys->links('vendor.pagination.default') }}
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
                <h5 class="alert-title text-center mt-1 mb-4">임시 계정 발송</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    선택한 회원에게 임시 계정 발송을<br>
                    진행하시겠습니까?
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                    </div>
                    <div class="mx-1">
                        <button class="btn btn-alert2" data-bs-target="#completionModal" data-bs-toggle="modal">발송</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Confirmation Alert Modal -->
<!-- Completion Alert Modal -->
<div class="modal fade" id="completionModal" aria-hidden="true" aria-labelledby="completionModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="completionModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    임시 계정 발송을 완료하였습니다.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert3" data-bs-target="#" data-bs-toggle="modal">확인</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Completion Alert Modal -->

</div>
<!-- Statistics Item Management End -->

@endsection