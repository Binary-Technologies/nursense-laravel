@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">학생 계정 수정</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/studentDash') }}">회원 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/studentDash') }}">학생 계정 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/stuAccData') }}">학생 계정 상세</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">학생 계정 수정</li>
        </ol>
    </nav>
</div>

<!-- Student Account Management Start -->
<div class="container-fluid px-0">

    <div class="rounded pt-4">

        <div class="row pt-2">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="page-sub-title mb-0">프로필 이미지</h5>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-xl-3">

                <!-- 1 -->
                <div class="pt-4">
                    <div class="item-flex-center position-rel profile-img-outer">
                        <img src="{{ asset('assets/img/face.png')}}" alt="dp">
                    </div>
                    <div class="item-flex-center mt-3">
                        <a href="#deletionConfirmationModal" class="btn btn7" data-bs-toggle="modal">
                            삭제
                        </a>
                    </div>
                </div>
                <!-- 1 -->

            </div>
        </div>
        <div class="row my-5">
            <div class="col-xl-12">

                <form method="post" id="insProfEdit" class="" action="#">
                    <div class="row">

                        <!-- Name -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="name">* 이름</label>
                            <input type="text" class="form-control form-text-d fields-height1" name="name" id="name" placeholder="홍길동" aria-describedby="Student Name">
                        </div>

                        <!-- Mobile -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="mobile">* 휴대폰 번호</label>
                            <input type="phone" class="form-control form-text-d fields-height1" name="mobile" id="mobile" placeholder="01012345678" aria-describedby="Student Mobile">
                        </div>

                        <!-- University Select -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="university">학교</label>
                            <select class="form-select form-text-d fields-height1" name="university" id="university" aria-label="University Selection">
                                <option value="1" selected>경북대학교</option>
                                <option value="2">가톨릭상지대학교</option>
                                <option value="3">경북과학대학교</option>
                                <option value="4">경북대학교</option>
                                <option value="5">경북보건대학교</option>
                            </select>
                        </div>

                        <!-- Major Select -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="major">학과</label>
                            <select class="form-select form-text-d fields-height1" name="major" id="major" aria-label="Major Selection">
                                <option value="1" selected>간호학과</option>
                                <option value="2">방사선과</option>
                                <option value="3">임상병리과</option>
                                <option value="4">물리치료과</option>
                                <option value="5">바이오환경보건과</option>
                            </select>
                        </div>

                        <!-- Year Select -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="year">학년</label>
                            <select class="form-select form-text-d fields-height1" name="year" id="year" aria-label="Year Selection">
                                <option value="1" selected>3학년</option>
                                <option value="2">1학년</option>
                                <option value="3">2학년</option>
                                <option value="4">3학년</option>
                                <option value="5">4학년</option>
                            </select>
                        </div>

                        <!-- ID -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="stuId">학번</label>
                            <input type="text" class="form-control form-text-d fields-height1" name="stu-id" id="stuId" placeholder="12345678" aria-describedby="Student ID">
                        </div>

                        <!-- Email -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="email">* 이메일</label>
                            <input type="text" class="form-control form-text-d fields-height1" name="email" id="email" placeholder="ghdrlfehd@gmail.com" aria-describedby="Student Email">
                        </div>

                        <!-- Resident Registration Number -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="resRegNum">주민번호</label>
                            <div class="item-flex-align-center width-70">
                                <input type="text" class="form-control form-text-d fields-height1 me-2" name="res-reg-num1" id="resRegNum1" placeholder="670206" aria-describedby="Student Resident Registration Number1">
                                <span class="form-text-d fields-height1 item-flex-align-center">-</span>
                                <input type="text" class="form-control form-text-d fields-height1 width-10 mx-2" name="res-reg-num2" id="resRegNum2" placeholder="1" aria-describedby="Student Resident Registration Number2">
                                <span class="form-text-d fields-height1 item-flex-align-center"><strong>&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;</strong></span>
                            </div>
                        </div>

                        <!-- Job -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="job">* 직종</label>
                            <input type="text" class="form-control form-text-d fields-height1" name="job" id="job" placeholder="간호사" aria-describedby="Student Job">
                        </div>


                    </div>
                    <div class="row my-3">
                        <div class="item-flex-end">
                            <a href="#confirmationModal" class="btn btn8" data-bs-toggle="modal">
                                수정 완료
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <!-- Deletion Confirmation Alert Modal -->
    <div class="modal fade" id="deletionConfirmationModal" aria-hidden="true" aria-labelledby="deletionConfirmationModalContent" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center my-3" id="deletionConfirmationModalContent"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <h5 class="alert-title text-center mt-1 mb-4">프로필 이미지 삭제</h5>
                    <p class="alert-text text-center mt-2 mb-5">
                        기존 프로필 이미지를 삭제하시겠습니까?
                    </p>

                    <div class="item-flex-center my-2">
                        <div class="mx-1">
                            <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                        </div>
                        <div class="mx-1">
                            <button class="btn btn-alert2" data-bs-target="#deletedModal" data-bs-toggle="modal">삭제</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deletion Confirmation Alert Modal -->
    <!-- Deleted Alert Modal -->
    <div class="modal fade" id="deletedModal" aria-hidden="true" aria-labelledby="deletedModalContent" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center my-3" id="deletedModalContent"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <p class="alert-text2 text-center mt-2 mb-5">
                        기존 이미지 파일을 삭제 완료하였습니다.
                    </p>

                    <div class="item-flex-center my-2">
                        <div class="mx-1">
                            <a class="btn btn-alert3" href="{{ route('stuAccDataEditDp') }}">확인</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deleted Alert Modal -->

    <!-- Confirmation Alert Modal -->
    <div class="modal fade" id="confirmationModal" aria-hidden="true" aria-labelledby="confirmationModalContent" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center my-3" id="confirmationModalContent"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <h5 class="alert-title text-center mt-1 mb-4">프로필 이미지 삭제</h5>
                    <p class="alert-text text-center mt-2 mb-5">
                        기존 프로필 이미지를 삭제하시겠습니까?
                    </p>

                    <div class="item-flex-center my-2">
                        <div class="mx-1">
                            <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                        </div>
                        <div class="mx-1">
                            <button class="btn btn-alert2" data-bs-target="#completionModal" data-bs-toggle="modal">삭제</button>
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
                        기존 이미지 파일을 삭제 완료하였습니다.
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
    <!-- Exit Alert Modal -->
    <div class="modal fade" id="exitModal" aria-hidden="true" aria-labelledby="exitModalContent" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center my-3" id="exitModalContent"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <h5 class="alert-title text-center mt-1 mb-4">교수자 계정 수정 나가기</h5>
                    <p class="alert-text text-center mt-2 mb-5">
                        수정 중 페이지를 벗어나면 저장되지 않습니다.
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
    <!-- Exit Alert Modal -->

</div>
<!-- Student Account Management End -->

@endsection