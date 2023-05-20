@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
    <div class="container">
        <div class="row row-width-1920">

            <div class="col-lg-2">
            {{-- TODO: Side navbar --}}
            </div>

            <div class="col-lg-10 sec-width-1396">

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
                                <img src="images/face.png" alt="dp">
                                <div class="edit_dp_i">
                                    <a href="myprofile-dp-upload.php"><img src="images/dp_icon.png" class=""></a>
                                </div>
                            </div>
                            <div class="pt15 pb10 text-center">
                                <span class="ttl-14">홍길동</span>
                            </div>
                            <div class="ttl-15 item-flex-center">
                                <span>ID</span>
                                <span class="mx-2">&#x2022;</span>
                                <span>abc123490</span>
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
                                        <p class="ttl-12 ">경북대학교</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="ttl-3 pt-3 mb-1">학과</label>
                                        <p class="ttl-12 ">간호학과</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-b-cus2"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="ttl-3 pt-3 mb-1">학교</label>
                                        <p class="ttl-12 ">3학년</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="ttl-3 pt-3 mb-1">학과</label>
                                        <p class="ttl-12 ">12345678</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-b-cus2"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="ttl-3 pt-3 mb-1">학교</label>
                                        <p class="ttl-12 ">간호사</p>
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
                                                <p class="ttl-12 pt-3">01012345678</p>
                                                <span class="relative-block">
                                                    <a href="myprofile-contact-upload.php" class="ttl-17 move-right1 relative-block title-border-b1">수정</a>
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
                                                <p class="ttl-12 pt-3">abc@naver.com</p>
                                                <span class="relative-block">
                                                    <a href="myprofile-email-upload.php" class="ttl-17 move-right2 relative-block title-border-b1">수정</a>
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
                                                <p class="ttl-12 pt-3">Abc123490</p>
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
                                                    <a href="myprofile-password-upload.php" class="ttl-17 move-right2 relative-block title-border-b1">수정</a>
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