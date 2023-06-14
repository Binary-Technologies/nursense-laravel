@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">학교 코드 관리</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/univCodeDash') }}">학교 코드 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">학교 코드 등록</li>
        </ol>
    </nav>
</div>

<!-- University Code Management Start -->
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">
        <table class="table align-middle table-hover">
            <tbody class="text-center">
                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">* 학교</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <input type="text" class="form-control val-text" name="univ-title" id="univName" placeholder="학교를 입력하세요." value="" aria-describedby="University Title Input">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">* 코드명</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <input type="text" class="form-control val-text" name="univ-code" id="univCode" placeholder="코드명을 입력하세요." value="" aria-describedby="University Code Input">
                        </div>
                    </td>
                </tr>

                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">* 학과</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start ml30 my-3">
                            <div class="height-52">
                                <input type="text" class="form-control val-text file-up-bar-custom2" name="major1" id="major1" placeholder="학과를 입력하세요.">
                            </div>
                            <a href="#deleteConfirmationModal" class="btn btn12 ms-4" data-bs-toggle="modal">학과 삭제</a>
                        </div>
                        <div class="height-52 item-flex-start ml30 my-3">
                            <div class="height-52">
                                <input type="text" class="form-control val-text file-up-bar-custom2" name="major2" id="major2" placeholder="학과를 입력하세요.">
                            </div>
                            <a href="#deleteConfirmationModal" class="btn btn12 ms-4" data-bs-toggle="modal">학과 삭제</a>
                        </div>
                        <div class="height-52 item-flex-start width-10 ml30 my-3">
                            <a href="#" class="btn btn5 btn5-1">
                                학과 추가
                            </a>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <a href="#regExitModal" class="btn btn11" data-bs-toggle="modal">
                등록 완료
            </a>
        </div>
    </div>

</div>



<!-- Delete Confirmation Alert Modal -->
<div class="modal fade" id="deleteConfirmationModal" aria-hidden="true" aria-labelledby="deleteConfirmationModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="deleteConfirmationModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <h5 class="alert-title text-center mt-1 mb-4">학과 삭제</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    해당 학과를 삭제 하시겠습니까?
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
                    이미 등록된 학교입니다.
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

<!-- Registration Complete/Exit Alert Modal -->
<div class="modal fade" id="regExitModal" aria-hidden="true" aria-labelledby="regExitModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="regExitModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <h5 class="alert-title text-center mt-1 mb-4">학교 코드 등록 나가기</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    등록 중 페이지를 벗어나면 저장되지 않습니다.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                    </div>
                    <div class="mx-1">
                        <button class="btn btn-alert2" data-bs-target="#" data-bs-toggle="modal">나가기</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Registration Complete/Exit Alert Modal -->

</div>
<!-- University Code Management End -->

@endsection