@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">배너 상세</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/bannerDash') }}">배너 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">배너 상세</li>
        </ol>
    </nav>
</div>

<!-- Banner Management Start -->
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">
        <table class="table align-middle table-hover">
            <tbody class="text-center">
                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td height-52">배너명</td>
                    <td colspan="8" class="table-td-text3">
                        <div class="height-52 item-flex-align-start ps-4">
                            <label class="lbl-y2">
                                {{$banner->name}}
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">제목</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4">
                            <label class="lbl-y2">
                                {{$banner->title}}
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">내용</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 pe-5">
                                {{$banner->content}}
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">링크</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4">
                            <label class="lbl-y2">
                                {{$banner->link}}
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">순서</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4">
                            <label class="lbl-y2">
                                {{$banner->sequence}}
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td height-52">이미지 파일</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="item-flex-align-start ps-4">
                            <img src="{{ Storage::url($banner->image) }}" height="200px">
                        </div>
                    </td>
                </tr>
                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td height-52">배너 노출</td>
                    <td colspan="8" class="table-td-text2">
                        <div class="height-52 item-flex-align-start ps-4">
                            <label class="lbl-y2">
                               {{$banner->status == 0 ? '노출' : '미노출' }}

                            </label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <a href="#deleteConfirmationModal" class="btn btn14" data-bs-toggle="modal">
                삭제
            </a>
            <a href="{{ route('bannerUpdate', ['banner' => $banner->id]) }}" class="btn btn13 ms-3">
                수정
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
                <h5 class="alert-title text-center mt-1 mb-4">배너 삭제</h5>
                <p class="alert-text text-center mt-2 mb-5">
                    해당 배너를 삭제하시겠습니까?
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <a href="{{ route('bannerDetails', ['banner' => $banner->id]) }}">
                            <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                        </a>
                        
                    </div>
                    <div class="mx-1">
                        <form action="{{ route('bannerDelete', ['banner' => $banner->id]) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-alert2" data-bs-target="#deleteCompletionModal" data-bs-toggle="modal">삭제</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete Confirmation Alert Modal -->


</div>
<!-- Banner Management End -->

@endsection