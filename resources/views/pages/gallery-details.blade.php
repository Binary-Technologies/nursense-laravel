@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row">

            <div class="col-lg-2">
                @include('includes.sidenav-info')
            </div>

            
            <div class="col-lg-10">

            <section class="wrapper-gallery page-title text-center pt30 pb30 mt-4">
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="title" style="margin-top: -40px;">
                                <h2 class="text-left text-white" style="font-family: pretendard-bold; font-size: 24px;">갤러리</h2>
                                <p class="text-left cl-w text-white" style="font-family: pretendard-regular; font-size: 14px;">MUVE의 다양한 활동들을 이미지로 확인해 보세요.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                
                <div class="row my-5" style="margin-left: 0px;">
                
                    <div class="col-lg-12">
                        <ul class="bread-crumb item-flex-left">
                            <li><a href="/muve/muve" class="ttl-20">MUVE 소개</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li><a href="/muve/gallery" class="ttl-20">갤러리</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li class="ttl-21">갤러리 상세</li>
                        </ul>
                    </div>
                    
                    <div class="row my-4" style="width: 100%;">
                    <div class="col-lg-12">
                    <table style="width: 100%;">
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center; width:15%;">번호</td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">{{$gallery->title}}</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center; width:15%;">등록일</td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">{{$gallery->created_at->format('Y-m-d')}}</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center; width:15%;">조회수</td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">{{$gallery->views}}</td>
                            </tr>
                    </table>
                    </div>
                    </div>
                    
                    
                    <div class="row my-4" style="width: 100%;">
                        <img src="{{ Storage::url($gallery->path) }}" style="width: 100%; height: 460px;">
                        
                    </div>
                    
                    {{-- <div class="row my-4" style="width: 100%;">
                        <img src="/images/mgd2.png" style="width: 100%; height: 460px;" />
                    </div> --}}
                    
                    <div class="row my-4 mx-2" style="width: 828px;">
                        <p style="font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">{!! html_entity_decode($gallery->details) !!}</p>
                    </div>
                    
                    <div style="border-bottom: #BABCDE solid thin; width: 100%;"></div>
                    
                    <table class="mt-5" style="width: 100%;">
                        <tr>
                            <td style="text-align: right;">
                          <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #ffffff;color: #9495A1;padding: 10px 50px; margin-right: 2%;">목록</button>
                       </td>
                        </tr>
                    </table>
                    
                </div>

            </div>

        </div>
</section>
@endsection