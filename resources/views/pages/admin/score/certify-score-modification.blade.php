@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">수료증 수정</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/scoreCertifyDash') }}">배점 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/scoreCertifyDash') }}">수료증 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">수료증 수정</li>
        </ol>
    </nav>
</div>

<!-- Score Management Start -->
<div class="container-fluid px-0">

    <div class="rounded pt-4"></div>

    <div class="table-responsive pt-4 mb-3">
        <form method="post" id="certificate-update-form" action="/admin/certificateUpdate">
        @csrf
        <!-- 1 -->
            <div class="mt-3 mb-4">
                <h4 class="ttl-acc-blue position-rel title-border-t">수료증 발급 커트라인</h4>
            </div>
            <table class="table align-middle table-hover mb-5">
                <tbody class="text-center">

                    <tr class="table-head-2">
                        <td colspan="10" class="table-td-text1 bg-td height-30 text-left">
                            <span class="ms-5">
                                * 수료증 발급 커트라인
                            </span>
                        </td>
                    </tr>
                    <tr class="table-head-3">
                        <td class="ps-4">
                            <div class="height-52 width-20 item-flex-start mx-4 my-3 position-rel">
                                <input type="text" class="form-control val-text" name="cutoff" id="" placeholder="" value="{{ $score->cutoff }}" aria-describedby="Input">
                                <span class="score-text1">점</span>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>

            <div class="mb-4"></div>

            <!-- 2 -->
            <div class="mt-5 mb-4">
                <h4 class="ttl-acc-blue position-rel title-border-t">수료증 설명</h4>
            </div>
            <table class="table align-middle table-hover">
                <tbody class="text-center">

                    <tr class="table-head-1">
                        <td scope="row" class="table-td-text1 bg-td height-52">* 수료증 설명</td>
                        <td colspan="8" class="table-td-text2 bg-white-cus">
                            <div class="item-flex-start mx-4 my-3">
                                <textarea class="form-control val-text py-4 px-4" name="cert_explanation" id="" placeholder="" value="" rows="2" aria-describedby="Input">
                                    {{ $score->cert_explanation }}
                                </textarea>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </form>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <a href="#confirmationModal" class="btn btn9" data-bs-toggle="modal">
                수정 완료
            </a>
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
                    <h5 class="alert-title text-center mt-1 mb-4">수료증 수정</h5>
                    <p class="alert-text text-center mt-2 mb-5">
                        수정 사항을 저장하시겠습니까?
                    </p>

                    <div class="item-flex-center my-2">
                        <div class="mx-1">
                            <button class="btn btn-alert1" data-bs-target="#" data-bs-toggle="modal">취소</button>
                        </div>
                        <div class="mx-1">
                            <button class="btn btn-alert2" data-bs-target="#completionModal" data-bs-toggle="modal" onclick="event.preventDefault();
                            document.getElementById('certificate-update-form').submit();">수정</button>
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
                        수료증 수정을 완료하였습니다.
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

    <!-- Error Alert Modal -->
    <div class="modal fade" id="errorModal" aria-hidden="true" aria-labelledby="errorModalContent" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center my-3" id="errorModalContent"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <p class="alert-text2 text-center mt-2 mb-5">
                        총 평가점수가 100점이 되어야<br>
                        수정 가능합니다.
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
    <!-- Error Alert Modal -->

</div>
<!-- Score Management End -->
@endsection