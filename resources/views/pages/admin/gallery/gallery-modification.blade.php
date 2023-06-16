@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">갤러리 수정</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/galleryDash') }}">갤러리 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/galleryDetails') }}">갤러리 상세</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">갤러리 수정</li>
        </ol>
    </nav>
</div>

<!-- Gallery Management Start -->
<form action="/admin/gallery/galleryUpdate/{{$gallery->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">
        <table class="table align-middle table-hover">
            <tbody class="text-center">

                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">제목</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4 pe-5">
                            <input type="text" class="form-control val-text" name="title" id="title" value="{{ old('title', $gallery->title) }}" aria-describedby="Title Input">
                            
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">썸네일 이미지</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="item-flex-center width-15 ml30">
                            @if ($gallery->path)
                                    <img src="{{ Storage::url($gallery->path) }}" alt="Avatar" width="100">
                            @endif
                            </div>
                            <div class="item-flex-center width-10 ml30 mb-4">
                                <img id="imagePreview" src="#" class="width-100 " style="display: none;" >
                            </div>
                            <input type="button"  class="btn btn12 btn12-1" data-bs-toggle="modal"  id="removeButton" value="이미지 삭제" style="display: none;" onclick="removeImage()">
                            <input type="file" name="image" id="image" accept="image/*" onchange="previewImage(event)">
                        
                    </td>
                </tr>
                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">내용</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="ps-4 pe-5">
                            <textarea class="form-control val-text" name="contents" id="contents" value="" aria-describedby="Contents Input" rows="2">{{ old('contents', $gallery->details) }}</textarea>
                            
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
                <h5 class="alert-title text-center mt-1 mb-4">갤러리 수정</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    수정 사항을 저장하시겠습니까?
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                    </div>
                    <div class="mx-1">
                        <button type="submit" class="btn btn-alert2" data-bs-target="#completionModal" data-bs-toggle="modal">수정</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Confirmation Alert Modal -->

</div>
<!-- Gallery Management End -->
</form>
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