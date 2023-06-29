@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container py-5">
    <div class="row item-flex-center py-5">

      <!-- Login Card -->
      <div class="col-md-8 col-sm-12 border-rad-5 py-5 px-4">

        <div class="text-center pt-3">
          <h3 class="login_title">비밀번호 찾기</h3>
          <p class="pt10 login_desc">휴대폰 번호 입력 후, 인증하기 버튼을 클릭하여<br> 해당 번호로 전송된 인증번호를 확인해주세요.</p>
        </div>

        <form method="POST" action="#" autocomplete="off" class="col-md-12 mx-2 my-2">
          @csrf
          <div class="docu-details item-flex-center">

            <div class="mt-3">
              <div class="form-group">
                <label for="" class="login_desc"><small>휴대폰 번호</small></label>
                <div class="item-flex-left">
                  <input type="password" name='' id='' class="form-control login_text ttl-23 height-52 width-70 mr-3" placeholder="휴대폰 번호를 입력해주세요." aria-describedby="Email" required>
                  <!-- If Deactive -->
                  <a href="#" class="btn-3-2 width-30">인증번호 전송</a>
                  <!-- If Active -->
                  <a href="#" class="btn-2-2 width-30 d-none">인증번호 전송</a>
                </div>
              </div>

              <div class="form-group">
                <div class="item-flex-left">
                  <input type="text" name='' id='' class="form-control login_text ttl-23 height-52 width-100" placeholder="인증번호를 입력하세요." aria-describedby="" required>
                </div>
              </div>

              <div id="msg" class="item-flex-left login_error d-none">
                번호가 일치하지 않습니다.
              </div>

              <div class="form-group mt-5">
                <div class="item-flex-center mt-3 mb-2">
                  <!-- If Deactive -->
                  <button type="submit" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 width-80 height-52" data-bs-target="#failModal" data-bs-toggle="modal"><span class="p10">인증하기</span></button>
                  <!-- If Active -->
                  <button type="submit" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 width-80 height-52 btn-2-1 d-none" data-bs-target="#completionModal" data-bs-toggle="modal"><span class="p10">인증하기</span></button>
                </div>
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
                인증된 휴대폰 번호로<br>
                아이디를 전송하였습니다.
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