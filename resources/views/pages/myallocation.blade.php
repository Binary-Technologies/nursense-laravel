@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
        <div class="row">

            <div class="col-lg-2">
            {{-- TODO: Side navbar --}}
            </div>

            <div class="col-lg-10" style="padding: 1%; min-height: 650px;">

                <section class="img-sec-top text-center comp-height-120 py44 pl0 pr0" style="background-image: linear-gradient(to right, #212880 , #4A227B);">
                       <div class="pl30">
                        <div class="content-box">
                            <div class="title">
                                <h2 class="text-left text-white">배점 설정</h2>
                            </div>
                        </div>
                    </div>


                </section>
                <div class="row" style="font-size: 10px; text-align: center;">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-2" style="padding: 20px; color: #FFFFFF;">
                                <select class="form-control mr-sm-2 search-bar-custom">
                                    <option>2023년도 1학기</option>
                                    <option>2023년도 1학기</option>
                                    <option>2023년도 1학기</option>
                                </select>
                            </div>
                            <div class="col-lg-2" style="padding: 20px; color: #FFFFFF;">
                                <select class="form-control mr-sm-2 search-bar-custom">
                                    <option>당뇨 - 간호학과</option>
                                    <option>당뇨 - 간호학과</option>
                                    <option>당뇨 - 간호학과</option>
                                </select>
                            </div>
                            <div class="col-lg-8">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="font-size: 14px;">
                    <div class="col-lg-12 shadow border-rad-5 mt-2 px-4">
                        <table style="width: 100%;">
                            <tr style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                                <th style="width: 20%; padding: 10px;">사전 학습 평가</th>
                                <th style="width: 20%; padding: 10px;">본 학습(최종) 평가</th>
                                <th style="width: 20%; padding: 10px;">리포트</th>
                                <th style="width: 20%; padding: 10px;">총 평가 점수</th>
                                <th style="width: 20%; padding: 10px;">기능</th>
                            </tr>
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 20%; padding: 10px;">30점</td>
                                <td style="width: 20%; padding: 10px;">60점</td>
                                <td style="width: 20%; padding: 10px;">10점</td>
                                <td style="width: 20%; padding: 10px;">100점</td>
                                <td style="width: 20%; padding: 10px;">
                                    <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #3941A2;color: #ffffff;">수정</button>
                                    <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #ffffff;color: #212880;">기본값</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
</section>
@endsection