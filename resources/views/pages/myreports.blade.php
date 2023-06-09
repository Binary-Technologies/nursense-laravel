@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row">

            <div class="col-lg-2">
                @include('includes.sidenav-info')
            </div>

            <div class="col-lg-10" style="padding: 1%;">

                <section class="img-sec-top text-center comp-height-120 py44 pl0 pr0" style="background-image: linear-gradient(to right, #212880 , #4A227B);">
                    <div class="pl30">
                        <div class="content-box">
                            <div class="title">
                                <h2 class="text-left text-white">리포트</h2>
                            </div>
                        </div>
                    </div>


                </section>

                <br>
                <div class="row">
                    <div class="col-lg-2">
                        <form class="form-inline justify-content-end mx-3 my-2 my-lg-0">
                            <select class="form-control search-bar-custom ml-2" style="width: 250px;">
                                <option>전체 학기</option>
                                <option>당뇨</option>
                                <option>당뇨당뇨</option>
                                <option>당뇨당뇨당뇨</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-2">
                        <form class="form-inline justify-content-end mx-3 my-2 my-lg-0">
                            <select class="form-control search-bar-custom ml-2" style="width: 250px;">
                                <option>전체 학습 과정</option>
                                <option>당뇨</option>
                                <option>당뇨당뇨</option>
                                <option>당뇨당뇨당뇨</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-8" style="text-align: right;">
                        <input type="checkbox" style="width: 18px; height: 18px;"> 진행 중인 리포트만 보기
                    </div>
                </div>
                <!-- card -->
                <div class="row">
                    <div class="col-lg-12 shadow border-rad-5 mb-3 px-4 py-4">
                        <div class="row pb-4">
                            <div class="col-md-8 position-rel">
                                <span class="ttl-1 pr-4">사전 학습 1</span>
                                <br>
                                <span class="ttl-3" style="color: #9495A1; font-size: 11px;">제목 |</span>
                                <span class="ttl-3" style="color: #090909;">사전 학습 1 리포트</span>

                                <br />
                                <span class="ttl-3" style="color: #9495A1;">종료일 |</span>
                                <span class="ttl-3" style="color: #FF625F;">2023.01.11</span>
                                <br />
                                <div class="curr-brd-r pl20 mt-3 border-rad-5" style="background-color: #F5F7FE; width: 300px;">
                                    2023년도 1학기 . 당뇨 - 간호학과
                                </div>
                            </div>
                            <div class="col-md-4" style="text-align: center;">

                                <span class="ttl-3" style="color: #3941A2; font-size: 11px;">등록완료</span>
                                <br />
                                <span class="ttl-3" style="color: #7479BD; font-size: 11px;">(2022.12.14)</span>

                                <br />
                                <br />
                                <span class="curr-brd">
                                    수정하기
                                </span>
                                <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">미리보기</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- card -->
                <div class="row my-5">

                    <div class="col-md-8">
                        Total : 70
                    </div>
                    <div class="col-md-2" style="color: #FFFFFF;">
                        <select class="form-control mr-sm-2 search-bar-custom">
                            <option>전체</option>
                            <option>전체</option>
                            <option>전체</option>
                        </select>
                    </div>
                    <div class="col-md-2" style="padding-left: 10px; color: #FFFFFF;">
                        <select class="form-control mr-sm-2 search-bar-custom">
                            <option>전체</option>
                            <option>전체</option>
                            <option>전체</option>
                        </select>
                    </div>

                </div>

                <div class="row" style="font-size: 10px;">
                    <div class="col-lg-12 shadow border-rad-5 px-1">
                        <table style="width: 100%;">
                            <tr style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                                <th style="width: 5%; padding: 10px;"><input type="checkbox"></th>
                                <th style="width: 8%; padding: 10px;">번호</th>
                                <th style="width: 8%; padding: 10px;">이름</th>
                                <th style="width: 14%; padding: 10px;">학년/학번</th>
                                <th style="width: 9%; padding: 10px;">제출 여부</th>
                                <th style="width: 12%">제출 일시</th>
                                <th style="width: 30%">제출 파일</th>
                                <th style="width: 14%">PASS / FAIL</th>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                                <td style="width: 8%; padding: 10px;">70</td>
                                <td style="width: 8%; padding: 10px;">오하윤</td>
                                <td style="width: 14%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 9%; padding: 10px;">제출</td>
                                <td style="width: 12%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 30%; padding: 10px;color: #3941A2;"><u>오하윤_당뇨 최종리포트_2019123456</u></td>
                                <td style="width: 14%; padding: 10px;">
                                    <input type="radio" style="color: #1B1D1F;">PASS
                                    <input type="radio" style="color: #1B1D1F;">FAIL
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                                <td style="width: 8%; padding: 10px;">69</td>
                                <td style="width: 8%; padding: 10px;">오하윤</td>
                                <td style="width: 14%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 9%; padding: 10px; color: #FF625F;">미제출</td>
                                <td style="width: 12%; padding: 10px;">-</td>
                                <td style="width: 30%; padding: 10px;">-</td>
                                <td style="width: 14%; padding: 10px;">
                                    <input type="radio" style="color: #D2D3DA;">PASS
                                    <input type="radio" style="color: #D2D3DA;">FAIL
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                                <td style="width: 8%; padding: 10px;">68</td>
                                <td style="width: 8%; padding: 10px;">오하윤</td>
                                <td style="width: 14%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 9%; padding: 10px;">제출</td>
                                <td style="width: 12%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 30%; padding: 10px;color: #3941A2;"><u>오하윤_당뇨 최종리포트_2019123456</u></td>
                                <td style="width: 14%; padding: 10px;">
                                    <input type="radio" style="color: #1B1D1F;">PASS
                                    <input type="radio" style="color: #1B1D1F;">FAIL
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                                <td style="width: 8%; padding: 10px;">67</td>
                                <td style="width: 8%; padding: 10px;">오하윤</td>
                                <td style="width: 14%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 9%; padding: 10px;">제출</td>
                                <td style="width: 12%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 30%; padding: 10px;color: #3941A2;"><u>오하윤_당뇨 최종리포트_2019123456</u></td>
                                <td style="width: 14%; padding: 10px;">
                                    <input type="radio" style="color: #1B1D1F;">PASS
                                    <input type="radio" style="color: #1B1D1F;">FAIL
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                                <td style="width: 8%; padding: 10px;">66</td>
                                <td style="width: 8%; padding: 10px;">오하윤</td>
                                <td style="width: 14%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 9%; padding: 10px;">제출</td>
                                <td style="width: 12%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 30%; padding: 10px;color: #3941A2;"><u>오하윤_당뇨 최종리포트_2019123456</u></td>
                                <td style="width: 14%; padding: 10px;">
                                    <input type="radio" style="color: #1B1D1F;">PASS
                                    <input type="radio" style="color: #1B1D1F;">FAIL
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                                <td style="width: 8%; padding: 10px;">65</td>
                                <td style="width: 8%; padding: 10px;">오하윤</td>
                                <td style="width: 14%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 9%; padding: 10px;">제출</td>
                                <td style="width: 12%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 30%; padding: 10px;color: #3941A2;"><u>오하윤_당뇨 최종리포트_2019123456</u></td>
                                <td style="width: 14%; padding: 10px;">
                                    <input type="radio" style="color: #1B1D1F;">PASS
                                    <input type="radio" style="color: #1B1D1F;">FAIL
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                                <td style="width: 8%; padding: 10px;">64</td>
                                <td style="width: 8%; padding: 10px;">오하윤</td>
                                <td style="width: 14%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 9%; padding: 10px;">제출</td>
                                <td style="width: 12%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 30%; padding: 10px;color: #3941A2;"><u>오하윤_당뇨 최종리포트_2019123456</u></td>
                                <td style="width: 14%; padding: 10px;">
                                    <input type="radio" style="color: #1B1D1F;">PASS
                                    <input type="radio" style="color: #1B1D1F;">FAIL
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                                <td style="width: 8%; padding: 10px;">63</td>
                                <td style="width: 8%; padding: 10px;">오하윤</td>
                                <td style="width: 14%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 9%; padding: 10px;">제출</td>
                                <td style="width: 12%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 30%; padding: 10px;color: #3941A2;"><u>오하윤_당뇨 최종리포트_2019123456</u></td>
                                <td style="width: 14%; padding: 10px;">
                                    <input type="radio" style="color: #1B1D1F;">PASS
                                    <input type="radio" style="color: #1B1D1F;">FAIL
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                                <td style="width: 8%; padding: 10px;">62</td>
                                <td style="width: 8%; padding: 10px;">오하윤</td>
                                <td style="width: 14%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 9%; padding: 10px;">제출</td>
                                <td style="width: 12%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 30%; padding: 10px;color: #3941A2;"><u>오하윤_당뇨 최종리포트_2019123456</u></td>
                                <td style="width: 14%; padding: 10px;">
                                    <input type="radio" style="color: #1B1D1F;">PASS
                                    <input type="radio" style="color: #1B1D1F;">FAIL
                                </td>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox"></td>
                                <td style="width: 8%; padding: 10px;">61</td>
                                <td style="width: 8%; padding: 10px;">오하윤</td>
                                <td style="width: 14%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 9%; padding: 10px;">제출</td>
                                <td style="width: 12%; padding: 10px;">2023.01.23 17:23</td>
                                <td style="width: 30%; padding: 10px;color: #3941A2;"><u>오하윤_당뇨 최종리포트_2019123456</u></td>
                                <td style="width: 14%; padding: 10px;">
                                    <input type="radio" style="color: #1B1D1F;">PASS
                                    <input type="radio" style="color: #1B1D1F;">FAIL
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" style="padding: 20px;">
                                    <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #F3F4F8;color: #9495A1;">메일 발송</button>
                                </td>
                                <td colspan="4" style="padding: 20px; text-align: right">
                                    <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #3941A2;color: #ffffff;">SMS 발송</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8" style="background-color: #D7D9EC;color: #3941A2;padding: 20px; text-align: center;">제출 현황 닫기</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection