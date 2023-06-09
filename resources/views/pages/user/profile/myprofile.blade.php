@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row">

            <div class="col-lg-2">
                @include('includes.sidenav-info')
            </div>

            <div class="col-lg-10" style="padding: 1%;">

                <section class="img-sec-top text-center comp-height-120 py44 pl0 pr0" style="background-image: linear-gradient(to right, #212880 , #4A227B);">
                    <div class="pl30">
                        <div class="content-box">
                            <div class="title">
                                <h2 class="text-left text-white mb0">회원정보</h2>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row my-5">

                    <div class="col-lg-3">

                        <!-- 1 -->
                        <div class="pt-4">

                            <div class="item-flex-center relative-block profile-img-outer">
                                <img src="/images/face.png" alt="dp">
                                <div class="edit_dp_i">
                                    <a href="/profile/info/dp"><img src="/images/dp_icon.png" class=""></a>
                                </div>
                            </div>
                            <div class="pt15 pb10 text-center">
                                <span class="ttl-14">{{$user->name}}</span>
                            </div>
                            <div class="ttl-15 item-flex-center">
                                <span>ID</span>
                                <span class="mx-2">&#x2022;</span>
                                <span>{{isset($user->std_id) ? $user->std_id : $user->inst_id}}</span>
                            </div>

                        </div>
                        <!-- 1 -->

                    </div>

                    <div class="col-lg-9">

                        <div class="row">
                            <div class="col-lg-12 pl-0 py-4">
                                <h4 class="ttl-5 relative-block title-border-t">기본 정보</h4>
                            </div>
                        </div>
                        <div class="row mr-5">
                            <div class="col-lg-12 bg-color-2 border-rad-10">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="ttl-3 pt-3 mb-1">학교</label>
                                        <p class="ttl-12 ">{{$user->uni_id}}</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="ttl-3 pt-3 mb-1">학과</label>
                                        <p class="ttl-12 ">{{$user->dep_id}}</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-b-cus2"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="ttl-3 pt-3 mb-1">학교</label>
                                        <p class="ttl-12 ">{{$user->grade}}</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="ttl-3 pt-3 mb-1">학과</label>
                                        <p class="ttl-12 ">{{isset($user->std_id) ? $user->std_id : $user->inst_id}}</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-b-cus2"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="ttl-3 pt-3 mb-1">학교</label>
                                        <p class="ttl-12 ">{{$user->occupation}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-5">
                            <div class="col-lg-12 pl-0 pb-4">
                                <h4 class="ttl-5 relative-block title-border-t">연락처</h4>
                            </div>
                        </div>
                        <div class="row mr-5">

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12 pl-0">
                                        <label class="ttl-16 mb-2">휴대폰 번호</label>
                                    </div>
                                    <div class="col-lg-11 bg-color-2 border-rad-10">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="ttl-12 pt-3">{{$user->pno}}</p>
                                                <span class="relative-block">
                                                    <a href="/profile/info/contact" class="ttl-17 move-right1 relative-block title-border-b1">수정</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12 pl-0">
                                        <label class="ttl-16 mb-2">이메일</label>
                                    </div>
                                    <div class="col-lg-12 bg-color-2 border-rad-10">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="ttl-12 pt-3">{{$user->email}}</p>
                                                <span class="relative-block">
                                                    <a href="/profile/info/email" class="ttl-17 move-right2 relative-block title-border-b1">수정</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row pt-5">
                            <div class="col-lg-12 pl-0 pb-4">
                                <h4 class="ttl-5 relative-block title-border-t">계정 정보</h4>
                            </div>
                        </div>
                        <div class="row mr-5">

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12 pl-0">
                                        <label class="ttl-16 mb-2">아이디</label>
                                    </div>
                                    <div class="col-lg-11 bg-color-2 border-rad-10">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="ttl-12 pt-3">{{isset($user->std_id) ? $user->std_id : $user->inst_id}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12 pl-0">
                                        <label class="ttl-16 mb-2">비밀번호</label>
                                    </div>
                                    <div class="col-lg-12 bg-color-2 border-rad-10">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="ttl-12 pt-3">&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;</p>
                                                <span class="relative-block">
                                                    <a href="/profile/info/password" class="ttl-17 move-right2 relative-block title-border-b1">수정</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection