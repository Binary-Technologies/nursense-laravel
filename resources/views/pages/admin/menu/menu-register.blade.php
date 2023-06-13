@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">메뉴명 관리</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/menuReg') }}">메뉴 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">메뉴명 관리</li>
        </ol>
    </nav>
</div>

<!-- Menu Management Start -->
<div class="container-fluid px-0">

    <div class="row">
        <div class="col-3 scrollable-col-cus">
            <div class="table-responsive pt-4 mb-3">
                <table class="table align-middle table-hover">
                    <tbody class="text-center">

                        <tr class="table-head-2">
                            <td scope="row" class="table-td-text1 txt-bold bg-td">메뉴</td>
                        </tr>
                        <tr class="table-head-2">
                            <td colspan="8" class="table-td-text2">

                                <!-- 1 -->
                                <div class="menu-item-block mt-1">
                                    <div class="height-52 item-flex-end width-100 my-2">
                                        <span class="menu-i-cus">
                                            <i class='fas fa-folder'></i>
                                        </span>
                                        <input type="text" class="form-control menu-in-box val-text" name="-title" id="Name" placeholder="" value="MUVE 소개" aria-describedby="">
                                    </div>
                                    <div class="height-52 float-end width-72 my-2">
                                        <input type="text" class="form-control menu-in-box val-text" name="-title" id="Name" placeholder="" value="MUVE란?" aria-describedby="">
                                    </div>
                                    <div class="height-52 float-end width-72 my-2">
                                        <input type="text" class="form-control menu-in-box val-text" name="-title" id="Name" placeholder="" value="갤러리" aria-describedby="">
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="menu-item-block mt-3">
                                    <div class="height-52 item-flex-end width-100 my-2">
                                        <span class="menu-i-cus">
                                            <i class='fas fa-folder'></i>
                                        </span>
                                        <input type="text" class="form-control menu-in-box val-text" name="-title" id="Name" placeholder="" value="교육과정" aria-describedby="">
                                    </div>
                                    <div class="height-52 float-end item-flex-end width-90 my-2">
                                        <span class="menu-i-cus">
                                            <i class='fas fa-folder'></i>
                                        </span>
                                        <input type="text" class="form-control menu-in-box val-text" name="-title" id="Name" placeholder="" value="온라인 사전학습" aria-describedby="">
                                    </div>
                                    <div class="height-52 float-end width-62 my-2">
                                        <input type="text" class="form-control menu-in-box val-text" name="-title" id="Name" placeholder="" value="사전학습" aria-describedby="">
                                    </div>
                                    <div class="height-52 float-end width-62 my-2">
                                        <input type="text" class="form-control menu-in-box val-text" name="-title" id="Name" placeholder="" value="사전학습 평가" aria-describedby="">
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="menu-item-block mt-3">
                                    <div class="height-52 item-flex-end width-100 my-2">
                                        <span class="menu-i-cus">
                                            <i class='fas fa-folder'></i>
                                        </span>
                                        <input type="text" class="form-control menu-in-box val-text" name="-title" id="Name" placeholder="" value="본학습" aria-describedby="">
                                    </div>
                                    <div class="height-52 float-end width-72 my-2">
                                        <input type="text" class="form-control menu-in-box val-text" name="-title" id="Name" placeholder="" value="이용안내" aria-describedby="">
                                    </div>
                                    <div class="height-52 float-end width-72 my-2">
                                        <input type="text" class="form-control menu-in-box val-text" name="-title" id="Name" placeholder="" value="다운로드" aria-describedby="">
                                    </div>
                                </div>

                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-9">
            <div class="table-responsive pt-4 mb-3">
                <table class="table align-middle table-hover">
                    <tbody class="text-center">

                        <tr class="table-head-2">
                            <td colspan="10" class="table-td-text1 txt-bold bg-td">메뉴 상세 정보</td>
                        </tr>
                        <tr class="table-head-1">
                            <td scope="row" class="table-td-text1 txt-bold bg-td height-52">* 메뉴명</td>
                            <td colspan="8" class="table-td-text2 bg-white-cus">
                                <div class="height-52 item-flex-start width-50 ml30 my-2">
                                    <input type="text" class="form-control val-text" name="-title" id="Name" placeholder="" value="MUVE 소개" aria-describedby="">
                                </div>
                            </td>
                        </tr>
                        <tr class="table-head-3">
                            <td scope="row" class="table-td-text1 txt-bold bg-td height-52">노출 계정</td>
                            <td colspan="8" class="table-td-text2">
                                <div class="form-check height-52 item-flex-align-start">
                                    <input class="form-check-input ms-1 me-2" type="checkbox" name="check1" id="check1" checked>
                                    <label class="form-check-label lbl-y1" for="check1">
                                        학생 계정
                                    </label>
                                    <input class="form-check-input ms-1 me-2" type="checkbox" name="check2" id="check2" checked>
                                    <label class="form-check-label lbl-y1" for="check2">
                                        교수계정
                                    </label>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="row mt-4 mb-5">
                <div class="item-flex-end">
                    <a href="#modifyConfirmModal" class="btn btn9" data-bs-toggle="modal">
                        저장
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- Modification Confirm Alert Modal -->
<div class="modal fade" id="modifyConfirmModal" aria-hidden="true" aria-labelledby="modifyConfirmModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="modifyConfirmModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <h5 class="alert-title text-center mt-1 mb-4">메뉴 수정</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    수정 사항을 저장하시겠습니까?
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                    </div>
                    <div class="mx-1">
                        <button class="btn btn-alert2" data-bs-target="#modifyCompleteModal" data-bs-toggle="modal">수정</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modification Confirm Alert Modal -->
<!-- Modification Complete Alert Modal -->
<div class="modal fade" id="modifyCompleteModal" aria-hidden="true" aria-labelledby="modifyCompleteModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="modifyCompleteModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    메뉴 수정을 완료하였습니다.
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
<!-- Modification Complete Alert Modal -->


</div>
<!-- Menu Management End -->

@endsection