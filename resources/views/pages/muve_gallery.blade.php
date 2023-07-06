@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row">

            <div class="col-lg-2">
                @include('includes.sidenav-info')
            </div>

            <div class="col-lg-10">

                <section class="page-title text-center pt30 pb30 mt-4" style="background-image: url(images/wrappers/2.jpg); height: 190px">
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="title" style="margin-top: -40px;">
                                <h2 class="text-left text-white" style="font-family: pretendard-bold; font-size: 24px;">갤러리</h2>
                                <p class="text-left cl-w text-white" style="font-family: pretendard-regular; font-size: 14px;">MUVE의 다양한 활동들을 이미지로 확인해 보세요.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row" style="padding: 2%; padding-left:0;">
                    <div class="col-md-2">
                        <p style="font-family: pretendard-medium; font-size: 14px; color: #9495A1;">Total : {{$galleries->total()}}</p>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-6">
                        <form class="form-inline justify-content-end mx-3 my-2 my-lg-0">
                            <div class="input-group">
                                    <span><i class="fas fa-search home-search-i" area-hidden="true"></i></span>
                                    <input type="text" class="form-control search-bar-custom" placeholder=" 검색어를 입력하세요." aria-label="Search">
                            </div>
                            
                            <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="width: 118px; height: 40px; margin-left: 20px; font-size:20px;">검색</button>
                        </form>
                    </div>
                    
                </div>
                    @foreach ($galleries->chunk(5) as $galleryChunk)
                    <div class="row">
                        <!--<div class="col-lg-1"></div>-->
                        @foreach ($galleryChunk as $gallery)
                        <!-- 1 -->
                        <div class="gallery_img_margin">

                            <div class="item-flex-center">
                                <a href="{{ route('muve-gallery', ['gallery' => $gallery->id])  }}">
                                    <img src="{{ Storage::url($gallery->path) }}" class="gallery_img" height="200px">
                                </a>
                            </div>
                            <div class="pt20">
                                <h5 style="font-family: pretendard-semibold; font-size: 16px; color: #090909;">이미지 센싱 기반 모션인식 디바이스</h5>
                            </div>
                            <div class="text-justify">
                                <p class="gallery-img-desc pt5" style="font-family: pretendard-regular; font-size: 14px; color: #9495A1;"><립모션 장치> <위 장치로 시뮬레이션 하는 모습> {!! html_entity_decode($gallery->details) !!}</p>
                            </div>

                            <div class="item-flex-left position-rel">
                                <p class="gallery-img-desc-date pr-4" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">{{$gallery->created_at->format('Y-m-d')}}</p>
                                <span class="br-right"></span>
                                <p class="gallery-img-desc-views" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">조회수 {{$gallery->views}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="item-flex-end">
            {{ $galleries->links('vendor.pagination.default') }}
        </div>
        
</section>
@endsection