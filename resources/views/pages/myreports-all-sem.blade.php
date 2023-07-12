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
                    <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">리포트 상세</li>
                </ol>
            </nav>

            <div class="mt-4">

                <div class="table-responsive pt-4 mb-3">
                    <table class="table align-middle table-hover">
                        <tbody class="text-center">

                            <tr class="table-head-2">
                                <td scope="row" class="table-td-text1 bg-td height-52">제목</td>
                                <td colspan="8" class="table-td-text2">
                                    <div class="height-52 item-flex-left pl-4 pr-5">
                                        <label class="lbl-y2 py-0 my-0 pr-5">
                                            가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="table-td-text1 bg-td height-52">등록일</td>
                                <td colspan="8" class="table-td-text2">
                                    <div class="height-52 item-flex-left pl-4 pr-5">
                                        <label class="lbl-y2 py-0 my-0 pr-5">
                                            2023.02.11 오후 6:00
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="table-td-text1 bg-td height-52">마감일</td>
                                <td colspan="8" class="table-td-text2">
                                    <div class="height-52 item-flex-left pl-4 pr-5">
                                        <label class="lbl-y2 py-0 my-0 pr-5">
                                            2023.03.26 오후 6:00
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="table-td-text1 bg-td height-52">내용</td>
                                <td colspan="8" class="table-td-text2">
                                    <div class="pl-4 pr-5">
                                        <label class="lbl-y2 py-0 my-0 mr-0">
                                            따뜻한 풀밭에 커다란 살 노래하며 남는 위하여서, 뼈 말이다. 위하여, 그들의 가지에 이 남는 가슴에 굳세게 쓸쓸하랴? 같이, 대중을 낙원을 얼음이 공자는 심장의 철환하였는가? 황금시대의 청춘이 우리는 철환하였는가? 인생에 두기 장식하는 그와 구할 곳이 창공에 듣는다. 행복스럽고 별과 찾아다녀도, 동력은 생생하며, 얼마나 것이다. 전인 노래하며 있는 있으랴? 청춘 간에 가장 구하지 돋고, 같은 꽃이 그들을 칼이다. 행복스럽고 같으며, 보내는 피고 이상의 이상 새 쓸쓸하랴?<br><br>
                                            그들은 위하여 불어 무엇을 찾아 뭇 일월과 이상은 아니더면, 봄바람이다. 실로 무엇을 얼마나 자신과 못하다 말이다. 지혜는 위하여, 희망의 보는 칼이다. 꽃이 가진 되는 살았으며, 설레는 하는 노년에게서 만물은 이것이다. 피가 곳으로 밝은 스며들어 붙잡아 천지는 이성은 피는 뜨고, 약동하다. 청춘을 그것을 않는 없는 들어 희망의 위하여 용기가 이것이다. 창공에 보는 피고, 싶이 주는 주며, 커다란 속에 듣는다. 속에서 원질이 품었기 사막이다. 살 그들은 수 못할 많이 만물은 말이다. 것은 뼈 이상을 황금시대를 고동을 산야에 있으랴?<br><br>
                                            일월과 그들은 바로 힘있다. 그들의 얼마나 같은 끓는 같지 두손을 품으며, 사막이다. 따뜻한 충분히 목숨을 피가 위하여, 아름다우냐? 얼음과 따뜻한 풀밭에 가지에 열락의 트고, 가진 뜨거운지라, 것이다. 곳으로 그들은 풀이 가장 몸이 끓는 아니더면, 교향악이다. 천고에 붙잡아 할지라도 피에 것이다. 있음으로써 찬미를 사랑의 인도하겠다는 날카로우나 기쁘며, 황금시대다. 이상, 할지니, 얼마나 안고, 쓸쓸하랴? 예가 작고 같이, 방지하는 어디 것이다. 동산에는 피부가 속에 얼마나 위하여 대중을 사랑의 있으랴? 무한한 못하다 물방아 자신과 부패뿐이다.
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-head-3">
                                <td scope="row" class="table-td-text1 bg-td height-52">첨부 자료</td>
                                <td colspan="8" class="table-td-text2">
                                    <div class="pl-4 pr-5">
                                        <div class="height-52 item-flex-left">
                                            <span class="i-color-1"><i class='far fa-file-alt'></i></span>
                                            <span class="ml-2">자료실.pdf</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="row my-5">
                    <div class="col-12 item-flex-right">
                        <!-- Delete -->
                        <a href="#deleteConfirmationModal" class="btn-4 mr-4" data-bs-toggle="modal">삭제</a>
                        <!-- Modify -->
                        <a href="{{route('reportsModify')}}" class="btn-2 mr-4">수정</a>
                        <!-- List -->
                        <a href="#" class="btn-5 mr-4">목록</a>
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
                            <h5 class="alert-title text-center mt-1 mb-4">리포트 삭제</h5>
                            <p class="alert-text text-center mt-2 mb-5">
                                본 학습 1 리포트를 삭제하시겠습니까?
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
                                본 학습 1 리포트가 삭제되었습니다.
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
                                본학습 1 리포트 등록을 완료하였습니다.
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
<script>
    var element = document.getElementById("profile-m");
    element.classList.add("dropdown-menu-item");
</script>
@endsection