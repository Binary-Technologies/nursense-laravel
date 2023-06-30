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
                            <li class="ttl-21">휴대폰 번호 수정</li>
                        </ul>
                    </div>

                    <div class="col-lg-12">

                        <!-- 1 -->
                        <div class="pt-5">

                            <div class="row">
                                <div class="col-lg-4"></div>

                                <div class="col-lg-4 comp-width-544 pl0 pr0">
                                    <div class="pb10 text-center">
                                        <span class="ttl-18">휴대폰 번호 수정</span>
                                    </div>
                                    <div class="ttl-19 item-flex-center">
                                        <span class="comp-width-260 text-center">휴대폰 번호 입력 후, 인증하기 버튼을 클릭하여 해당 번호로 전송된 인증번호를 확인해주세요.</span>
                                    </div>
                                    <form method="post" name="" action="#" autocomplete="off" class="col-md-12 p0 my-5">

                                        <div class="comp-width-544 item-flex-unset">
                                            <div class="form-group pr12">
                                                <label for="contact" class="ttl-12">휴대폰 번호</label>
                                                <input type="text" name="contact" id="contact" class="form-control ttl-23 comp-width-402 comp-height-60" placeholder="휴대폰 번호를 입력해주세요." aria-describedby="email" required>
                                            </div>
                                            <div class="item-flex-unset">
                                                <button type="button" class="btn btn-primary border-rad-6 ttl-15 btn-mprof1 comp-width-118 comp-height-60 p0 ml10 mt-3"><span class="">인증번호 전송</span></button>
                                            </div>
                                        </div>
                                        <div class="comp-width-544 item-flex-unset mt-1">
                                            <div class="form-group">
                                                <input type="text" name="otp" id="otp" class="form-control ttl-23 comp-width-544 comp-height-60" placeholder="인증번호를 입력하세요." aria-describedby="otp" required>
                                            </div>
                                        </div>

                                        <div id="msg" class="alert-danger bg-transparent pt-2">
                                        @if (session('error'))
                                            {{ session('error') }}
                                        @endif

                                        </div>

                                        <div class="item-flex-center mt-4 mb-2">
                                            <button type="button" class="btn btn-primary border-rad-6 ttl-22 btn-mprof1 comp-width-410 comp-height-60"><span class="p10">인증하기</span></button>
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