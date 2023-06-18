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
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/instructorDash') }}">회원 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/instructorDash') }}">교수자 계정 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/insAccData') }}">교수자 계정 상세</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">교수자 계정 수정</li>
        </ol>
    </nav>
</div>

<!-- Instructor Account Management Start -->
<div class="container-fluid px-0">

    <div class="rounded pt-4">

        <div class="row pt-2">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="page-sub-title mb-0">교수자 계정 수정</h5>
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

                <form method="post" id="insProfEdit" class="" action="{{ route('instructorUpdate', ['user' => $user->id]) }}">
                   
                   @csrf
                    <div class="row">

                        <!-- Name -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="name">* 이름</label>
                            <input type="text" value="{{$user->name}}" class="form-control form-text-d fields-height1" name="name" id="name" placeholder="홍길동" aria-describedby="Instructor Name">
                        </div>

                        <!-- Mobile -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="mobile">* 휴대폰 번호</label>
                            <input type="phone" value="{{$user->pno}}" class="form-control form-text-d fields-height1" name="mobile" id="mobile" placeholder="01012345678" aria-describedby="Instructor Mobile">
                        </div>

                        <!-- University Select -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="university">학교</label>
                            <select class="form-select form-text-d fields-height1" value="{{$user->uni_id}}"  name="university" id="university" aria-label="University Selection" onchange="showDepartments()">
                                <option value="0" {{ $user->uni_id == 0 ? 'selected' : '' }}>경북대학교</option>
                                @forelse ($unis as $uni)
                                <option value="{{ $uni->id }}" {{ $user->uni_id == $uni->id ? 'selected' : '' }}>{{ $uni->name }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>

                        <!-- Major Select -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="major">학과</label>
                            <select class="form-select form-text-d fields-height1" value="{{$user->major_id}}"  name="major" id="major" aria-label="Major Selection">
                                <option value="0" {{ $user->uni_id == 0 ? 'selected' : '' }}>간호학과</option>
                            </select>
                        </div>

                        <!-- Email -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="email">* 이메일</label>
                            <input type="text" value="{{$user->email}}"  class="form-control form-text-d fields-height1" name="email" id="email" placeholder="ghdrlfehd@gmail.com" aria-describedby="Instructor Email">
                        </div>

                        <!-- Resident Registration Number -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="resRegNum">주민번호</label>
                            <div class="item-flex-align-center width-70">
                                <input type="text" value="{{$user->resident_reg}}" class="form-control form-text-d fields-height1 me-2" name="res-reg-num1" id="resRegNum1" placeholder="670206" aria-describedby="Instructor Resident Registration Number1">
                                <span class="form-text-d fields-height1 item-flex-align-center">-</span>
                                <input type="text" class="form-control form-text-d fields-height1 width-10 mx-2" name="res-reg-num2" id="resRegNum2" placeholder="1" aria-describedby="Instructor Resident Registration Number2">
                                <span class="form-text-d fields-height1 item-flex-align-center"><strong>&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;</strong></span>
                            </div>
                        </div>

                        <!-- Job -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0 py-4 pe-2">
                            <label class="form-text-lbl pb-2" for="job">* 직종</label>
                            <input type="text" value="{{$user->occupation}}"  class="form-control form-text-d fields-height1" name="job" id="job" placeholder="간호사" aria-describedby="Instructor Job">
                        </div>


                    </div>
                    <div class="row my-3">
                        <div class="item-flex-end">

                            <button type="submit" class="btn btn8">
                                수정 완료
                            </button>
                        <!---    <a href="#confirmationModal" class="btn btn8" data-bs-toggle="modal">
                                수정 완료
                            </a>  --->
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
                            <a class="btn btn-alert3" href="{{ route('insAccDataEditDp') }}">확인</a>
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
<!-- Instructor Account Management End -->
@endsection
@section('scripts')
<script type="text/javascript">
    let uniData = {!! json_encode($unis) !!}
    let userDep = {!! $user->major_id !!}
    let userUni = {!! $user->uni_id !!}

    $(document).ready(function () {
        if(userUni > 0) showDepartments()
    })

    function showDepartments(){
        let uniID = document.getElementById('university').value;
        $('#major').find('option:not(:first)').remove();

        if(uniID > 0){
            let departments = uniData[uniID].departments;
            departments.forEach(element => {
                let sel = ""
                if (userDep > 0 && uniID == userUni) sel = 'selected'
                $('#major').append('<option value="'+element.id+'" '+sel+'>'+element.name+'</option>');
            });
        }
    }
</script>
@endsection