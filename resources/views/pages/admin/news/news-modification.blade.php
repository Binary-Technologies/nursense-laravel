@extends('layouts.admin')

@section('dashboardContent')

@include('includes.messages')

<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">소식 수정</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/newsDash') }}">컨텐츠 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/newsDash') }}">소식 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/newsDetails', ['notice' => $news->id]) }}">소식 상세</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">소식 수정</li>
        </ol>
    </nav>
</div>

<!-- News Management Start -->
<form action="/admin/news/newsUpdate/{{$news->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">
        <table class="table align-middle table-hover">
            <tbody class="text-center">
                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">메인 페이지 노출</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="form-check height-52 item-flex-align-start">
                            <input class="form-check-input ms-1 me-2" type="radio" name="flexRadioDefault" value="0" {{ old('flexRadioDefault', $news->main_exposure) == 0 ? 'checked' : '' }} onchange="mainExposureChange()"  id="flexRadioDefault1" >
                            <label class="form-check-label lbl-y1" for="flexRadioDefault1">
                                노출
                            </label>
                            <input class="form-check-input ms-1 me-2" type="radio" name="flexRadioDefault" value="1" {{ old('flexRadioDefault', $news->main_exposure) == 1 ? 'checked' : '' }} id="flexRadioDefault2">
                            <label class="form-check-label lbl-y1" for="flexRadioDefault2">
                                미노출
                            </label>
                        </div>
                    </td>
                </tr>
                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">카드 노출</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="form-check height-52 item-flex-align-start">
                            <input class="form-check-input ms-1 me-2" type="radio" name="flexRadioDefault2" value="0" {{ old('flexRadioDefault2', $news->exposure) == 0 ? 'checked' : '' }} onchange="exposureChange()" id="flexRadioDefault3" >
                            <label class="form-check-label lbl-y1" for="flexRadioDefault3">
                                노출
                            </label>
                            <input class="form-check-input ms-1 me-2" type="radio" name="flexRadioDefault2"value="1" {{ old('flexRadioDefault2', $news->exposure) == 1 ? 'checked' : '' }} id="flexRadioDefault4">
                            <label class="form-check-label lbl-y1" for="flexRadioDefault4">
                                미노출
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">* 제목</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <input type="text" class="form-control val-text" name="title" id="newsName"  value="{{ old('title', $news->title) }}"  aria-describedby="News Title Input">
                        </div>
                    </td>
                </tr>

                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">* 제목</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="item-flex-start width-50 ml30 my-3">
                            <textarea class="form-control val-text" name="contents" id="contents" aria-describedby="Contents Input" rows="2">{{ old('contents', $news->content) }}</textarea>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            
            <a href="#confirmationModal" class="btn btn9" data-bs-toggle="modal">
                수정 완료
            </a> 
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
                <h5 class="alert-title text-center mt-1 mb-4">공지사항 수정</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    수정 사항을 저장하시겠습니까?
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">
                            취소
                        </button>
                    </div>
                    <div class="mx-1">
                        <button type="submit" class="btn btn-alert2">수정</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Confirmation Alert Modal -->


</div>
</form>
<!-- News Management End -->
<!-- Main Page Exposure Impossible Alert Modal -->
<div class="modal" style="display:none;" id="MainExposure" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id=""></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    메인 페이지 노출은 최대 3개까지 가능합니다.<br>
                    다른 공지사항의 상세 페이지에서 1개 이상<br>
                    삭제 또는 미노출로 변경해주세요.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <a href="/admin/newsUpdate/{{$news->id}}" class="btn btn-alert3">
                            확인
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Page Exposure Impossible Alert Modal -->

<!-- Card Exposure Impossible Alert Modal -->
<div class="modal" style="display:none;" id="cardExposure" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id=""></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    카드 노출은 최대 3개까지 가능합니다.<br>
                    다른 공지사항의 상세 페이지에서 1개 이상<br>
                    삭제 또는 미노출로 변경해주세요.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <a href="/admin/newsUpdate/{{$news->id}}" class="btn btn-alert3">
                            확인
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Card Exposure Impossible Alert Modal -->


@endsection


@section('scripts')
        <script>
            ClassicEditor
            .create( document.querySelector( '#contents' ) )
            .catch( error => {
            console.error( error );
            } );
            </script>

        <script type="text/javascript">
            
            function exposureChange() {
                var exposure =  {{$count}};

                if (exposure >=3) {
                    document.getElementById('cardExposure').style.display = "block";
                }
            }
              
            function mainExposureChange() {
                var main_exposure = {{in_array(0, $main_exposure)}}
                if(main_exposure == true){
                    document.getElementById('MainExposure').style.display = "block";
            }
            }
        </script>
        
        
@endsection