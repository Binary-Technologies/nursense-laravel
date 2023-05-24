@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">교수자 계정 수정</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">회원 관리</li>
            <li class="breadcrumb-item breadcrumb-text1">교수자 계정 관리</li>
            <li class="breadcrumb-item breadcrumb-text1">교수자 계정 상세</li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">교수자 계정 수정</li>
        </ol>
    </nav>
</div>

<!-- Instructor Account Management Start -->
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
                        <img src="{{ asset('assets/img/dp.png')}}" alt="dp">
                    </div>
                    <div class="item-flex-center mt-3">
                        <a href="#dpUploadModal" class="btn btn7" data-bs-toggle="modal" role="button">
                            등록
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
                            <input type="text" class="form-control form-text-d fields-height1" name="name" id="name" placeholder="홍길동" aria-describedby="Instructor Name">
                        </div>

                        <!-- Mobile -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="mobile">* 휴대폰 번호</label>
                            <input type="phone" class="form-control form-text-d fields-height1" name="mobile" id="mobile" placeholder="01012345678" aria-describedby="Instructor Mobile">
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

                        <!-- Email -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="email">* 이메일</label>
                            <input type="text" class="form-control form-text-d fields-height1" name="email" id="email" placeholder="ghdrlfehd@gmail.com" aria-describedby="Instructor Email">
                        </div>

                        <!-- Resident Registration Number -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="resRegNum">주민번호</label>
                            <div class="item-flex-align-center width-70">
                                <input type="text" class="form-control form-text-d fields-height1 me-2" name="res-reg-num1" id="resRegNum1" placeholder="670206" aria-describedby="Instructor Resident Registration Number1">
                                <span class="form-text-d fields-height1 item-flex-align-center">-</span>
                                <input type="text" class="form-control form-text-d fields-height1 width-10 mx-2" name="res-reg-num2" id="resRegNum2" placeholder="1" aria-describedby="Instructor Resident Registration Number2">
                                <span class="form-text-d fields-height1 item-flex-align-center"><strong>&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;</strong></span>
                            </div>
                        </div>

                        <!-- Job -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="job">* 직종</label>
                            <input type="text" class="form-control form-text-d fields-height1" name="job" id="job" placeholder="간호사" aria-describedby="Instructor Job">
                        </div>


                    </div>
                    <div class="row my-3">
                        <div class="item-flex-end">
                            <a href="#" class="btn btn8">
                                수정 완료
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <!-- DP Upload modal with confirmation start -->
    <div class="modal fade" id="dpUploadModal" aria-hidden="true" aria-labelledby="dpUploadModalContent" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center my-3" id="dpUploadModalContent"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <h5 class="modal-title text-center mt-1 mb-5">프로필 이미지 등록</h5>
                    <div class="item-flex-center position-rel profile-img-outer mt-1">
                        <img src="{{ asset('assets/img/dp.png')}}" alt="dp">
                    </div>
                    <p class="modal-inner-text text-center mt-2 mb-3">미리보기</p>
                    <div class="item-flex-center mt-4">
                        <div class="width-70">
                            <div class="img-up-box">
                                <div class="img-up-box-inner">
                                    <div class="mt-1">
                                        <div class="item-flex-align-center">
                                            <button class="btn btn9 mt-2">파일 선택</button>
                                        </div>
                                        <p class="modal-inner-text2 text-center mb-0">또는 여기로 파일을 끌어와주세요.</p>
                                    </div>
                                </div>
                            </div>
                            <p class="modal-inner-text3">*100mb이하의 jpg, png파일만 등록할 수 있습니다.</p>
                        </div>
                    </div>
                    <div class="item-flex-center my-4">
                        <div class="width-70 my-2">
                            <button class="btn btn10" data-bs-target="#dpUploadSaveModal" data-bs-toggle="modal">등록 저장</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DP Upload modal with confirmation end -->
    <!-- DP Upload modal with confirmation uploading progress start -->
    <div class="modal fade" id="dpUploadModalProgress" aria-hidden="true" aria-labelledby="dpUploadModalProgressContent" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center my-3" id="dpUploadModalProgressContent"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <h5 class="modal-title text-center mt-1 mb-5">프로필 이미지 등록</h5>
                    <div class="item-flex-center position-rel profile-img-outer mt-1">
                        <img src="{{ asset('assets/img/dp.png')}}" alt="dp">
                    </div>
                    <p class="modal-inner-text text-center mt-2 mb-3">미리보기</p>
                    <div class="item-flex-center mt-4">
                        <div class="width-70">
                            <div class="img-up-box">
                                <div class="img-up-box-inner">
                                    <div class="bg-white-progress border-rad-10 px-4 py-2">
                                        <div class="item-flex-align-center">
                                            <p class="bg-white-progress-text my-3 ms-0 me-2">img-dp1.jpg</p>
                                            <div class="progress my-3 mx-3">
                                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="progress-percent my-3 ms-2 me-0">25%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="modal-inner-text3">*100mb이하의 jpg, png파일만 등록할 수 있습니다.</p>
                        </div>
                    </div>
                    <div class="item-flex-center my-4">
                        <div class="width-70 my-2">
                            <button class="btn btn10" data-bs-target="#dpUploadSaveModal" data-bs-toggle="modal">등록 저장</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DP Upload modal with confirmation uploading progress end -->
    <!-- DP Upload modal with confirmation uploading progress start -->
    <div class="modal fade" id="dpUploaded" aria-hidden="true" aria-labelledby="dpUploadedContent" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center my-3" id="dpUploadedContent"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <h5 class="modal-title text-center mt-1 mb-5">프로필 이미지 등록</h5>
                    <div class="item-flex-center position-rel profile-img-outer mt-1">
                        <img src="{{ asset('assets/img/face.png')}}" alt="dp">
                    </div>
                    <p class="modal-inner-text text-center mt-2 mb-3">미리보기</p>
                    <div class="item-flex-center mt-4">
                        <div class="width-70">
                            <div class="img-up-box">
                                <div class="img-up-box-inner">
                                    <div class="bg-white-progress border-rad-10 px-4 py-2">
                                        <div class="item-flex-align-center">
                                            <p class="bg-white-progress-text my-3 ms-0 me-5">img-dp1.jpg</p>
                                            <div class="my-3 mx-5">

                                            </div>
                                            <a href="#" class="btn-dp-uploaded position-rel underline1 my-3 ms-5 me-0">삭제</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="modal-inner-text3">*100mb이하의 jpg, png파일만 등록할 수 있습니다.</p>
                        </div>
                    </div>
                    <div class="item-flex-center my-4">
                        <div class="width-70 my-2">
                            <button class="btn btn10" data-bs-target="#dpUploadSaveModal" data-bs-toggle="modal">등록 저장</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DP Upload modal with confirmation uploading progress end -->


</div>
<!-- Instructor Account Management End -->
@endsection