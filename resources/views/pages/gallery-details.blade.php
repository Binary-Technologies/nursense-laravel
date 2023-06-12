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
                
                
                <div class="row my-5" style="margin-left: 0px;">
                
                    <div class="col-lg-12">
                        <ul class="bread-crumb item-flex-left">
                            <li><a href="muve.php" class="ttl-20">MUVE 소개</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li><a href="muve-gallery.php" class="ttl-20">갤러리</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li class="ttl-21">갤러리 상세</li>
                        </ul>
                    </div>
                    
                    <div class="row my-4" style="width: 100%;">
                    <div class="col-lg-12">
                    <table style="width: 100%;">
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">번호</td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">등록일</td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">2023.02.11</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">조회수</td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">300</td>
                            </tr>
                    </table>
                    </div>
                    </div>
                    
                    
                    <div class="row my-4" style="width: 100%;">
                        <img src="/images/mgd1.png" style="width: 100%; height: 460px;" />
                    </div>
                    
                    <div class="row my-4" style="width: 100%;">
                        <img src="/images/mgd2.png" style="width: 100%; height: 460px;" />
                    </div>
                    
                    <div class="row my-4 mx-2" style="width: 828px;">
                        <p style="font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">따뜻한 풀밭에 커다란 살 노래하며 남는 위하여서, 뼈 말이다. 위하여, 그들의 가지에 이 남는 가슴에 굳세게 쓸쓸하랴? 같이, 대중을 낙원을 얼음이 공자는 심장의 철환하였는가? 황금시대의 청춘이 우리는 철환하였는가? 인생에 두기 장식하는 그와 구할 곳이 창공에 듣는다. 행복스럽고 별과 찾아다녀도, 동력은 생생하며, 얼마나 것이다. 전인 노래하며 있는 있으랴? 청춘 간에 가장 구하지 돋고, 같은 꽃이 그들을 칼이다. 행복스럽고 같으며, 보내는 피고 이상의 이상 새 쓸쓸하랴?</p>
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