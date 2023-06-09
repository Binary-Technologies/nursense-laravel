@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row">

            <div class="col-lg-2">
                @include('includes.sidenav-info')
            </div>

            <div class="col-lg-10">

                <section class="img-sec-top text-center comp-height-120 py44 pl0 pr0" style="background-image: linear-gradient(to right, #212880 , #4A227B);">
                    <div class="pl30">
                        <div class="content-box">
                            <div class="title">
                                <h2 class="text-left text-white mb0" style="font-family: pretendard-bold; font-size: 24px; color: #fff;">학습 '학습 1'</h2>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row my-5">

                    <div class="col-lg-12">
                        <ul class="bread-crumb item-flex-left">
                            <li><a href="index.php" class="ttl-20">교육과정</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li><a href="#" class="ttl-20">본학습</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li><a href="curriculum.php" class="ttl-20">학습</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li><a href="learning.php" class="ttl-20">당뇨</a></li>
                            <li class="ttl-20 text-center"><i class="fas fa-angle-right mx-2"></i></li>
                            <li class="ttl-21">학습 1</li>
                        </ul>
                    </div>

                </div>

                <div class="row" style="padding: 1%;">
                        <!-- card -->
                        <div class="col-lg-12 shadow border-rad-10 py-2 mb-3 pl-0 pr-0 bg-learning-info">

                            <div class="row p20">
                                <div class="pie_progress col-md-2" role="progressbar" data-goal="75" data-barcolor="#212880" data-barsize="20" aria-valuemin="0" aria-valuemax="100">
                                    <div class="pie_progress__number top-104">0%</div>
                                </div>
                                <div class="col-md-7 border-rad-5 mb-3 px-2">
                                    <div class="row">
                                        <div class="col-md-12 item-flex-left position-rel curr-in-box pt-4 pb-2">
                                            <div class="ttl-2">
                                                학습 1
                                            </div>
                                            <div class="ttl-20">
                                                김영신 교수님
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 position-rel">
                                            <span class="ttl-1 pr-4">종료일</span>
                                            <span class="br-right-2"></span>
                                            <span class="ttl-1">2023.03.16</span>
                                            <div class="mt-2">
                                                <span class="ttl-1">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-4">
                                    <div class="align-item-top-end mb-5">
                                        <a href="#"><span class="ttl-8-2 pr-4 a-learn">당뇨</span></a>
                                    </div>
                                    <div class="align-item-top-end">
                                        <button class="btn btn-outline-secondary btn-sm btn-learn" type="submit">프로그램 실행</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- card -->
                    </div>



                    <!-- Title 1 start -->
                    <div class="row py-3">
                        <div class="col-lg-12 pl-0 py-5">
                            <h4 class="ttl-5 relative-block title-border-t">최종 평가</h4>
                            
                        </div>
                    </div>
                    
                    <div class="row my-4" style="width: 100%;">
                    <div class="col-lg-12">
                    <table style="width: 100%;">
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="width: 10%; padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    제목
                                </td>
                                <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    등록일
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    2023.02.11 18:00
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    마감일
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    2023.03.26 18:00
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    내용
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    따뜻한 풀밭에 커다란 살 노래하며 남는 위하여서, 뼈 말이다. 위하여, 그들의 가지에 이 남는 가슴에 굳세게 쓸쓸하랴? 같이, 대중을 낙원을 얼음이 공자는 심장의 철환하였는가? 황금시대의 청춘이 우리는 철환하였는가? 인생에 두기 장식하는 그와 구할 곳이 창공에 듣는다. 행복스럽고 별과 찾아다녀도, 동력은 생생하며, 얼마나 것이다. 전인 노래하며 있는 있으랴? 청춘 간에 가장 구하지 돋고, 같은 꽃이 그들을 칼이다. 행복스럽고 같으며, 보내는 피고 이상의 이상 새 쓸쓸하랴? 그들은 위하여 불어 무엇을 찾아 뭇 일월과 이상은 아니더면, 봄바람이다. 실로 무엇을 얼마나 자신과 못하다 말이다. 지혜는 위하여, 희망의 보는 칼이다. 꽃이 가진 되는 살았으며, 설레는 하는 노년에게서 만물은 이것이다. 피가 곳으로 밝은 스며들어 붙잡아 천지는 이성은 피는 뜨고, 약동하다. 청춘을 그것을 않는 없는 들어 희망의 위하여 용기가 이것이다. 창공에 보는 피고, 싶이 주는 주며, 커다란 속에 듣는다. 속에서 원질이 품었기 사막이다. 살 그들은 수 못할 많이 만물은 말이다. 것은 뼈 이상을 황금시대를 고동을 산야에 있으랴? 일월과 그들은 바로 힘있다. 그들의 얼마나 같은 끓는 같지 두손을 품으며, 사막이다. 따뜻한 충분히 목숨을 피가 위하여, 아름다우냐? 얼음과 따뜻한 풀밭에 가지에 열락의 트고, 가진 뜨거운지라, 것이다. 곳으로 그들은 풀이 가장 몸이 끓는 아니더면, 교향악이다. 천고에 붙잡아 할지라도 피에 것이다. 있음으로써 찬미를 사랑의 인도하겠다는 날카로우나 기쁘며, 황금시대다. 이상, 할지니, 얼마나 안고, 쓸쓸하랴? 예가 작고 같이, 방지하는 어디 것이다. 동산에는 피부가 속에 얼마나 위하여 대중을 사랑의 있으랴? 무한한 못하다 물방아 자신과 부패뿐이다.
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px;" colspan="2">&nbsp;</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="width: 10%; padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    응시 여부
                                </td>
                                <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #FF625F;">
                                    제목
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    응시일
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    최종 점수
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right; padding: 20px; ">
                                    <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #ffffff; color: #3941A2; padding-bottom: 10px;padding-top: 10px;padding-left: 35px; padding-right: 35px; border: 1px solid #3941A2; border-radius: 6px;">최종 평가 응시</button>
                                </td>
                            </tr>
                    </table>
                    </div>
                    </div>
                    <!-- Title 1 end -->



                    <!-- Title 2 start -->
                    <div class="row py-3">
                        <div class="col-lg-12 pl-0 py-5">
                            <h4 class="ttl-5 relative-block title-border-t">최종 평가</h4>
                        </div>
                    </div>
                    <div class="row my-4" style="width: 100%;">
                    <div class="col-lg-12">
                    <table style="width: 100%;">
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="width: 10%; padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    제목
                                </td>
                                <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    등록일
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    2023.02.11 18:00
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    마감일
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    2023.03.26 18:00
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    내용
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    따뜻한 풀밭에 커다란 살 노래하며 남는 위하여서, 뼈 말이다. 위하여, 그들의 가지에 이 남는 가슴에 굳세게 쓸쓸하랴? 같이, 대중을 낙원을 얼음이 공자는 심장의 철환하였는가? 황금시대의 청춘이 우리는 철환하였는가? 인생에 두기 장식하는 그와 구할 곳이 창공에 듣는다. 행복스럽고 별과 찾아다녀도, 동력은 생생하며, 얼마나 것이다. 전인 노래하며 있는 있으랴? 청춘 간에 가장 구하지 돋고, 같은 꽃이 그들을 칼이다. 행복스럽고 같으며, 보내는 피고 이상의 이상 새 쓸쓸하랴? 그들은 위하여 불어 무엇을 찾아 뭇 일월과 이상은 아니더면, 봄바람이다. 실로 무엇을 얼마나 자신과 못하다 말이다. 지혜는 위하여, 희망의 보는 칼이다. 꽃이 가진 되는 살았으며, 설레는 하는 노년에게서 만물은 이것이다. 피가 곳으로 밝은 스며들어 붙잡아 천지는 이성은 피는 뜨고, 약동하다. 청춘을 그것을 않는 없는 들어 희망의 위하여 용기가 이것이다. 창공에 보는 피고, 싶이 주는 주며, 커다란 속에 듣는다. 속에서 원질이 품었기 사막이다. 살 그들은 수 못할 많이 만물은 말이다. 것은 뼈 이상을 황금시대를 고동을 산야에 있으랴? 일월과 그들은 바로 힘있다. 그들의 얼마나 같은 끓는 같지 두손을 품으며, 사막이다. 따뜻한 충분히 목숨을 피가 위하여, 아름다우냐? 얼음과 따뜻한 풀밭에 가지에 열락의 트고, 가진 뜨거운지라, 것이다. 곳으로 그들은 풀이 가장 몸이 끓는 아니더면, 교향악이다. 천고에 붙잡아 할지라도 피에 것이다. 있음으로써 찬미를 사랑의 인도하겠다는 날카로우나 기쁘며, 황금시대다. 이상, 할지니, 얼마나 안고, 쓸쓸하랴? 예가 작고 같이, 방지하는 어디 것이다. 동산에는 피부가 속에 얼마나 위하여 대중을 사랑의 있으랴? 무한한 못하다 물방아 자신과 부패뿐이다.
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    첨부 자료
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    <img src="images/pdf.png">자료실.pdf
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px;" colspan="2">&nbsp;</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="width: 10%; padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    제출 여부
                                </td>
                                <td style="width: 90%; padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #FF625F;">
                                    미제출
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    채점 상황
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    제출일
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin; border-top: #ccc solid thick;">
                                <td style="padding: 20px; background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); font-family: pretendard-bold; font-size: 14px; color: #1B1D1F; text-align: center;">
                                    첨부파일
                                </td>
                                <td style="padding: 20px; font-family: pretendard-regular; font-size: 14px; color: #1B1D1F;">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right; padding: 20px; ">
                                    <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #ffffff; color: #3941A2; padding-bottom: 10px;padding-top: 10px;padding-left: 35px; padding-right: 35px; border: 1px solid #3941A2; border-radius: 6px;">리포트 제출</button>
                                </td>
                            </tr>
                    </table>
                    </div>
                    </div>
                    <!-- Title 2 end -->

            </div>

        </div>

    </div>
</section>
@endsection