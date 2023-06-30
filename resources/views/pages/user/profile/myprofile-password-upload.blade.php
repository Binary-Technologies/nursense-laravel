@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row">

            <div class="col-lg-2">
                @include('includes.sidenav-info')
            </div>

            <div class="col-lg-10" style="padding: 1%;">

                <section class="img-sec-top text-center pt30 pb30 pl0 pr0" style="background-image: linear-gradient(to right, #212880 , #4A227B);">
                    <div class="pl30">
                        <div class="content-box">
                            <div class="title">
                                <h2 class="text-left text-white mb0">회원정보</h2>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row my-5">

                    <div class="col-lg-12">
                        <ul class="bread-crumb item-flex-left">
                            <li><a href="/profile/info" class="ttl-20">마이페이지</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li><a href="/profile/info" class="ttl-20">회원정보</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li class="ttl-21">비밀번호 변경</li>
                        </ul>
                    </div>

                    <div class="col-lg-12">

                        <!-- 1 -->
                        <div class="pt-5">

                            <div class="row">
                                <div class="col-lg-4"></div>

                                <div class="col-lg-4 comp-width-544 pl0 pr0">
                                    <div class="pb10 text-center">
                                        <span class="ttl-18">비밀번호 변경</span>
                                    </div>
                                    <div class="ttl-19 item-flex-center">
                                        <span class="comp-width-260 text-center">비밀번호 변경 시, 로그인된 모든 기기 및 브라우저에서 로그아웃되며 변경된 비밀번호로 다시 로그인 후 이용 가능합니다.</span>
                                    </div>
                                    <form method="post" name="" action="" autocomplete="off" class="col-md-12 p0 my-5">

                                        <div class="comp-width-544 item-flex-unset">
                                            <div class="form-group">
                                                <label for="password" class="ttl-12">기존 비밀번호</label>
                                                <input type="text" name="password" id="password" class="form-control ttl-23 comp-width-544 comp-height-60" placeholder="비밀번호를 입력하세요." aria-describedby="password" required>
                                            </div>
                                        </div>
                                        <div class="comp-width-544 item-flex-unset mt-4">
                                            <div class="form-group">
                                                <label for="password" class="ttl-12">새 비밀번호</label>
                                                <input type="text" name="passwordre" id="passwordre" class="form-control ttl-23 comp-width-544 comp-height-60" placeholder="새 비밀번호를 입력하세요." aria-describedby="passwordre" required>
                                                <div class="item-flex-unset">
                                                    <i class="fas fa-check ttl-3 pass-note-i"></i>
                                                    <p class="ttl-15 pass-note1">영문</p>
                                                    <i class="fas fa-check ttl-3 pass-note-i"></i>
                                                    <p class="ttl-15 pass-note1">숫자</p>
                                                    <i class="fas fa-check ttl-3 pass-note-i"></i>
                                                    <p class="ttl-15 pass-note1">8~20자</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comp-width-544 item-flex-unset mt-4">
                                            <div class="form-group">
                                                <label for="" class="ttl-12">새 비밀번호 확인</label>
                                                <input type="text" name="" id="" class="form-control ttl-23 comp-width-544 comp-height-60" placeholder="입력한 새 비밀번호를 재입력하세요." aria-describedby="" required>
                                            </div>
                                        </div>

                                        <div id="msg" class="alert-danger bg-transparent pt-2">
                                        @if (session('message'))
                                            {{ session('message') }}
                                        @endif

                                        </div>

                                        <div class="item-flex-center mt-4 mb-2">
                                            <button type="button" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 comp-width-410 comp-height-60"><span class="p10">저장</span></button>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-lg-4"></div>
                            </div>
                        </div>
                        <!-- 1 -->

                    </div>

                </div>

            </div>
        </div>
</section>
@endsection