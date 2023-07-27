@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row row-width-1920">

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
                            <li class="ttl-21">프로필 이미지 변경</li>
                        </ul>
                    </div>

                    <div class="col-lg-12">

                        <!-- 1 -->
                        <div class="pt-5">

                            <div class="pb60 text-center">
                                <span class="ttl-18">프로필 이미지 변경</span>
                            </div>
                            <div class="item-flex-center relative-block profile-img-outer">
                                {{-- {{$userDp->thumbnail}} --}}
                                @if ($user->thumbnail != null)
                                    <img src="{{ Storage::url($user->thumbnail) }}" alt="dp">
                                @else
                                    <img src="/images/face.png" alt="dp"> 
                                @endif
                                
                            </div>
                            <div class="ttl-19 item-flex-center">
                                <span>미리보기</span>
                            </div>

                            <div class="row pt-4">
                                <div class="col-lg-12 item-flex-center">
                                    <div class="bg-color-2 border-dashed border-rad-10 comp-width-544 comp-height-160">
                                        <form class="form-inline justify-content-start" method="post" action="/profile/dpUpload/{{$user->id}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group dp-upload-form-grp">

                                                <input type="file" name="thumbnail" class="form-control dp-upload-input" placeholder="" aria-label="DP">
                                                {{-- <a href="" class="ttl-17 p5 relative-block title-border-b2" onclick="">삭제</a> --}}
                                                <button type="submit" class="btn btn9">Change</button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4 item-flex-left mt-2">
                                    <p class="ttl-3 dp-up-note">*100mb이하의 jpg, png파일만 등록할 수 있습니다.</p>
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