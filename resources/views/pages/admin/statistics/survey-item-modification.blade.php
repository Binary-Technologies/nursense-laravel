@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">설문 항목 수정</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/surveyItemDash') }}">통계 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/surveyItemDash') }}">설문 항목</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">설문 항목 수정</li>
        </ol>
    </nav>
</div>

<!-- Statistics Item Management Start -->
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">
        <table class="table align-middle table-hover">
            <tbody class="text-center">
                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">* 제목</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <input type="text" class="form-control val-text" name="title" id="title" placeholder="" value="수업에 얼마나 만족하시나요?" aria-describedby="Statistics Item Title Input">
                        </div>
                    </td>
                </tr>
                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">* 문항</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start ml30 my-3">
                            <div class="height-52">
                                <input type="text" class="form-control val-text file-up-bar-custom2" name="q1" id="q1" placeholder="" value="매우 만족">
                            </div>
                            <a href="#quesDeleteConfirmationModal" class="btn btn12 ms-4" data-bs-toggle="modal">문항 삭제</a>
                        </div>
                        <div class="height-52 item-flex-start ml30 my-3">
                            <div class="height-52">
                                <input type="text" class="form-control val-text file-up-bar-custom2" name="q2" id="q2" placeholder="" value="보통">
                            </div>
                            <a href="#quesDeleteConfirmationModal" class="btn btn12 ms-4" data-bs-toggle="modal">문항 삭제</a>
                        </div>
                        <div class="height-52 item-flex-start ml30 my-3">
                            <div class="height-52">
                                <input type="text" class="form-control val-text file-up-bar-custom2" name="q3" id="q3" placeholder="" value="볼만족">
                            </div>
                            <a href="#quesDeleteConfirmationModal" class="btn btn12 ms-4" data-bs-toggle="modal">문항 삭제</a>
                        </div>
                        <div class="height-52 item-flex-start ml30 my-3">
                            <div class="height-52">
                                <input type="text" class="form-control val-text file-up-bar-custom2" name="q4" id="q4" placeholder="" value="매우 불만족">
                            </div>
                            <a href="#quesDeleteConfirmationModal" class="btn btn12 ms-4" data-bs-toggle="modal">문항 삭제</a>
                        </div>
                        <div class="height-52 item-flex-start ml30 my-3">
                            <div class="height-52">
                                <input type="text" class="form-control val-text file-up-bar-custom2" name="q5" id="q5" placeholder="" value="매우 불만족">
                            </div>
                            <a href="#quesDeleteConfirmationModal" class="btn btn12 ms-4" data-bs-toggle="modal">문항 삭제</a>
                        </div>

                        <div class="height-52 item-flex-start width-10 ml30 my-3">
                            <a href="#" class="btn btn5 btn5-1">
                                문항 추가
                            </a>
                            <!-- Deactivated -->
                            <!-- <a href="#" class="btn btn5 btn5-1 opacity-50">
                                문항 추가
                            </a> -->
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <a href="#deleteConfirmationModal" class="btn btn14 btn14-1" data-bs-toggle="modal">
                삭제
            </a>
            <a href="#confirmationModal" class="btn btn9 ms-3" data-bs-toggle="modal">
                수정 완료
            </a>
        </div>
    </div>

</div>


<!-- Question Delete Confirmation Alert Modal -->
<div class="modal fade" id="quesDeleteConfirmationModal" aria-hidden="true" aria-labelledby="quesDeleteConfirmationModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="quesDeleteConfirmationModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <h5 class="alert-title text-center mt-1 mb-4">문항 삭제</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    해당 문항을 삭제하시겠습니까?
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                    </div>
                    <div class="mx-1">
                        <button class="btn btn-alert2" data-bs-target="#quesDeleteCompletionModal" data-bs-toggle="modal">삭제</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Question Delete Confirmation Alert Modal -->
<!-- Question Delete Completion Alert Modal -->
<div class="modal fade" id="quesDeleteCompletionModal" aria-hidden="true" aria-labelledby="quesDeleteCompletionModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="quesDeleteCompletionModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    문항 삭제를 완료하였습니다.
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
<!-- Question Delete Completion Alert Modal -->

<!-- Delete Confirmation Alert Modal -->
<div class="modal fade" id="deleteConfirmationModal" aria-hidden="true" aria-labelledby="deleteConfirmationModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="deleteConfirmationModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <h5 class="alert-title text-center mt-1 mb-4">설문 항목 삭제</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    해당 설문 항목을 삭제하시겠습니까?
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                    </div>
                    <div class="mx-1">
                        <button class="btn btn-alert2" data-bs-target="#deleteCompletionModal" data-bs-toggle="modal">삭제</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete Confirmation Alert Modal -->
<!-- Delete Completion Alert Modal -->
<div class="modal fade" id="deleteCompletionModal" aria-hidden="true" aria-labelledby="deleteCompletionModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="deleteCompletionModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    설문 항목 삭제를 완료하였습니다.
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
<!-- Delete Completion Alert Modal -->

<!-- Confirmation Alert Modal -->
<div class="modal fade" id="confirmationModal" aria-hidden="true" aria-labelledby="confirmationModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="confirmationModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <h5 class="alert-title text-center mt-1 mb-4">설문 항목 수정</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    입력하신 항목으로 수정하시겠습니까?
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
                    설문 항목 수정을 완료하였습니다.
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