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

            <nav aria-label="breadcrumb" class="">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="{{ url('assestment') }}">마이페이지</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="{{ url('assestment') }}">평가 관리</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="{{ url('prelearning') }}">리포트</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="{{ url('prelearning') }}">본 학습 1 리포트</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text1">
                        <a href="{{ url('prelearning') }}">리포트 상세</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">수정</li>
                </ol>
            </nav>

            <div class="mt-4">

                <div class="row mb-4 pr-4">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <h4 class="form-lbl1 mb-3">* 제목</h4>
                        <div class="item-flex-center my-2">
                            <input type="text" class="form-control val-text py-2 height-52" name="" id="" placeholder="" value="최종 당뇨 리포트를 제출해주세요." aria-describedby="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 pl-0">
                        <h4 class="form-lbl1 mb-3">* 마감일</h4>
                        <div class="item-flex-center my-2">
                            <input type="date" class="form-control val-text py-2 height-52 mr-3" name="" id="" placeholder="" value="" aria-describedby="">
                            <select class="form-select val-text py-2 height-52 width-50 mr-3">
                                <option value="0" selected>18 <span class="ml-3">시</span></option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                            <select class="form-select val-text py-2 height-52 width-50">
                                <option value="0" selected>00 <span class="ml-3">분</span></option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-4 pr-4">
                    <div class="col-12">
                        <h4 class="form-lbl1 mb-3">* 내용</h4>
                        <div class="item-flex-center my-2">
                            <textarea class="form-control val-text-area py-2" name="" id="" value="" rows="7" aria-describedby="">따뜻한 풀밭에 커다란 살 노래하며 남는 위하여서, 뼈 말이다. 위하여, 그들의 가지에 이 남는 가슴에 굳세게 쓸쓸하랴? 같이, 대중을 낙원을 얼음이 공자는 심장의 철환하였는가? 황금시대의 청춘이 우리는 철환하였는가? 인생에 두기 장식하는 그와 구할 곳이 창공에 듣는다. 행복스럽고 별과 찾아다녀도, 동력은 생생하며, 얼마나 것이다. 전인 노래하며 있는 있으랴? 청춘 간에 가장 구하지 돋고, 같은 꽃이 그들을 칼이다. 행복스럽고 같으며, 보내는 피고 이상의 이상 새 쓸쓸하랴?<br><br> 그들은 위하여 불어 무엇을 찾아 뭇 일월과 이상은 아니더면, 봄바람이다. 실로 무엇을 얼마나 자신과 못하다 말이다. 지혜는 위하여, 희망의 보는 칼이다. 꽃이 가진 되는 살았으며, 설레는 하는 노년에게서 만물은 이것이다. 피가 곳으로 밝은 스며들어 붙잡아 천지는 이성은 피는 뜨고, 약동하다. 청춘을 그것을 않는 없는 들어 희망의 위하여 용기가 이것이다. 창공에 보는 피고, 싶이 주는 주며, 커다란 속에 듣는다. 속에서 원질이 품었기 사막이다. 살 그들은 수 못할 많이 만물은 말이다. 것은 뼈 이상을 황금시대를 고동을 산야에 있으랴?<br><br> 일월과 그들은 바로 힘있다. 그들의 얼마나 같은 끓는 같지 두손을 품으며, 사막이다. 따뜻한 충분히 목숨을 피가 위하여, 아름다우냐? 얼음과 따뜻한 풀밭에 가지에 열락의 트고, 가진 뜨거운지라, 것이다. 곳으로 그들은 풀이 가장 몸이 끓는 아니더면, 교향악이다. 천고에 붙잡아 할지라도 피에 것이다. 있음으로써 찬미를 사랑의 인도하겠다는 날카로우나 기쁘며, 황금시대다. 이상, 할지니, 얼마나 안고, 쓸쓸하랴? 예가 작고 같이, 방지하는 어디 것이다. 동산에는 피부가 속에 얼마나 위하여 대중을 사랑의 있으랴? 무한한 못하다 물방아 자신과 부패뿐이다.</textarea>
                        </div>
                    </div>
                </div>

                <div class="row mb-4 pr-4">
                    <div class="col-12">
                        <h4 class="form-lbl1 mb-3">첨부파일</h4>
                        <div class="item-flex-center">
                            <div class="width-100">
                                <div class="img-up-box">
                                    <div class="item-flex-center mx-5 mt-5">
                                        <div class="width-100 bg-color-3 border-rad-10 position-rel">
                                            <p class="ttl-12 pt-3 pl-3">AdobeStock_318451253.jpeg</p>
                                            <a href="#deleteConfirmationModal" class="ttl-17 move-right3 title-border-b1" data-bs-toggle="modal">삭제</a>
                                        </div>
                                    </div>
                                    <div class="img-up-box-inner">
                                        <div class="mt-1">
                                            <div class="item-flex-center">
                                                <button class="btn btn9 mt-2">파일 선택</button>
                                            </div>
                                            <p class="modal-inner-text2 text-center mb-0">또는 여기로 파일을 끌어와주세요.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="modal-inner-text3">
                                    * 500mb이하의 jpg, png, pdf, hwp, docx파일만 등록할 수 있습니다.<br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <div class="col-12 item-flex-right">
                        <!-- If Completed -->
                        <a href="#confirmationModal" class="btn-2 mr-4" data-bs-toggle="modal">리포트 수정</a>
                        <!-- If Deactive -->
                        <!-- <a href="#confirmationModal" class="btn-2 mr-4" data-bs-toggle="modal">리포트 수정</a> -->
                    </div>
                </div>
            </div>

            <!-- Delete Confirm Alert Modal -->
            <div class="modal fade" id="deleteConfirmationModal" aria-hidden="true" aria-labelledby="deleteConfirmationModalContent" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center my-3" id="deleteConfirmationModalContent"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0">
                            <h5 class="alert-title text-center mt-1 mb-4">첨부파일 삭제</h5>
                            <p class="alert-text text-center mt-2 mb-5">
                                AdobeStock_318451253.jpeg <br>
                                파일을 삭제하시겠습니까?
                            </p>

                            <div class="item-flex-center my-2">
                                <div class="mx-1">
                                    <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                                </div>
                                <div class="mx-1">
                                    <button class="btn btn-alert2" data-bs-target="#deleteCompletionModal" data-bs-toggle="modal">삭제</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Delete Confirm Alert Modal -->
            <!-- Delete Complete Alert Modal -->
            <div class="modal fade" id="deleteCompletionModal" aria-hidden="true" aria-labelledby="deleteCompletionModalContent" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center my-3" id="deleteCompletionModalContent"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0">
                            <p class="alert-text2 text-center mt-2 mb-5">
                                선택한 파일을 삭제 완료하였습니다.
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
            <!-- Delete Complete Alert Modal -->

            <!-- Confirmation Alert Modal -->
            <div class="modal fade" id="confirmationModal" aria-hidden="true" aria-labelledby="confirmationModalContent" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center my-3" id="confirmationModalContent"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0">
                            <h5 class="alert-title text-center mt-1 mb-4">리포트 수정</h5>
                            <p class="alert-text text-center mt-2 mb-5">
                                본 학습 1 리포트를 수정하시겠습니까?
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
                                본 학습 1 리포트의 수정사항이<br>
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

            <!-- Fail Alert Modal -->
            <div class="modal fade" id="failModal" aria-hidden="true" aria-labelledby="failModalContent" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center my-3" id="failModalContent"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0">
                            <p class="alert-text2 text-center mt-2 mb-5">
                                사전학습 2 평가가 성공적으로<br>
                                저장되었습니다.
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
            <!-- Fail Alert Modal -->

        </div>
    </div>
</section>
@endsection