@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">학생 계정 등록</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">회원 관리</li>
            <li class="breadcrumb-item breadcrumb-text1">학생 계정 관리</li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">학생 계정 등록</li>
        </ol>
    </nav>
</div>

<!-- Student Account Management Start -->
<div class="container-fluid px-0">

    <div class="rounded pt-4">
        <div class="row">
            <!-- Intro Info Tabs start-->
            <div class="intro-info-tabs">

                <ul class="nav nav-tabs intro-tabs tabs-box" id="myTab" role="tablist">
                    <li class="nav-item tab-btns" role="presentation">
                        <a class="nav-link tab-btn active" id="excel-file-reg-tab" data-bs-toggle="tab" href="#" data-bs-target="#excel-file-reg" role="tab" aria-controls="excel-file-reg" aria-selected="true">엑셀 파일로 등록</a>
                    </li>
                    <li class="nav-item tab-btns" role="presentation">
                        <a class="nav-link tab-btn" id="manual-input-tab" data-bs-toggle="tab" href="#" data-bs-target="#manual-input" role="tab" aria-controls="manual-input" aria-selected="false">직접 입력</a>
                    </li>
                </ul>

                <div class="tab-content tabs-content" id="myTabContent">

                    <div class="tab-pane tab fade show active" id="excel-file-reg" role="tabpanel" aria-labelledby="excel-file-reg-tab">
                        <!-- Main -->
                        <div class="tab-content white-bg pt100">

                            <div class="item-flex-center mt-3">
                                <p class="title-text1 text-center px-5">
                                    등록할 회원정보 파일을 업로드해주세요.<br>
                                    등록 후, 임시 아이디 및 비밀번호가 생성됩니다.
                                </p>
                            </div>
                            <div class="item-flex-center">
                                <div class="width-50">
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
                                    <p class="modal-inner-text3">
                                        * xlsx형식의 엑셀 파일만 등록할 수 있습니다.<br>
                                        * 엑셀 파일의 세로 열(Column) 이름을 <span class="text-blue1">이름, 휴대폰 번호, 이메일, 직종</span>으로 지정하여 업로드해주세요.</p>
                                </div>
                            </div>

                        </div>
                        <!-- Main -->
                        <!-- Second - Uploading progress -->
                        <div class="tab-content white-bg pt100 d-none">

                            <div class="item-flex-center mt-3">
                                <p class="title-text2 text-center px-5">
                                    파일 업로드 중..
                                </p>
                            </div>
                            <div class="item-flex-center">
                                <div class="width-50">
                                    <div class="img-up-box">
                                        <div class="img-up-box-inner">
                                            <div class="bg-white-progress border-rad-10 px-4 py-2">
                                                <div class="item-flex-align-center">
                                                    <p class="bg-white-progress-text my-3 ms-0 me-2">Ad1253.xlsx</p>
                                                    <div class="progress my-3 mx-3">
                                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <p class="progress-percent my-3 ms-2 me-0">25%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="modal-inner-text3">
                                        * xlsx형식의 엑셀 파일만 등록할 수 있습니다.<br>
                                        * 엑셀 파일의 세로 열(Column) 이름을 <span class="text-blue1">이름, 휴대폰 번호, 이메일, 직종</span>으로 지정하여 업로드해주세요.</p>
                                </div>
                            </div>

                        </div>
                        <!-- Second - Uploading progress -->
                        <!-- Second - Uploaded -->
                        <div class="tab-content white-bg pt100 d-none">

                            <div class="item-flex-center mt-3">
                                <p class="title-text2 text-center px-5">
                                    파일 읽는 중..
                                </p>
                            </div>
                            <div class="item-flex-center">
                                <div class="width-50">
                                    <div class="img-up-box">
                                        <div class="img-up-box-inner">
                                            <div class="bg-white-progress border-rad-10 px-4 py-2">
                                                <div class="item-flex-align-center">
                                                    <p class="bg-white-progress-text my-3 ms-0 me-5">Ad1253.xlsx</p>
                                                    <div class="my-3 mx-5">

                                                    </div>
                                                    <a href="#" class="btn-dp-uploaded position-rel underline1 my-3 ms-5 me-0">삭제</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="modal-inner-text3">
                                        * xlsx형식의 엑셀 파일만 등록할 수 있습니다.<br>
                                        * 엑셀 파일의 세로 열(Column) 이름을 <span class="text-blue1">이름, 휴대폰 번호, 이메일, 직종</span>으로 지정하여 업로드해주세요.</p>
                                </div>
                            </div>

                        </div>
                        <!-- Second - Uploaded -->
                    </div>
                    <div class="tab-pane fade" id="manual-input" role="tabpanel" aria-labelledby="manual-input">
                        <div class="tab-content white-bg pt-30">

                            <div class="py-5">
                                <p class="title-text1 mb-0">
                                    등록에 필요한 회원정보 파일을 업로드해주세요.<br>
                                    등록 후, 임시 아이디 및 비밀번호가 생성됩니다.
                                </p>
                            </div>

                            <form method="post" id="insProfEdit" class="" action="/Register-student">
                                @csrf
                                <!-- row1 -->
                                <div class="row mt-1 mb-2">
                                    <h4 class="ttl-acc-blue position-rel title-border-t2">필수 정보 입력</h4>
                                </div>
                                <div class="row">

                                    <!-- Name -->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-3 pe-2">
                                        <label class="form-text-lbl pb-2" for="name">이름</label>
                                        <input type="text" class="form-control form-text-d fields-height1" name="name" id="name" placeholder="이름을 입력하세요." aria-describedby="Student Name">
                                    </div>

                                    <!-- Mobile -->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-3 pe-2">
                                        <label class="form-text-lbl pb-2" for="mobile">휴대폰 번호</label>
                                        <input type="phone" class="form-control form-text-d fields-height1" name="mobile" id="mobile" placeholder="학번을 입력하세요." aria-describedby="Student Mobile">
                                    </div>

                                    <!-- Email -->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-3 pe-2">
                                        <label class="form-text-lbl pb-2" for="email">이메일</label>
                                        <input type="text" class="form-control form-text-d fields-height1" name="email" id="email" placeholder="이메일을 입력해주세요." aria-describedby="Student Email">
                                    </div>

                                    <!-- Job -->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-3 pe-2">
                                        <label class="form-text-lbl pb-2" for="job">직종</label>
                                        <input type="text" class="form-control form-text-d fields-height1" name="job" id="job" placeholder="직종을 입력해주세요. (예. 간호사, 물리치료사 등)" aria-describedby="Student Job">
                                    </div>

                                </div>
                                <!-- row1 -->

                                <!-- row2 -->
                                <div class="row mt-5 mb-2">
                                    <h4 class="ttl-acc-blue position-rel title-border-t2">선택 정보 입력</h4>
                                </div>
                                <div class="row">

                                    <!-- University Select -->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-3 pe-2">
                                        <label class="form-text-lbl pb-2" for="university">학교</label>
                                        <select class="form-select form-text-d fields-height1" name="university" id="university" aria-label="University Selection">
                                            <option value="1" selected>학교명을 선택하세요.</option>
                                            <option value="2">가톨릭상지대학교</option>
                                            <option value="3">경북과학대학교</option>
                                            <option value="4">경북대학교</option>
                                            <option value="5">경북보건대학교</option>
                                        </select>
                                    </div>

                                    <!-- Major Select -->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-3 pe-2">
                                        <label class="form-text-lbl pb-2" for="major">학과</label>
                                        <select class="form-select form-text-d fields-height1" name="major" id="major" aria-label="Major Selection">
                                            <option value="1" selected>학과명을 선택하세요.</option>
                                            <option value="2">방사선과</option>
                                            <option value="3">임상병리과</option>
                                            <option value="4">물리치료과</option>
                                            <option value="5">바이오환경보건과</option>
                                        </select>
                                    </div>

                                </div>
                                <!-- row2 -->

                                <div class="row my-4">
                                    <div class="item-flex-end">
                                        
                                        <button type="submit" class="btn btn11">  계정 등록 </button>
                                        <!---<a href="#" class="btn btn11">
                                            계정 등록
                                        </a> --->
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
            <!-- Intro Info Tabs end -->
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
                        교수자 계정 등록이 완료되었습니다.
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
                    <h5 class="alert-title text-center mt-1 mb-4">교수자 계정 등록 나가기</h5>
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
    <!-- Exit Alert Modal -->


</div>
<!-- Student Account Management End -->
@endsection