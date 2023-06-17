@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">갤러리 등록</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/galleryDash') }}">갤러리 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">갤러리 등록</li>
        </ol>
    </nav>
</div>

<!-- Gallery Management Start -->
<form action="/admin/gallery/galleryRegister" method="POST" enctype="multipart/form-data">
    @csrf
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">
        <table class="table align-middle table-hover">
            <tbody class="text-center">
                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">* 제목</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-start width-50 ml30 my-3">
                            <input type="text" class="form-control val-text" name="title" id="resourceName" placeholder="제목을 입력하세요." value="" aria-describedby="Resource Title Input">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">* 썸네일 이미지</td>
                    <td colspan="8" class="table-td-text2">
                       
                            <div class="item-flex-center width-10 ml30 mb-4">
                                <img id="imagePreview" src="#" class="width-100 " style="display: none;" >
                            </div>
                            <input type="button"  class="btn btn12 btn12-1" data-bs-toggle="modal"  id="removeButton" value="이미지 삭제" style="display: none;" onclick="removeImage()">
                            <input type="file" name="image" id="image" accept="image/*" onchange="previewImage(event)">
                            <!-- <a href="{{ route('galleryRegComplete') }}" class="btn btn9">
                                이미지 등록
                            </a> -->
                    </td>
                </tr>

                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">* 내용</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="item-flex-start width-50 ml30 my-3">
                            <textarea class="form-control val-text" name="contents" id="contents" placeholder="TEXT EDITOR AREA =======  ======= TEXT EDITOR AREA" aria-describedby="Contents Input" rows="2"></textarea>
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
            <!-- <a href="#regExitModal" class="btn btn11" data-bs-toggle="modal">
                등록 완료
            </a> -->
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
                <h5 class="alert-title text-center mt-1 mb-4">학과 삭제</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    해당 학과를 삭제 하시겠습니까?
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
                    이미 등록된 학교입니다.
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

<!-- Registration Complete/Exit Alert Modal -->
<div class="modal fade" id="regExitModal" aria-hidden="true" aria-labelledby="regExitModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="regExitModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <h5 class="alert-title text-center mt-1 mb-4">갤러리 등록 나가기</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    등록 중 페이지를 벗어나면 저장되지 않습니다.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                    </div>
                    <div class="mx-1">
                        <button class="btn btn-alert2" data-bs-target="#" data-bs-toggle="modal">나가기</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Registration Complete/Exit Alert Modal -->

</div>
<!-- Gallery Management End -->

@endsection

@section('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#contents'))
        .catch(error => {
            console.error(error);
        });
</script>

<script>
   function previewImage(event) {
    var input = event.target;
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        var imagePreview = document.getElementById('imagePreview');
        imagePreview.src = e.target.result;
        imagePreview.style.display = 'block';

        var imageInput = document.getElementById('image');
        var removeButton = document.getElementById('removeButton');

        imageInput.style.display = 'none';
        removeButton.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function removeImage() {
  var imageInput = document.getElementById('image');
  var removeButton = document.getElementById('removeButton');
  var imagePreview = document.getElementById('imagePreview');

  imageInput.value = ''; // Reset the input value
  imageInput.style.display = 'block';
  removeButton.style.display = 'none';
  imagePreview.style.display = 'none';
}
</script>
@endsection