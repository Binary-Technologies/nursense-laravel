@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container py-5">
    <div class="row item-flex-center py-5">

      <!-- Login Card -->
      <div class="col-md-12 border-rad-5 py-5 px-4">

        <div class="pt-3">
          <h3 class="login_title">정보 입력</h3>
          <p class="pt10 login_desc">가입에 필요한 회원정보를 입력해주세요</p>
        </div>

        <form method="POST" action="#" autocomplete="off" class="col-md-12 my-5">
          @csrf
          <div class="row docu-details item-flex-center">

            <!-- 1st sec -->
            <div class="col-lg-12 pl-0 py-4">
              <h4 class="ttl-5 relative-block title-border-t">개인정보 입력</h4>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group comp-width-544 pl-0 pr-4 pb-3">
              <label for="" class="login_desc"><small>이름</small></label>
              <input type="text" name='' id='' class="form-control login_text ttl-23 height-52 width-100" placeholder="이름을 입력하세요." aria-describedby="" required>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group comp-width-544 pl-0 pb-3">
              <label for="" class="login_desc"><small>휴대폰 번호</small></label>
              <input type="text" name='' id='' class="form-control login_text ttl-23 height-52 width-100" placeholder="01012345678" aria-describedby="" required readonly>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group comp-width-544 pl-0 pr-4 pb-3">
              <label for="" class="login_desc"><small>학교</small></label>
              <select name='' id='' class="form-select login_text ttl-23 height-52 width-100" aria-describedby="" required>
                <option value="0" selected>학교명을 선택하세요.</option>
                <option value="1">가톨릭상지대학교</option>
                <option value="2">경북과학대학교</option>
                <option value="3">경북대학교</option>
                <option value="4">경북보건대학교</option>
              </select>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group comp-width-544 pl-0 pb-3">
              <label for="" class="login_desc"><small>학과</small></label>
              <select name='' id='' class="form-select login_text ttl-23 height-52 width-100" aria-describedby="" required>
                <option value="0" selected>학과명을 선택하세요.</option>
                <option value="1">방사선과</option>
                <option value="2">임상병리과</option>
                <option value="3">물리치료과</option>
                <option value="4">바이오환경보건과</option>
              </select>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group comp-width-544 pl-0 pr-4 pb-3">
              <label for="" class="login_desc"><small>학번</small></label>
              <input type="text" name='' id='' class="form-control login_text ttl-23 height-52 width-100" placeholder="학번을 입력하세요." aria-describedby="" required>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group comp-width-544 pl-0 pb-3">
              <label for="" class="login_desc"><small>학년</small></label>
              <select name='' id='' class="form-select login_text ttl-23 height-52 width-100" aria-describedby="" required>
                <option value="0" selected>학년을 선택하세요.</option>
                <option value="1">1학년</option>
                <option value="2">2학년</option>
                <option value="3">3학년</option>
                <option value="4">4학년</option>
              </select>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group comp-width-544 pl-0 pr-4 pb-3">
              <label for="" class="login_desc"><small>주민번호</small></label>
              <div class="item-flex-center width-70">
                <input type="text" name='' id='' class="form-control login_text ttl-23 height-52 mr-2" placeholder="생년월일" aria-describedby="" required>
                <span class="form-text-d fields-height1 item-flex-center">-</span>
                <input type="text" name='' id='' class="form-control login_text ttl-23 height-52 width-10 mx-2" placeholder="0" aria-describedby="" required>
                <span class="form-text-d fields-height1 item-flex-center"><strong>&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;</strong></span>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group comp-width-544 pl-0 pb-3">
              <label for="" class="login_desc"><small>학년</small></label>
              <input type="" name='' id='' class="form-control login_text ttl-23 height-52 width-100" placeholder="직종을 입력해주세요. (예. 간호사, 물리치료사 등)" aria-describedby="1" required>
            </div>

            <!-- 2nd sec -->
            <div class="col-lg-12 pl-0 pt-5 pb-4">
              <h4 class="ttl-5 relative-block title-border-t">가입정보 수정(선택)</h4>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group comp-width-544 pl-0 pr-4">
              <label for="" class="login_desc"><small>새 비밀번호</small></label>
              <input type="password" name='' id='' class="form-control login_text ttl-23 height-52 width-100" placeholder="비밀번호를 입력하세요." aria-describedby="" required>
              <div class="item-flex-left mt-2">
                <div class="ttl-31 mr-4">
                  <span class="mr-1"><i class="fa fa-check"></i></span>
                  <span>영문</span>
                </div>
                <div class="ttl-31 mr-4">
                  <span class="mr-1"><i class="fa fa-check"></i></span>
                  <span>숫자</span>
                </div>
                <div class="ttl-31">
                  <span class="mr-1"><i class="fa fa-check"></i></span>
                  <span>8~20자</span>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group comp-width-544 pl-0">
              <label for="" class="login_desc"><small>새 비밀번호 확인</small></label>
              <input type="text" name='' id='' class="form-control login_text ttl-23 height-52 width-100" placeholder="비밀번호를 입력하세요." aria-describedby="" required>
              <div class="item-flex-left mt-2">
                <div class="ttl-31">
                  <span class=""></span>
                  <span></span>
                </div>
                <div class="ttl-31">
                  <span class=""></span>
                  <span></span>
                </div>
                <div class="ttl-31">
                  <span class=""></span>
                  <span></span>
                </div>

                <!-- Error Notification -->
                <div id="msg" class="item-flex-left login_error d-none">
                  비밀번호가 일치하지 않습니다.
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group mt-5">
              <div class="item-flex-center mt-3 mb-2">
                <!-- If Deactive -->
                <button type="submit" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 width-80 height-52" data-bs-target="#" data-bs-toggle="modal"><span class="p10">저장</span></button>
                <!-- If Active -->
                <button type="submit" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 width-80 height-52 btn-2-1 d-none" data-bs-target="#completionModal" data-bs-toggle="modal"><span class="p10">저장</span></button>
              </div>
            </div>

          </div>
        </form>

      </div>
      <!-- Login Card -->

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
                비밀번호 변경이 완료되었습니다.
              </p>

              <div class="item-flex-center my-2">
                <div class="mx-1">
                  <button class="btn btn-alert3" data-bs-target="#" data-bs-toggle="modal">로그인 하러가기</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Completion Alert Modal -->
      <!-- Fail Alert Modal -->
      <div class="modal fade" id="failModal" aria-hidden="true" aria-labelledby="failModalContent" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center my-3" id="failModalContent"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
              <p class="alert-text2 text-center mt-2 mb-5">
                인증이 미완료 되었습니다.<br>
                이메일을 확인해 주세요.
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
      <!-- Fail Alert Modal -->

    </div>
</section>
@endsection