@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
    <div class="row">

        <div class="col-lg-2">
            @include('includes.sidenav-info')
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

                    <div class="row my-3 mx-0">
                        <div class="col-lg-2 pl-0" style="padding: 20px; color: #FFFFFF;">
                            <select class="mr-sm-2 height-52 select-custom">
                                <option class="select-custom-opt" value="0" selected>2023년도 1학기</option>
                                <option class="select-custom-opt">2023년도 1학기</option>
                                <option class="select-custom-opt">2023년도 1학기</option>
                            </select>
                        </div>
                        <div class="col-lg-2 pl-0" style="padding: 20px; color: #FFFFFF;">
                            <select class="mr-sm-2 height-52 select-custom">
                                <option class="select-custom-opt" value="0" selected>당뇨 - 간호학과</option>
                                <option class="select-custom-opt">당뇨 - 간호학과</option>
                                <option class="select-custom-opt">당뇨 - 간호학과</option>
                            </select>
                        </div>
                        <div class="col-lg-8">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="font-size: 14px;">
                <div class="col-lg-12 mt-2">
                    <table style="width: 100%;">
                        <tr class="text-center" style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                            <th class="py-3" style="width: 20%;">사전 학습 평가</th>
                            <th class="py-3" style="width: 20%;">본 학습(최종) 평가</th>
                            <th class="py-3" style="width: 20%;">리포트</th>
                            <th class="py-3" style="width: 20%;">총 평가 점수</th>
                            <th class="py-3" style="width: 20%;">기능</th>
                        </tr>
                        <tr class="text-center" style="border-bottom: #ccc solid thin;">
                            <td class="py-3" style="width: 20%;">30점</td>
                            <td class="py-3" style="width: 20%;">60점</td>
                            <td class="py-3" style="width: 20%;">10점</td>
                            <td class="py-3" style="width: 20%;">100점</td>
                            <td class="py-3" style="width: 20%;">
                                <div class="item-flex-center">
                                    <a href="#" class="btn btn-2 my-2 my-sm-1 mr-2" data-bs-toggle="modal">수정</a>
                                    <!-- If Deactive -->
                                    <!-- <button class="btn btn-3 my-2 my-sm-1 mr-2" type="">수정</button> -->

                                    <a href="#confirmationModal" class="btn btn-5 my-2 my-sm-1" data-bs-toggle="modal">기본값</a>
                                </div>
                            </td>
                        </tr>

                        <!-- Display when Modify Btn Clicked -->
                        <tr class="text-center d-none" id="modifyRow" style="border-bottom: #ccc solid thin;">
                            <td class="py-3" style="width: 20%;">
                                <div class="item-flex-center">
                                    <input type="text" class="form-control val-text py-2 height-52 width-80" name="" id="" placeholder="" value="30 점" aria-describedby="">
                                </div>
                            </td>
                            <td class="py-3" style="width: 20%;">
                                <div class="item-flex-center">
                                    <input type="text" class="form-control val-text py-2 height-52 width-80" name="" id="" placeholder="" value="40 점" aria-describedby="">
                                </div>
                            </td>
                            <td class="py-3" style="width: 20%;">
                                <div class="item-flex-center">
                                    <input type="text" class="form-control val-text py-2 height-52 width-80" name="" id="" placeholder="" value="50 점" aria-describedby="">
                                </div>
                            </td>
                            <td class="py-3" style="width: 20%;">100점</td>
                            <td class="py-3" style="width: 20%;">
                                <div class="item-flex-center">
                                    <a href="#" class="btn btn-2 my-2 my-sm-1 mr-2" type="">수정</a>
                                    <!-- If Deactive -->
                                    <!-- <button class="btn btn-3 my-2 my-sm-1 mr-2" type="">수정</button> -->

                                    <a href="#confirmationModal" class="btn btn-5 my-2 my-sm-1" data-bs-toggle="modal">기본값</a>
                                </div>
                            </td>
                        </tr>
                        <!-- Display when Modify Btn Clicked -->

                    </table>
                </div>
            </div>

        </div>

        <!-- Confirmation Alert Modal -->
        <div class="modal fade" id="confirmationModal" aria-hidden="true" aria-labelledby="confirmationModalContent" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center my-3" id="confirmationModalContent"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                        <h5 class="alert-title text-center mt-1 mb-4">배점 설정 기본값</h5>
                        <p class="alert-text text-center mt-2 mb-5">
                            사전 학습 평가 30점, 본 학습(최종)평가 60점,<br>
                            리포트 10점의 기본값으로 수정하시겠습니까?
                        </p>

                        <div class="item-flex-center my-2">
                            <div class="mx-1">
                                <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                            </div>
                            <div class="mx-1">
                                <button class="btn btn-alert2" data-bs-target="#completionModal" data-bs-toggle="modal">수정</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Confirmation Alert Modal -->
        <!-- Completion Alert Modal -->
        <div class="modal fade" id="completionModal" aria-hidden="true" aria-labelledby="completionModalContent" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center my-3" id="completionModalContent"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                        <p class="alert-text2 text-center mt-2 mb-5">
                            배점 설정의 수정사항이<br>
                            성공적으로 저장되었습니다.
                        </p>

                        <div class="item-flex-center my-2">
                            <div class="mx-1">
                                <button class="btn btn-alert3" data-bs-target="#" data-bs-toggle="modal">확인</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Completion Alert Modal -->

        <!-- Save Alert Modal -->
        <div class="modal fade" id="saveModal" aria-hidden="true" aria-labelledby="saveModalContent" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center my-3" id="saveModalContent"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                        <p class="alert-text2 text-center mt-2 mb-5">
                            배점 설정의 수정사항이<br>
                            성공적으로 저장되었습니다.
                        </p>

                        <div class="item-flex-center my-2">
                            <div class="mx-1">
                                <button class="btn btn-alert3" data-bs-target="#" data-bs-toggle="modal">확인</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Completion Alert Modal -->

    </div>
</section>
<script>
    var element = document.getElementById("profile-m");
    element.classList.add("dropdown-menu-item");
</script>
@endsection