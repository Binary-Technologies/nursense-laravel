@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">배너 추가</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/bannerDash') }}">배너 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">배너 추가</li>
        </ol>
    </nav>
</div>

<!-- Banner Management Start -->
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">
        <table class="table align-middle table-hover">
            <tbody class="text-center">
                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">배너 노출</td>
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
                    <td scope="row" class="table-td-text1 bg-td height-52">배너명</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <input type="text" class="form-control val-text" name="banner-name" id="bannerName" placeholder="배너명을 입력하세요." value="배너명" aria-describedby="Banner Name Input">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">제목</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <input type="text" class="form-control val-text" name="title" id="title" placeholder="제목을 입력하세요." value="책방 그루잠 소록소록 예그리나 예그리나예" aria-describedby="Title Input">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">내용</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="item-flex-start width-50 ml30 my-3">
                            <textarea class="form-control val-text" name="contents" id="contents" placeholder="책방 그루잠 소록소록 예그리나 다솜 책방 그루잠 소록소록 예그리나 다솜 책방 그루잠 소록소록 예그리나 다솜 책방 책방 그루잠 소록소록 책방 그루잠 소록소록 예그리나 다솜 책방 그루잠 소록소록 예그리나" aria-describedby="Contents Input" rows="2"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">링크</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <input type="text" class="form-control val-text" name="link" id="link" placeholder="링크를 입력하세요." value="http://wmscompany.co.kr/" aria-describedby="Link Input">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">순서</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <select class="form-select val-text" name="sequence" id="sequence" aria-label="Sequence Select">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">이미지 파일</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start ml30 my-3">
                            <div class="height-52">
                                <span class="position-rel"><i class='fas fa-file-alt view-file-i'></i></span>
                                <input type="text" class="form-control val-text file-up-bar-custom" name="file1" id="file1" placeholder="" value="자료.pdf" aria-describedby="File Up">
                            </div>
                            <a href="#deleteConfirmationModal" class="btn btn12 ms-4" data-bs-toggle="modal">파일 삭제</a>
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
                <h5 class="alert-title text-center mt-1 mb-4">이미지 파일 삭제</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    AdobeStock_318451253.jpeg<br>
                    이미지를 삭제하시겠습니까?
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
                    기존 이미지 파일을 삭제 완료하였습니다.
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
                    배너 추가가 완료되었습니다.
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
<!-- Registration Complete Alert Modal -->

<!-- Banner Add Exit Alert Modal -->
<div class="modal fade" id="bannerAddExitModal" aria-hidden="true" aria-labelledby="bannerAddExitModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="bannerAddExitModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <h5 class="alert-title text-center mt-1 mb-4">배너 추가 나가기</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    추가 중 페이지를 벗어나면 저장되지 않습니다.
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
<!-- Banner Add Exit Alert Modal -->

</div>
<!-- Banner Management End -->

@endsection