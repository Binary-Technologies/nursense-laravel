@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container py-5">
    <div class="row item-flex-center py-5">

      <!-- Login Card -->
      <div class="col-md-4 col-sm-12 border-rad-5 py-5 px-4">

        <div class="text-center pt-3">
          <h3 class="login_title">로그인</h3>
          <p class="pt10 login_desc">Nursense 에 오신걸 환영합니다</p>
        </div>

        <div class="docu-details item-flex-center">

          {{-- {{ Form::open(array('url' => 'userLogin', 'method' => 'post')) }} --}}
          <form method="POST" action="/userLogin" autocomplete="off" class="col-md-12 mx-2 my-2">
            @csrf
            <div class="form-group input-group-sm">
              <label for="email" class="login_desc"><small>아이디</small></label>
              <input type="email" name='email' id='email' class="form-control login_text ttl-23 comp-width-402 comp-height-60" placeholder="아이디를 입력하세요." aria-describedby="Email" required style="{{session('errors') ? 'border: #FF625F thin solid' : ''}}">
            </div>

            <div class="form-group input-group-sm">
              <label for="password" class="login_desc"><small>비밀번호</small></label>
              <input type="password" name='password' id='password' class="form-control login_text ttl-23 comp-width-402 comp-height-60" placeholder="비밀번호를 입력하세요." required style="{{session('errors') ? 'border: #FF625F thin solid' : ''}}">
            </div>

            <div id="msg" class="item-flex-center login_error">
              {{ (session('errors')) ? '입력하신 정보와 일치하는 계정이 없습니다.' : '' }}
            </div>

            <div class="item-flex-center mt-3 mb-2 comp-width-402">
              <button type="submit" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 comp-width-402 comp-height-60"><span class="p10">로그인</span></button>

              <a href="/userLoginEmailAuth" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 comp-width-402 comp-height-60">EmailAuth</a>
            </div>

            <div class="item-flex-center">
              <a href="#"><small class="form-text login_link">아이디 찾기</small></a>
              <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
              <a href="#"><small class="form-text login_link">비밀번호 찾기</small></a>
              <!-- <small id="" class="form-text text-muted"><a>?</a></small> -->
            </div>

          </form>

        </div>

      </div>
      <!-- Login Card -->

    </div>
</section>
@endsection