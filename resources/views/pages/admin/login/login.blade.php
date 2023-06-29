@extends('layouts.admin-login')

@section('content')
<div class="container px-0 mx-0">
    <div class="row">
        <div class="left-side bg-color-3 item-flex-align-center">
            <div class="">
                <img src="{{ asset('storage/images/userlogo/userSiteLogo.png') }}" class="">
            </div>
        </div>
        <div class="right-side item-flex-align-center">
            <div class="login-box">
                <div class="item-flex-center">
                    <img src="{{ asset('assets/img/logo-title.png') }}">
                </div>
                <div class="login-sub-ttl text-center py-4">
                    <span>해당 페이지는 관리자 계정만 접속 가능합니다.</span>
                </div>
                <div class="login-form-box">
                    <form method="post" id="loginForm" class="login-form" action="/userLogin">
                        @csrf
                        <div class="mb-4">
                            <label for="uName" class="form-label login-lbl">아이디</label>
                            <input type="text" class="form-control" name="email" id="uName" placeholder="아이디를 입력하세요.">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label login-lbl">비밀번호</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="비밀번호를 입력하세요.">
                        </div>

                        <div class="col-12 mt-4">
                            <button type="submit" id="loginBtn" class="btn login-btn mt-2">로그인</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection