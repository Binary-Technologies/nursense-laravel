@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container py-5">
    <div class="row item-flex-center py-5">

      <!-- Login Card -->
      <div class="col-md-8 col-sm-12 border-rad-5 py-5 px-4">

        <div class="text-center pt-3">
          <h3 class="login_title">비밀번호 변경</h3>
          <p class="pt10 login_desc">인증이 완료됐습니다. 비밀번호 변경을 진행해주세요.</p>
        </div>

        <form method="POST" action="#" autocomplete="off" class="col-md-12 mx-2 my-2">
          @csrf
          <div class="docu-details item-flex-center">

            <div class="mt-3">
              <div class="form-group comp-width-544">
                <label for="" class="login_desc"><small>새 비밀번호</small></label>
                <input type="text" name='' id='' class="form-control login_text ttl-23 height-52 width-100" placeholder="새 비밀번호를 입력하세요." aria-describedby="" required>
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

              <div class="form-group comp-width-544">
                <label for="" class="login_desc"><small>새 비밀번호 확인</small></label>
                <input type="text" name='' id='' class="form-control login_text ttl-23 height-52 width-100" placeholder="입력한 비밀먼호를 재입력하세요." aria-describedby="" required>
              </div>

              <div id="msg" class="item-flex-left login_error d-none">
                비밀번호가 일치하지 않습니다.
              </div>

              <div class="form-group mt-5">
                <div class="item-flex-center mt-3 mb-2">
                  <!-- If Deactive -->
                  <button type="submit" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 width-80 height-52" data-bs-target="#" data-bs-toggle="modal"><span class="p10">저장</span></button>
                  <!-- If Active -->
                  <button type="submit" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 width-80 height-52 btn-2-1 d-none" data-bs-target="#completionModal" data-bs-toggle="modal"><span class="p10">저장</span></button>
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