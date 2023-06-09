@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container py-5">
    <div class="row item-flex-center py-5">

      <!-- Login Card -->
      <div class="col-md-6 col-sm-12 border-rad-5 py-5 px-4">

        <div class="text-center pt-3">
          <h3 class="login_title">로그인</h3>
          <p class="pt10 login_desc">Nursense 에 오신걸 환영합니다</p>
        </div>

        <div class="docu-details item-flex-center">

          {{-- {{ Form::open(array('url' => 'userLogin', 'method' => 'post')) }} --}}
          <form method="POST" action="/userLogin" autocomplete="off" class="col-md-12 mx-2 my-2">
            @csrf
            <div class="form-group input-group-sm relative-block">
              <label for="email" class="login_desc"><small>아이디</small></label>
              <input type="email" name='email' id='email' class="form-control login_text ttl-23 height-52 width-100" placeholder="아이디를 입력하세요." aria-describedby="Email" required style="{{session('errors') ? 'border: #FF625F thin solid' : ''}}" onkeyup="checkPassword()">
              <button type="button" class="btn clear-field1" onclick="">
                <!-- For clear field -->
                <i class="fas fa-times-circle"></i>
              </button>
            </div>

            <div class="form-group input-group-sm relative-block">
              <label for="password" class="login_desc"><small>비밀번호</small></label>
              <input type="password" name='password' id='password' class="form-control login_text ttl-23 height-52 width-100" placeholder="비밀번호를 입력하세요." required style="{{session('errors') ? 'border: #FF625F thin solid' : ''}}" onkeyup="checkPassword()">
              <button type="button" class="btn clear-field2" onclick="">
                <!-- For clear field -->
                <i class="fas fa-times-circle"></i>
              </button>
              <button type="button" id='togglePasswordBtn' class="btn show-hide-inputs" onclick="togglePassword()">
                <!-- For show -->
                <i class="fas fa-eye"></i>
                <!-- For hide -->
                <!-- <i class="fas fa-eye-slash d-none"></i> -->
              </button>
            </div>

            <div id="msg" class="item-flex-center login_error">
              {{ (session('errors')) ? '입력하신 정보와 일치하는 계정이 없습니다.' : '' }}
            </div>

            <div class="form-group mt-5">
              <div class="item-flex-center mt-3 mb-2">
                <!-- If Deactive -->
                <button type="submit" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 height-52 width-100"><span class="p10">로그인</span></button>
                <!-- If Active -->
                <button type="submit" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 height-52 width-100 btn-2-1 d-none"><span class="p10">로그인</span></button>
              </div>
            </div>

            <div class="item-flex-center">
              <a href="{{route('userLoginIdFind')}}" class="mr-2"><small class="form-text login_link">아이디 찾기</small></a>
              <span>&nbsp;|&nbsp;</span>
              <a href="{{route('userLoginPasswordFind')}}" class="ml-2"><small class="form-text login_link">비밀번호 찾기</small></a>
              <!-- <small id="" class="form-text text-muted"><a>?</a></small> -->
            </div>

          </form>

        </div>

      </div>
      <!-- Login Card -->

    </div>
</section>
@endsection
@section('scripts')
<script>
  var emailField = document.getElementById('email');
  var passwordField = document.getElementById("password");
  var passwordToggleBtn = document.getElementById("togglePasswordBtn");

  function checkPassword() {
    if (emailField.value.length > 0 && passwordField.value.length > 0) {
      document.getElementById('loginBtn').disabled = false;
    } else {
      document.getElementById('loginBtn').disabled = true;
    }
  };

  function togglePassword() {
    if (passwordField.type === "password") {
      passwordField.type = "text";
      passwordToggleBtn.innerHTML = "<i class='fas fa-eye-slash'></i>";
    } else {
      passwordField.type = "password";
      passwordToggleBtn.innerHTML = "<i class='fas fa-eye'></i>";
    }
  }
</script>
@endsection