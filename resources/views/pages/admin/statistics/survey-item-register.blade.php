@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">설문 항목 추가</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/surveyItemDash') }}">통계 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/surveyItemDash') }}">설문 항목</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">설문 항목 추가</li>
        </ol>
    </nav>
</div>

<!-- Statistics Item Management Start -->
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">
        <table class="table align-middle table-hover">
            <tbody class="text-center">
                <form method="post" id="survey-add-form" action="/admin/surveyItemReg">
                @csrf
                    <tr class="table-head-2">
                        <td scope="row" class="table-td-text1 bg-td height-52">* 제목</td>
                        <td colspan="8" class="table-td-text2">
                            <div class="height-52 item-flex-start width-50 ml30 my-3">
                                <input type="text" class="form-control val-text" name="title" id="title" placeholder="제목을 입력하세요." value="" aria-describedby="Statistics Item Title Input">
                            </div>
                        </td>
                    </tr>
                    <tr class="table-head-3">
                        <td scope="row" class="table-td-text1 bg-td height-52">* 문항</td>
                        <td colspan="8" class="table-td-text2" id="questions-container">
                            <div class="height-52 item-flex-start ml30 my-3">
                                <div class="height-52">
                                    <input type="text" class="form-control val-text file-up-bar-custom2" name="questions[]" id="q1" placeholder="문항을 입력하세요.">
                                </div>
                                <a href="#deleteConfirmationModal" class="btn btn12 ms-4" data-bs-toggle="modal">문항 삭제</a>
                            </div>
                            <div class="height-52 item-flex-start width-10 ml30 my-3">
                                <button type="button" id="add-question" class="btn btn5 btn5-1 ">
                                    문항 추가
                                </button>
                            </div>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>

    <div class="row mt-4 mb-5">
        <div class="item-flex-end">
            <button class="btn btn11" data-bs-toggle="modal" onclick="event.preventDefault();
            document.getElementById('survey-add-form').submit();">
                추가 완료
            </button>
            <!-- For Active Button -->
            <!-- <a href="#regCompleteModal" class="btn btn9" data-bs-toggle="modal">
                추가 완료
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
<div class="modal fade" id="regCompleteModal" aria-hidden="true" aria-labelledby="regCompleteModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="regCompleteModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text text-center mt-2 mb-5">
                    항목 추가를 완료하였습니다.
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
<!-- Registration Complete/Exit Alert Modal -->

</div>
<!-- Statistics Item Management End -->

@endsection
@section('scripts')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var addQuestionBtn = document.getElementById('add-question');
        var questionsContainer = document.getElementById('questions-container');
        var qCount = 1

        addQuestionBtn.addEventListener('click', function() {
            if(qCount < 8){
                var newQuestionInput = document.createElement('div');
                newQuestionInput.innerHTML = `
                    <div class="height-52 item-flex-start ml30 my-3">
                        <div class="height-52">
                            <input type="text" class="form-control val-text file-up-bar-custom2" name="questions[]" placeholder="문항을 입력하세요." >
                        </div>
                        <button type="button" class="btn btn12 ms-4 remove-question">학과 삭제</button>
                    </div>
                `;

                questionsContainer.insertBefore(newQuestionInput, addQuestionBtn.parentNode);

                var removeButtons = questionsContainer.getElementsByClassName('remove-question');
                for (var i = 0; i < removeButtons.length; i++) {
                    removeButtons[i].addEventListener('click', function() {
                        this.parentNode.remove();
                        qCount--;
                    });
                }
                qCount++;
            }
            if(qCount == 8) addQuestionBtn.classList.add('opacity-50');
        });
    });
</script>
@endsection