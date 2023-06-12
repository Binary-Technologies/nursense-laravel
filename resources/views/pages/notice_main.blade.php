@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row">

            <div class="col-lg-2">
                @include('includes.sidenav-info')
            </div>

            <div class="col-lg-10" style="padding: 1%;">

                <section class="page-title text-center pt30 pb30 mt-4" style="background-image: linear-gradient(to right, #212880 , #4A227B); height: 190px">
                    <div class="pl30">
                        <div class="content-box">
                            <div class="title" style="margin-top: 40px;">
                                <h2 class="text-left text-white" style="font-family: pretendard-bold; font-size: 24px; color: #3941A2;">소식</h2>
                                <h5 class="text-left text-white" style="font-family: pretendard-regular; font-size: 14px; color: #3941A2;">새로운 소식을 한곳에서 확인하세요.</h5>
                            </div>
                        </div>
                    </div>

                </section>

                <div class="row" style="font-size: 10px;">
                    <div class="col-lg-1" style="margin-top: 5%;">
                        <div class="item-flex-center">
                            <img src="/images/horn.png" style="width: 60px; height: 60px;">
                        </div>
                    </div>
                    <div class="col-lg-11">
                        
                        <div class="row">
                            @foreach ($notices as $notice)
                                @if ($notice->exposure === 0)
                                    <div class="col-lg-4">
                                    <div class="border-rad-10 mt-5 " style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE);color: #3941A2; padding: 15px;">
                                        <p style="font-family: pretendard-bold; font-size: 16px; color: #3941A2;">{{$notice->title}}</p>
                                        <p style="font-family: pretendard-regular; font-size: 16px; color: #767885;">{!! html_entity_decode($notice->content) !!}</p>
                                    </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row my-3" style="margin-left: 0px;">

                    <div class="col-md-8">
                        Total : {{$notices->count()}}
                    </div>
                    <div class="col-md-4">
                        <form class="form-inline justify-content-end mx-3 my-2 my-lg-0">
                            <div class="input-group">
                                    <span><i class="fas fa-search home-search-i" area-hidden="true"></i></span>
                                    <input type="text" class="form-control search-bar-custom" placeholder=" 검색어를 입력하세요." aria-label="Search">
                            </div>
                            
                            <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="width: 118px; height: 40px; margin-left: 20px;">검색</button>
                        </form>
                    </div>

                </div>

                <div class="row" style="font-size: 14px;">
                    <div class="col-lg-12 border-rad-5 mt-2 px-4">
                        <table style="width: 100%; text-align: center; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                            <tr style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                                <th style="width: 10%; padding: 20px;">번호</th>
                                <th style="width: 55%">제목</th>
                                <th style="width: 20%">제목</th>
                                <th style="width: 15%">조회 수</th>
                            </tr>
                            @foreach ($notices as $notice)
                                
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 10%; padding: 20px;">{{$notice->id}}</td>
                                <td style="width: 55%; text-align: left;">
                                    <a href="/info/notice/details/{{$notice->id}}">
                                        {{$notice->title}}
                                    </a>
                                </td>
                                <td style="width: 20%">{{$notice->created_at->format('Y-m-d')}}</td>
                                <td style="width: 15%">{{$notice->views}}</td>
                            </tr>
                            @endforeach
                            
                        </table>
                    </div>
                </div>
            </div>

<nav aria-label="Page navigation muve gallery" style="margin-left: 50%;">
    <ul class="pagination">
    <li class="page-item">
      <a class="page-link pagination_link_arrows pagination_link_arrows_disabled" href="#" aria-label="Previous">
        <span aria-hidden="true">&lt;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link pagination_link pagination_link_active" href="">1</a></li>
    <li class="page-item"><a class="page-link pagination_link" href="#">2</a></li>
    <li class="page-item"><a class="page-link pagination_link" href="#">3</a></li>
    <li class="page-item"><a class="page-link pagination_link" href="#">4</a></li>
    <li class="page-item"><a class="page-link pagination_link" href="#">5</a></li>
    <li class="page-item"><a class="page-link pagination_link" href="#">6</a></li>
    <li class="page-item"><a class="page-link pagination_link" href="#">7</a></li>
    <li class="page-item">
      <a class="page-link pagination_link_arrows" href="#" aria-label="Next">
        <span aria-hidden="true">&gt;</span>
      </a>
    </li>
  </ul>
</nav>
        </div>
    </div>
</section>

@endsection