@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
    <div class="container">
        <div class="row" style="width: 1920px;">

            <div class="col-lg-2">
            {{-- TODO: Side navbar --}}
            </div>

            <div class="col-lg-10" style="width: 1396px; margin-left: -420px;">

                <section class="page-title text-center pt30 pb30 mt-4" style="background-image: linear-gradient(to right, #212880 , #4A227B); height: 190px">
                    <div class="pl30">
                        <div class="content-box">
                            <div class="title" style="margin-top: 40px;">
                                <h2 class="text-left text-white" style="font-family: pretendard-bold; font-size: 24px; color: #3941A2;">오시는 길</h2>
                                <h5 class="text-left text-white" style="font-family: pretendard-regular; font-size: 14px; color: #3941A2;">NURESENSE 찾아오시는 길을 안내해 드립니다.</h5>
                            </div>
                        </div>
                    </div>

                </section>

                <div class="row my-5">

                    <div class="col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d202.06689810955493!2d128.6249061727289!3d35.8717923353362!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3565e148cd1eee37%3A0x3a084f76fa4d41fd!2z67KU7Zi47JWE7J207Yuw7KO87Iud7ZqM7IKs!5e0!3m2!1sen!2slk!4v1683622725967!5m2!1sen!2slk" width="970" height="560" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-4">
                        <hr/>
                        <h4  style="font-family: pretendard-bold; font-size: 16px; color: #212880;">주소</h4>
                        <p style="font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">대구광역시 동구 동대구로 465 대구스케일업허브 405·406호</p>
                        <hr/>
                        <h4  style="font-family: pretendard-bold; font-size: 16px; color: #212880;">교통편</h4>
                        <p style="font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">동대구역 2번출구에서 757m</p>
                        <hr/>
                        <h4  style="font-family: pretendard-bold; font-size: 16px; color: #212880;">연락처</h4>
                        <p style="font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">010 – 9436 - 5543</p>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12 shadow border-rad-5 mt-5 px-4">

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection