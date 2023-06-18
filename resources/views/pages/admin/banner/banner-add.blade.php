@extends('layouts.admin')

@section('dashboardContent')
@include('includes.messages')
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
<form action="/admin/banner/bannerRegister" method="post" enctype="multipart/form-data">
    @csrf
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">
        <table class="table align-middle table-hover">
            <tbody class="text-center">
                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">배너 노출</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="form-check height-52 item-flex-align-start">
                            <input class="form-check-input ms-1 me-2" type="radio" name="exposureStatus" value="0" id="flexRadioDefault1" onchange="exposureChange()" checked>
                            <label class="form-check-label lbl-y1" for="flexRadioDefault1">
                                노출
                            </label>
                            <input class="form-check-input ms-1 me-2" type="radio" name="exposureStatus" value="1" {{ $count>=3 ? 'checked' : '' }} id="flexRadioDefault2">
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
                            <input type="text" class="form-control" name="name" id="bannerName" placeholder="배너명을 입력하세요." aria-describedby="Banner Name Input">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">제목</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <input type="text" class="form-control" name="title" id="title" placeholder="제목을 입력하세요." aria-describedby="Title Input">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">내용</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="item-flex-start width-50 ml30 my-3">
                            <textarea class="form-control" name="contents" id="contents" placeholder="내용을 입력하세요." aria-describedby="Contents Input" rows="2"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">링크</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <input type="text" class="form-control" name="link" id="link" placeholder="링크를 입력하세요." aria-describedby="Link Input">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">순서</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <select class="form-select" name="sequence" id="sequence" aria-label="Sequence Select">
                                <option value="0" selected>순서를 선택하세요.</option>
                                <option value="1"{{ in_array(1, $existingValues) ? 'disabled' : '' }}>1</option>
                                <option value="2"{{ in_array(2, $existingValues) ? 'disabled' : '' }}>2</option>
                                <option value="3"{{ in_array(3, $existingValues) ? 'disabled' : '' }}>3</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">이미지 파일</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start ml30 my-3">
                            <label for="image" class="btn btn9">첨부파일 등록</label>
                            <input type="file" style="visibility: hidden" name="image" id="image" aria-describedby="file Input" >
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <button type="submit" class="btn btn11">
                등록 완료
            </button>
            <!-- <a href="#" class="btn btn11">
                등록 완료
            </a> -->
        </div>
    </div>

</div>
</form>
<!-- Sequence Select Impossible Alert Modal -->
<div class="modal fade" id="seqSelImpossibleModal" aria-hidden="true" aria-labelledby="seqSelImpossibleModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="seqSelImpossibleModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    배너 노출 비활성화 시<br>
                    순서 선택이 불가합니다.
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
<!-- Sequence Select Impossible Alert Modal -->
<!-- Exposure Impossible Alert Modal -->
<div class="modal"  style="display:none;" id="cardExposure" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="exposureImpossibleModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    배너는 최대 3개까지 노출 가능합니다.<br>
                    다른 배너의 상세 페이지에서 1개 이상 삭제<br>
                    또는 “비노출”로 변경해주세요.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <a href="/admin/bannerAdd" class="btn btn-alert3">
                            확인
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Exposure Impossible Alert Modal -->

<!-- Confirmation Alert Modal -->
<div class="modal fade" id="confirmationModal" aria-hidden="true" aria-labelledby="confirmationModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="confirmationModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <h5 class="alert-title text-center mt-1 mb-4">임시 계정 발송</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    선택한 회원에게 임시 계정 발송을<br>
                    진행하시겠습니까?
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                    </div>
                    <div class="mx-1">
                        <button class="btn btn-alert2" data-bs-target="#completionModal" data-bs-toggle="modal">발송</button>
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
                    임시 계정 발송을 완료하였습니다.
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
<!-- Banner Management End -->

@endsection

@section('scripts')
        <script>
            ClassicEditor
            .create( document.querySelector( '#contents' ) )
            .catch( error => {
            console.error( error );
            } );
            </script>

        <script>
            CKEDITOR.replace( 'contents', {
                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
        </script>
        <script type="text/javascript">
           function exposureChange() {
                var exposure =  {{$count}};

                if (exposure >=3) {
                    document.getElementById('cardExposure').style.display = "block";
                }
            }
        </script>
        
        
@endsection