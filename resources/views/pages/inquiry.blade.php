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
                                <h2 class="text-left text-white" style="font-family: pretendard-bold; font-size: 24px; color: #3941A2;">1:1 문의</h2>
                                <h5 class="text-left text-white" style="font-family: pretendard-regular; font-size: 14px; color: #3941A2;">문의를 남겨주시면 신속히 답변해 드리겠습니다.</h5>
                            </div>
                        </div>
                    </div>

                </section>
                <div class="row" style="font-size: 10px; text-align: center;">
                    <div class="col-lg-12">
                        
                        <style>.tab_hover{height: 44px; background-color: #F3F4F8; color: #616474;font-family: pretendard-medium; font-size: 16px;}.tab_hover:hover{background-color: #212880; color: #FFFFFF;}</style>
                        
                        <div class="row">
                            <div class="col-lg-4 mt-5 tab_hover" style="padding: 5px; background-color: #212880; color: #FFFFFF;">
                                <p style="margin-top: 8px;">전체</p>
                            </div>
                            <div class="col-lg-4 mt-5 tab_hover" style="padding: 5px;">
                                <p style="margin-top: 8px;">답변 대기</p>
                            </div>
                            <div class="col-lg-4 mt-5 tab_hover" style="padding: 5px;">
                                <p style="margin-top: 8px;">답변 완료</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row my-5" style="margin-left: 0px;">

                    <div class="col-md-8">
                        Total : 28
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
                               <th style="width: 5%; padding: 10px;"><input type="checkbox" style="width: 24px; height: 24px;"/></th>
                                <th style="width: 5%; padding: 20px;">번호</th>
                                <th style="width: 65%">제목</th>
                                <th style="width: 10%">등록 일</th>
                                <th style="width: 15%">답변 상태</th>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox" style="width: 24px; height: 24px;"/></td>
                                <td style="width: 5%; padding: 20px;">10</td>
                                <td style="width: 65%; text-align: left;">
                                    <a href="inquiry_await.php">
                                    가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                                    </a>
                                </td>
                                <td style="width: 10%">2023.02.11</td>
                                <td style="width: 15%">답변 대기</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox" style="width: 24px; height: 24px;"/></td>
                                <td style="width: 5%; padding: 20px;">9</td>
                                <td style="width: 65%; text-align: left;">
                                    <a href="inquiry_await.php">
                                    가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                                    </a>
                                </td>
                                <td style="width: 10%">2023.02.11</td>
                                <td style="width: 15%">답변 대기</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox" style="width: 24px; height: 24px;"/></td>
                                <td style="width: 5%; padding: 20px;">8</td>
                                <td style="width: 65%; text-align: left;">
                                    <a href="inquiry_await.php">
                                    가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                                    </a>
                                </td>
                                <td style="width: 10%">2023.02.11</td>
                                <td style="width: 15%">답변 대기</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox" style="width: 24px; height: 24px;"/></td>
                                <td style="width: 5%; padding: 20px;">7</td>
                                <td style="width: 65%; text-align: left;">
                                    <a href="inquiry_await.php">
                                    가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                                    </a>
                                </td>
                                <td style="width: 10%">2023.02.11</td>
                                <td style="width: 15%">답변 대기</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox" style="width: 24px; height: 24px;"/></td>
                                <td style="width: 5%; padding: 20px;">6</td>
                                <td style="width: 65%; text-align: left;">
                                    <a href="inquiry_await.php">
                                    가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                                    </a>
                                </td>
                                <td style="width: 10%">2023.02.11</td>
                                <td style="width: 15%">답변 대기</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox" style="width: 24px; height: 24px;"/></td>
                                <td style="width: 5%; padding: 20px;">5</td>
                                <td style="width: 65%; text-align: left;">
                                    <a href="inquiry_await.php">
                                    가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                                    </a>
                                </td>
                                <td style="width: 10%">2023.02.11</td>
                                <td style="width: 15%">답변 대기</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox" style="width: 24px; height: 24px;"/></td>
                                <td style="width: 5%; padding: 20px;">4</td>
                                <td style="width: 65%; text-align: left;">
                                    <a href="inquiry_await.php">
                                    가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                                    </a>
                                </td>
                                <td style="width: 10%">2023.02.11</td>
                                <td style="width: 15%">답변 대기</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox" style="width: 24px; height: 24px;"/></td>
                                <td style="width: 5%; padding: 20px;">3</td>
                                <td style="width: 65%; text-align: left;">
                                    <a href="inquiry_await.php">
                                    가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                                    </a>
                                </td>
                                <td style="width: 10%">2023.02.11</td>
                                <td style="width: 15%">답변 대기</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox" style="width: 24px; height: 24px;"/></td>
                                <td style="width: 5%; padding: 20px;">2</td>
                                <td style="width: 65%; text-align: left;">
                                    <a href="inquiry_await.php">
                                    가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                                    </a>
                                </td>
                                <td style="width: 10%">2023.02.11</td>
                                <td style="width: 15%">답변 대기</td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox" style="width: 24px; height: 24px;"/></td>
                                <td style="width: 5%; padding: 20px;">1</td>
                                <td style="width: 65%; text-align: left;">
                                    <a href="inquiry_await.php">
                                    가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                                    </a>
                                </td>
                                <td style="width: 10%">2023.02.11</td>
                                <td style="width: 15%">답변 대기</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div style="margin-top: 10px; float: left; margin-left: 20px;">
    <a href="inquiry_activated.php">
        <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #212880;color: #FFFFFF; width: 118px; height: 40px; margin-right: 10px; border-radius: 8px;">문의 등록</button>
    </a>
    <a href="inquiry_activated.php">
        <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #F3F4F8;color: #9495A1; width: 118px; height: 40px; border: none; border-radius: 8px;">삭제</button>
    </a>
                </div>
                
<nav aria-label="Page navigation muve gallery" style="margin-left: 70%;">
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
    </div>
</section>
@endsection