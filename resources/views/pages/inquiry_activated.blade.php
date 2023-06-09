@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row">

            <div class="col-lg-2">
                @include('includes.sidenav-info')
            </div>

            <div class="col-lg-10" style="padding: 1%;">

                <section class="page-title text-center pt30 pb30 mt-4" style="background-image: linear-gradient(to right, #212880 , #4A227B); height: 190px">
                     <div class="auto-container">
                        <div class="content-box">
                            <div class="title" style="margin-top: -40px; margin-left: -40px;">
                                <h2 class="text-left text-white" style="font-family: pretendard-bold; font-size: 24px;">1:1 문의</h2>
                                <p class="text-left cl-w text-white" style="font-family: pretendard-regular; font-size: 14px;">문의를 남겨주시면 신속히 답변해 드리겠습니다.</p>
                            </div>
                        </div>
                    </div>
                </section>
                                
                <div class="row my-5" style="margin-left: 0px;">
                
                    <div class="col-lg-12">
                        <ul class="bread-crumb item-flex-left">
                            <li><a href="news_main.php" class="ttl-20">정보마당</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li class="ttl-20">1:1 문의</li>
                        </ul>
                    </div>
                    
                    <div class="row my-4" style="width: 100%;">
                    <div class="col-lg-12">
                        <form action="/info/inquiry/register" method="post">
                            @csrf
                            <table style="width: 100%;">
                                <tr>
                                    <td style="padding-left: 15px; text-align: left;"><b>제목</b></td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 15px; text-align: left;" colspan="2">
                                        <input  name="title" type="text" style="background: #FFFFFF; border: 1px solid #D2D3DA; border-radius: 6px;opacity: 1; width: 100%; height: 60px;" placeholder="제목을 입력하세요.">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 15px; text-align: left;"><b>내용</b></td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 15px; padding-top: 50px; text-align: left;" colspan="2">
                                        <textarea name="content" style=" border: 1px solid #D2D3DA; border-radius: 6px; text-align: left; font-family: pretendard-regular; color: #D2D3DA; opacity: 1; width: 100%; height: 380px;" placeholder="제목을 입력하세요."></textarea>
                                    </td>
                                </tr>
                                    <tr>
                                        <td colspan="2" style="text-align: right; padding: 20px; ">
                                            <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #F3F4F8; color: #9495A1; border-color: #F3F4F8; border-radius: 6px; padding-bottom: 10px;padding-top: 10px;padding-left: 50px;padding-right: 50px;" >문의 등록</button>
                                        </td>
                                    </tr>
                            </table>
                        </form>
                    </div>
                    </div>
                    
                </div>

            </div>

        </div>
</section>
@endsection