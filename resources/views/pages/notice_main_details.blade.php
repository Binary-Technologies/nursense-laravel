@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
    <div class="row">

        <div class="col-lg-2">
            @include('includes.sidenav-info')
        </div>

        <div class="col-lg-10" style="padding: 1%;">

            <section class="wrapper-notice page-title text-center pt30 pb30 mt-4">
                <div class="auto-container">
                    <div class="content-box">
                        <div class="title" style="margin-top: -40px; margin-left: -40px;">
                            <h2 class="text-left text-white" style="font-family: pretendard-bold; font-size: 24px;">공지사항</h2>
                            <p class="text-left cl-w text-white" style="font-family: pretendard-regular; font-size: 14px;">중요한 안내사항을 한눈에 확인하세요.</p>
                        </div>
                    </div>
                </div>
            </section>


            <div class="row my-5" style="margin-left: 0px;">

                <div class="col-lg-12">
                    <ul class="bread-crumb item-flex-left">
                        <li><a href="/info/notice" class="ttl-20">정보마당</a></li>
                        <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                        <li class="ttl-20">공지사항</li>
                    </ul>
                </div>

                <div class="row my-4" style="width: 100%;">
                    <div class="col-lg-12">
                        <table style="width: 100%;">
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="width: 10%; padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    제목
                                </td>
                                <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    {{$notice->title}}
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    등록일
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    {{$notice->created_at->format('Y-m-d')}}
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    조회수
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    {{$notice->views}}

                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    내용
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    {!! html_entity_decode($notice->content) !!}

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right; padding: 20px; ">
                                    <a href="/info/notice" class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #ffffff;color: #212880;padding-bottom: 10px;padding-top: 10px;padding-left: 50px;padding-right: 50px;border-color: #1B3EA8; border-radius: 6px;">
                                        목록
                                    </a>

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection