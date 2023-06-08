@extends('layouts.app')

@section('content')
<!-- banner-section -->
<section class="banner-section" style="background-color: #F4F5FA; height:720px;">
    <div class="row" style="margin-left: 90px; margin-top: 90px;">
        <div class="col-lg-3">
            <h5 style="margin-top: 100px; font-family: pretendard-bold; font-size: 30px; color: #3941A2;">현실을 넘어 미래를 꿈꾸는 교육</h5>
            <div>&nbsp;</div>
            <p style="font-family: pretendard-medium; font-size: 16px; color: #616474;">디지털스마트교육센터는 지속적인 혁신과 변화, 그리고 도전을 통해 새로운 교육 패러다임을 제시하고 있습니다. 디지털 시대를 준비하는 여러분들의 미래를 응원합니다.</p>
             <div class="progress" style=" height: 8px;">
                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%; background-color: #7479BD;">
                </div>
            </div>
            <div style="padding-bottom: 100px;">&nbsp;</div>
            <span><img src="images/arrow1.png" class="arrow_btn"></span>
            <span><img src="images/arrow2.png" class="arrow_btn"></span>
        </div>
        <div class="col-lg-9">
            @foreach ($banners as $banner)
            
            <img src="{{ Storage::url($banner->image) }}" style="width: 1254px; height: 546px; border-radius: 16px;">
            @endforeach
            
           <!-- <img src="images/sliders/slide.jpg" style="width: 1254px; height: 546px; border-radius: 16px;"/>  -->
            <img src="images/msg.png" class="arrow_btn" style="width: 60px; float: right; margin-top: 480px; margin-right: 15px;"/>
        </div>
    </div>
</section>
<!-- banner-section end -->

<section style="width: 1920px;">
    <div class="container pt-5" style="width: 100%;padding: 0px; margin: 0px;">
        <h2 style="font-family: pretendard-bold; font-size: 28px; color: #090909; margin-left: 120px;">디지털스마트교육센터 안내사항</h2>
        <div class="row" style="width: 1920px; padding: 40px 120px;">

            <!-- Card -->
            <div class="col-md-6" style="padding: 0px;">
                <div class="border-rad-10" style="margin-right: 10px; box-shadow: 0px 0px 6px #0000001F;">
                    <div class="docu-details py-3 px-3 session-row" style="width: 100%; border-radius: 10px 10px 0px 0px;">
                        <div class="row">
                            <div class="col-md-9">
                                <h4 style="font-family: pretendard-bold; font-size: 26px; color: #090909;">공지사항</h4>
                            </div>
                            <div class="col-md-3 text-right">
                                <a href="add_news.php"><i class="fas fa-plus" style="color: #35418F;"></i></a>
                            </div>
                        </div>
                        <div class="row mt15">
                            <div class="col-md-9">
                                <h5 style="font-family: pretendard-semibold; font-size: 18px; color: #090909;"><img src="images/speak.png" style="width: 26px; margin-right: 15px;"/>{{$main_notice[0]->title}}</h5>
                            </div>
                            <div class="col-md-3 text-right">
                                <p style="font-family: pretendard-regular; font-size: 14px; color: #9495A1;">{{$main_notice[0]->updated_at}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-justify">
                                <p class="pt10" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">{{$main_notice[0]->content}}
                                
                                    {!! html_entity_decode($main_notice[0]->content) !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    @forelse ($notices as $notice)
                    <div class="row border-rad-5 mx-1 mb-1" style="border-bottom: #F3F4F8 solid thin;">

                    <div class="col-md-9">
                        <div class="cat-li py-3">
                            <h5 class="pt-2 mb-1" style="font-family: pretendard-semibold; font-size: 18px; color: #090909;">{{ $notice->title }}</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="cat-li py-3 item-flex-right">
                            <p class="pt-2 mb-0" style="font-family: pretendard-regular; font-size: 14px; color: #9495A1;">
                                {{ $notice->updated_at }}
                
                            </p>
                        </div>
                    </div>

                    <input type="hidden" value="{{ $notice->id }}" id="newsId">
                    <input type="hidden" value="{{ $notice->exposure }}" id="newsStatus">

                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        <!-- Card -->

        <!-- Card -->
            <div class="col-md-6" style="padding: 0px;">
                <div class="border-rad-10" style="margin-left: 10px; box-shadow: 0px 0px 6px #0000001F;">
                    <div class="docu-details py-3 px-3 session-row2" style="width: 100%; border-radius: 10px 10px 0px 0px;">
                        <div class="row">
                            <div class="col-md-9">
                                <h4 style="font-family: pretendard-bold; font-size: 26px; color: #090909;">소식</h4>
                            </div>
                            <div class="col-md-3 text-right">
                                <a href="add_news.php"><i class="fas fa-plus" style="color: #35418F;"></i></a>
                            </div>
                        </div>
                        <div class="row mt15">
                            <div class="col-md-9">
                                <h5 style="font-family: pretendard-semibold; font-size: 18px; color: #090909;"><img src="images/speak.png" style="width: 26px; margin-right: 15px;"/><b>{{$main_news[0]->title}}</b></h5>
                            </div>
                            <div class="col-md-3 text-right">
                            <p style="font-family: pretendard-regular; font-size: 14px; color: #9495A1;">{{$main_news[0]->updated_at}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-justify">
                            <p class="pt10" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">{!! html_entity_decode($main_news[0]->content) !!}</p>
                            </div>
                        </div>
                    </div>

                    @forelse ($news as $newsItem)
                    <div class="row border-rad-5 mx-1 mb-1" style="border-bottom: #F3F4F8 solid thin;">
                        <div class="col-md-9">
                            <div class="cat-li py-3">
                                <h5 class="pt-2 mb-1" style="font-family: pretendard-semibold; font-size: 18px; color: #090909;">{{ $newsItem->title }}</h5>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="cat-li py-3 item-flex-right">
                                <p class="pt-2 mb-0" style="font-family: pretendard-regular; font-size: 14px; color: #9495A1;">{{ $newsItem->updated_at }}</p>
                            </div>
                        </div>
                        <input type="hidden" value="{{ $newsItem->id }}" id="newsId">
                        <input type="hidden" value="{{ $newsItem->exposure }}" id="newsStatus">
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

@endsection