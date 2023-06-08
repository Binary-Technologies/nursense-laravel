@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">자료실 등록</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/resourceDash') }}">컨텐츠 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/resourceDash') }}">자료실 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">자료실 등록</li>
        </ol>
    </nav>
</div>

<!-- Resource Management Start -->
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">
        <table class="table align-middle table-hover">
            <tbody class="text-center">
                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">카드 노출</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="form-check height-52 item-flex-align-start">
                            <input class="form-check-input ms-1 me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label lbl-y1" for="flexRadioDefault1">
                                노출
                            </label>
                            <input class="form-check-input ms-1 me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label lbl-y1" for="flexRadioDefault2">
                                미노출
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">* 제목</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <input type="text" class="form-control val-text" name="resource-title" id="resourceName" placeholder="가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다." value="" aria-describedby="Resource Title Input">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">* 첨부파일</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start ml30 my-3">
                            <div class="height-52">
                                <span class="position-rel"><i class='far fa-file-alt view-file-i'></i></span>
                                <input type="text" class="form-control val-text file-up-bar-custom" name="file1" id="file1" placeholder="" value="자료.pdf" aria-describedby="File Up">
                            </div>
                            <a href="#deleteConfirmationModal" class="btn btn12 ms-4" data-bs-toggle="modal">파일 삭제</a>
                        </div>
                        <div class="height-52 item-flex-start ml30 my-3">
                            <div class="height-52">
                                <span class="position-rel"><i class='far fa-file-alt view-file-i'></i></span>
                                <input type="text" class="form-control val-text file-up-bar-custom" name="file1" id="file1" placeholder="" value="자료123.pdf" aria-describedby="File Up">
                            </div>
                            <a href="#deleteConfirmationModal" class="btn btn12 ms-4" data-bs-toggle="modal">파일 삭제</a>
                        </div>
                        <div class="height-52 item-flex-start ml30 my-3">
                            <div class="height-52">
                                <span class="position-rel"><i class='far fa-file-alt view-file-i'></i></span>
                                <input type="text" class="form-control val-text file-up-bar-custom" name="file1" id="file1" placeholder="" value="자료123456.pdf" aria-describedby="File Up">
                            </div>
                            <a href="#deleteConfirmationModal" class="btn btn12 ms-4" data-bs-toggle="modal">파일 삭제</a>
                        </div>
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <a href="#" class="btn btn9">
                                첨부파일 등록
                            </a>
                        </div>
                    </td>
                </tr>

                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">* 내용</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="item-flex-start width-50 ml30 my-3">
                            <textarea class="form-control val-text" name="contents" id="contents" placeholder="TEXT EDITOR AREA ======= 별과 그들에게 대한 그들의 투명하되 사막이다. 물방아 하여도 심장의 것이다. 들어 무한한 가장 날카로우나 미묘한 가지에 무엇을 구하기 것이다. 가슴에 피가 아니더면, 그들은 끓는 사막이다. 가지에 실로 고행을 소리다.이것은 우리의 전인 것이다. ======= TEXT EDITOR AREA" aria-describedby="Contents Input" rows="2"></textarea>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <a href="#regCompletionModal" class="btn btn9" data-bs-toggle="modal">
                등록 완료
            </a>
        </div>
    </div>

</div>


<!-- Delete Confirmation Alert Modal -->
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
                    선택하신 첨부파일을 삭제 하시겠습니까?
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
<!-- Delete Confirmation Alert Modal -->
<!-- Delete Completion Alert Modal -->
<div class="modal fade" id="deleteCompletionModal" aria-hidden="true" aria-labelledby="deleteCompletionModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="deleteCompletionModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    첨부파일 삭제를 완료하였습니다.
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
<!-- Delete Completion Alert Modal -->

<!-- Card Exposure Impossible Alert Modal -->
<div class="modal fade" id="" aria-hidden="true" aria-labelledby="" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id=""></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    카드 노출은 최대 3개까지 가능합니다.<br>
                    다른 자료실의 상세 페이지에서 1개 이상<br>
                    삭제 또는 미노출로 변경해주세요.
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
<!-- Card Exposure Impossible Alert Modal -->

<!-- Registration Complete Alert Modal -->
<div class="modal fade" id="regCompletionModal" aria-hidden="true" aria-labelledby="regCompletionModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="regCompletionModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    자료실 등록을 완료하였습니다.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert3" data-bs-target="#resourceAddExitModal" data-bs-toggle="modal">확인</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Registration Complete Alert Modal -->

<!-- Resource Add Exit Alert Modal -->
<div class="modal fade" id="resourceAddExitModal" aria-hidden="true" aria-labelledby="resourceAddExitModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="resourceAddExitModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <h5 class="alert-title text-center mt-1 mb-4">자료실 등록 나가기</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    등록 중 페이지를 벗어나면 저장되지 않습니다.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                    </div>
                    <div class="mx-1">
                        <button class="btn btn-alert2" data-bs-target="#deleteCompletionModal" data-bs-toggle="modal">나가기</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Resource Add Exit Alert Modal -->

</div>
<!-- Resource Management End -->

@endsection