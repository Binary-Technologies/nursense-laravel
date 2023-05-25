
@extends('layouts.app')

@section('content')

  <section class="py-5">
    <div class="container py-5">
      <div class="row item-flex-center py-5">
  
        <!-- Login Card -->
        <div class="col-md-4 col-sm-12 border-rad-5 py-5 px-4">
  
          <div class="text-center pt-3">
            <h3>로그인</h3>
            <p class="pt10">Nursense 에 오신걸 환영합니다</p>
          </div>
  
          <div class="docu-details item-flex-center">
  
            {{-- {{ Form::open(array('url' => 'userLogin', 'method' => 'post')) }} --}}
            <form method="POST" action="{{ route('admin.login') }}" autocomplete="off" class="col-md-12 mx-2 my-2">
              @csrf
              <div class="form-group input-group-sm">
                <label for="uname"><small>아이디</small></label>
                <input type="email" name='email' id='email' class="form-control" placeholder="아이디를 입력하세요." aria-describedby="Uname" required>
              </div>
  
              <div class="form-group input-group-sm">
                <label for="pass"><small>비밀번호</small></label>
                <input type="password" name='password' id='password' class="form-control" placeholder="비밀번호를 입력하세요." required>
              </div>
  
              <div id="msg" class="alert-danger bg-transparent py-2">
                @if (session('error'))
                  {{ session('error') }}
                @endif
              </div>
  
              <div class="item-flex-center mt-3 mb-2">
                <button type="submit" class="btn btn-primary btn-sm border-rad-10"><span class="p10">로그인</span></button>
              </div>
  
              <div class="item-flex-center">
                <small class="form-text"><a href="#">아이디 찾기</a></small>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <small class="form-text"><a href="#">비밀번호 찾기</a></small>
                <!-- <small id="" class="form-text text-muted"><a>?</a></small> -->
              </div>
  
            </form>
  
          </div>
  
        </div>
        <!-- Login Card -->
  
      </div>
  </section>
@endsection