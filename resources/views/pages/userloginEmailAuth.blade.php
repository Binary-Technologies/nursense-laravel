@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container py-5">
    <div class="row item-flex-center py-5">

      <!-- Login Card -->
      <div class="col-md-6 col-sm-12 border-rad-5 py-5 px-4">

        <div class="text-center pt-3">
          <h3 class="login_title">이메일 인증</h3>
          <p class="pt10 login_desc">이메일 인증을 해주세요</p>
        </div>

        <form method="POST" action="#" autocomplete="off" class="col-md-12 mx-2 my-2">
          @csrf
          <div class="docu-details item-flex-center">

            <div class="mt-3">
              <div class="form-group">
                <label for="email" class="login_desc"><small>이메일</small></label>
                <div class="item-flex-left">
                  <input type="email" name='email' id='email' class="form-control login_text ttl-23 height-52 width-70 mr-3" placeholder="이메일을 입력하세요." aria-describedby="Email" required>
                  <!-- If Deactive -->
                  <a href="#" class="btn-3-1 width-30">인증하기</a>
                  <!-- If Active -->
                  <a href="#" class="btn-2-1 width-30 d-none">인증하기</a>
                  <!-- Resend Button -->
                  <a href="#" class="btn-2-1 width-30 d-none">재전송</a>
                </div>
              </div>

              <div id="msg" class="item-flex-left login_error d-none">
                올바른 이메일을 입력해주세요.
              </div>

              <div class="form-group mt-5">
                <div class="item-flex-center mt-3 mb-2">
                  <!-- If Deactive -->
                  <button type="submit" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 width-100 height-52" data-bs-target="#failModal" data-bs-toggle="modal"><span class="p10">인증 완료</span></button>
                  <!-- If Active -->
                  <button type="submit" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 width-100 height-52 btn-2-1 d-none" data-bs-target="#completionModal" data-bs-toggle="modal"><span class="p10">인증 완료</span></button>
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
                인증 메일을 전송했습니다.<br>
                이메일 인증 후 홈페이지의 정보입력<br>
                절차를 완료해주세요.
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