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
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/scoreEvalDash') }}">평가 배점 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">평가 배점 수정</li>
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
                            * 사전 학습 평가
                        </div>
                    </th>
                    <th scope="col" class="table-th-text">
                        <div class="item-flex-align-center height-40">
                            * 본 학습(최종) 평가
                        </div>
                    </th>
                    <th scope="col" class="table-th-text">
                        <div class="item-flex-align-center height-40">
                            * 리포트
                        </div>
                    </th>
                    <th scope="col" class="table-th-text">
                        <div class="item-flex-align-center height-40">
                            * 총 평가 점수
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>
                        <div class="height-52 item-flex-start mx-2 my-2 position-rel">
                            <input type="text" class="form-control val-text" name="" id="" placeholder="" value="30" aria-describedby="Input">
                            <span class="score-text1">점</span>
                        </div>
                    </td>
                    <td>
                        <div class="height-52 item-flex-start mx-2 my-2 position-rel">
                            <input type="text" class="form-control val-text" name="" id="" placeholder="" value="60" aria-describedby="Input">
                            <span class="score-text1">점</span>
                        </div>
                    </td>
                    <td>
                        <div class="height-52 item-flex-start mx-2 my-2 position-rel">
                            <input type="text" class="form-control val-text" name="" id="" placeholder="" value="10" aria-describedby="Input">
                            <span class="score-text1">점</span>
                        </div>
                    </td>
                    <td class="width-30">
                        <div class="item-flex-align-center">
                            100점
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <a href="#confirmationModal" class="btn btn9" data-bs-toggle="modal">
                수정 완료
            </a>
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
                    <h5 class="alert-title text-center mt-1 mb-4">평가 배점 수정</h5>
                    <p class="alert-text text-center mt-2 mb-5">
                        수정 사항을 저장하시겠습니까?
                    </p>

                    <div class="item-flex-center my-2">
                        <div class="mx-1">
                            <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                        </div>
                        <div class="mx-1">
                            <button class="btn btn-alert2" data-bs-target="#completionModal" data-bs-toggle="modal">수정</button>
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
                        평가 배점 수정을 완료하였습니다.
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

    <!-- Error Alert Modal -->
    <div class="modal fade" id="errorModal" aria-hidden="true" aria-labelledby="errorModalContent" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center my-3" id="errorModalContent"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <p class="alert-text2 text-center mt-2 mb-5">
                        총 평가점수가 100점이 되어야<br>
                        수정 가능합니다.
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
    <!-- Error Alert Modal -->

</div>
<!-- Score Management End -->
@endsection