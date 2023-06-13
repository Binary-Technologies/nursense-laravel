@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">로고 관리</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/logoReg') }}">메뉴 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">로고 관리</li>
        </ol>
    </nav>
</div>

<!-- Logo Management Start -->
<div class="container-fluid px-0">

    <!-- 1 -->
    <div class="table-responsive mt-4 mb-3">
        <span class="logo-lbl-top">
            권장 사이즈: 90px*52px
        </span>
        <table class="table align-middle table-hover mt-3">
            <tbody class="text-center">

                <tr class="table-head-1">
                    <td scope="row" class="table-td-text1 bg-td height-52">유저 페이지 로고</td>
                    <td colspan="8" class="table-td-text2 bg-white-cus">
                        <div class="item-flex-center width-10 ml30 mb-2">
                            <img src="{{ asset('assets/img/logo-light.png') }}" class="width-100">
                        </div>
                        <div class="height-52 item-flex-center width-10 ml30 my-1">
                            <a href="#" class="btn btn5 btn5-1">
                                첨부파일 등록
                            </a>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="row mt-3 mb-2">
        <div class="item-flex-end">
            <a href="#regExitModal" class="btn btn9" data-bs-toggle="modal">
                수정 완료
            </a>
        </div>
    </div>

    <!-- 2 -->
    <div class="table-responsive my-3">
        <span class="logo-lbl-top">
            권장 사이즈: 100px*58px
        </span>
        <table class="table align-middle table-hover mt-3">
            <tbody class="text-center">

                <tr class="table-head-1">
                    <td scope="row" class="table-td-text1 bg-td height-52">어드민 페이지 로고</td>
                    <td colspan="8" class="table-td-text2 bg-white-cus">
                        <div class="item-flex-center width-10 ml30 mb-2 position-rel">
                            <img src="{{ asset('assets/img/logo-dark.png') }}" class="width-100">
                            <span class="logo-mng-abs-txt">
                                #212880 배경 위에 올라가는 로고이므로<br>
                                밝은 색상의 png 이미지 권장함
                            </span>
                        </div>
                        <div class="height-52 item-flex-center width-10 ml30 my-1">
                            <a href="#" class="btn btn5 btn5-1">
                                첨부파일 등록
                            </a>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="row mt-3 mb-5">
        <div class="item-flex-end">
            <a href="#modifyConfirmModal" class="btn btn9" data-bs-toggle="modal">
                수정 완료
            </a>
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
                <h5 class="alert-title text-center mt-1 mb-4">로고 수정</h5>
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
                    로고 수정을 완료하였습니다.
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
<!-- Logo Management End -->

@endsection