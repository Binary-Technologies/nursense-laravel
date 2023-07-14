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
                            <h2 class="text-left text-white">사전/최종평가</h2>
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
                        <a href="{{ url('assestment') }}">사전/최종평가</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">사전 학습 2 평가 등록</li>
                </ol>
            </nav>
<form action="/profile/finalAssessment/register" method="post">
    @csrf
            <div class="cont-bg">
                <div class="row mx-5">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 pl-0">
                        <h2 class="ttl-4 mt-5 mb-4">사전 학습 평가</h2>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <!-- card main -->
                <div class="row mx-5">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 box-assesment border-t-custom-assesment shadow border-rad-5 mb-4 px-4">
                        <div class="py-4">
                            <div class="item-flex-center my-2">
                                <input type="text" class="form-control val-text py-2" name="title" id="" placeholder="제목을 입력해주세요." value="" aria-describedby="">
                            </div>
                            <div class="item-flex-center my-2">
                                <textarea class="form-control val-text-area py-2" name="content" id="" value="" rows="2" placeholder="평가의 내용 설명을 입력해주세요." aria-describedby=""></textarea>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="pt-3 mb-2 item-flex-left">
                                        <div class="ttl-27 pr-3 min-width-80px">총 문제 수</div>
                                        <div class="divider1">|</div>
                                        <div class="ttl-1 pl-3" id="totalQuestion">1개</div>
                                    </div>
                                    <div class="item-flex-left">
                                        <div class="ttl-27 pr-3 min-width-80px">총 배점</div>
                                        <div class="divider1">|</div>
                                        <input class="ttl-1 pl-3" name="total" placeholder="0점"/>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="row my-4">
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                            <p class="form-text-lbl my-1">종료일시</p>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <input type="date" class="form-control val-text" name="date" id="" aria-describedby="">
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <select class="form-select form-text-d" name="time" id="" aria-label="">
                                                <option value="0" selected>시</option>
                                                <option value="00">00:00</option>
                                                <option value="01">01:00</option>
                                                <option value="02">02:00</option>
                                                <option value="03">03:00</option>
                                                <option value="04">04:00</option>
                                                <option value="05">05:00</option>
                                                <option value="06">06:00</option>
                                                <option value="07">07:00</option>
                                                <option value="08">08:00</option>
                                                <option value="09">09:00</option>
                                                <option value="10">10:00</option>
                                                <option value="11">11:00</option>
                                                <option value="12">12:00</option>
                                                <option value="13">13:00</option>
                                                <option value="14">14:00</option>
                                                <option value="15">15:00</option>
                                                <option value="16">16:00</option>
                                                <option value="17">17:00</option>
                                                <option value="18">18:00</option>
                                                <option value="19">19:00</option>
                                                <option value="20">20:00</option>
                                                <option value="21">21:00</option>
                                                <option value="22">22:00</option>
                                                <option value="23">23:00</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <select class="form-select form-text-d" name="minute" id="" aria-label="">
                                                <option value="1" selected>분</option>
                                                <option value="00">00</option>
                                                <option value="30">30</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <!-- card main -->

                

                <!-- card 2 for Add -->
                <div class="row mx-5" id="departments-container" >
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 box-assesment shadow border-rad-5 mb-4 px-4">
                        <div class="py-4">
                            <div class="row mb-4">
                                <div class="col-12">
                                    <div class="item-flex-center my-2">
                                        <h2 class="ttl-29 py-2">1.</h2> <input type="text" class="form-control val-text py-2" name="questions[0][question]" id="" placeholder="질문을 입력해주세요." value="" aria-describedby="">
                                    </div>
                                </div>
                            </div>

                                <!-- 1 -->
                                <div class="row border-b-cus first mx-1 mb-4" id="existingRows">
                                    <div class="form-check col-6 item-flex-left mb-4">
                                        <div class="ml-1" id="addrow">
                                            <input class="form-check-input" type="radio" name="" id="">

                                            <input type="text" class="form-check-label ttl-1" placeholder="답지1" name="questions[0][option1]" >
                                            
                                        </div>
                                    </div>
                                    <div class="form-check col-6 item-flex-right mb-4">
                                        <div class="mr-1">
                                            <input class="form-check-input" type="radio" name="" id="" checked >
                                            <label class="form-check-label ttl-1 mr-2" for="">
                                                정답
                                            </label>
                                            <a href="#" class="ttl-31">
                                                X
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="rowindex row border-b-cus bottomRow mx-1 mb-4">
                                    <div class="form-check col-6 item-flex-left mb-4">
                                        <div class="ml-1">
                                            <input class="form-check-input" type="radio" name="" id="" disabled >
                                            <label class="form-check-label ttl-31" for="" onclick="addrow()">
                                                답지 추가
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 3 -->
                                <div class="row mx-1 bottomRow">
                                    <div class="form-check col-6 item-flex-left mb-4">
                                        <div class="ml-1">
                                            <input class="form-check-input" type="checkbox" name="" id="" checked>
                                            <label class="form-check-label ttl-31" for="">
                                                선택지 섞기
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check col-6 item-flex-right mb-4">
                                        <div class="mr-1">
                                            <div class="item-flex-right my-2">
                                                <input type="text" class="form-control val-text py-2 width-50 height-40 position-rel" name="questions[0][points]" placeholder="배점 입력" value="" aria-describedby="">
                                                <label class="asses-eval-reg-abs">점</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-2 position-rel">
                        <div class="add-icon-btn-abs">
                            <div class="add-icon-btn" id="add-icon-btn">
                                <i class='fas fa-plus-circle' onclick="addcard()"></i>
                            </div>
                        </div>
                    </div>
                </div>
<!-- card 2 for Add --> 


                <div class="row my-5">
                    <div class="col-12 item-flex-center">
                        <!-- If Completed -->
                        <button type="submit" class="btn-2" data-bs-toggle="modal">
                            저장
                        </button>
                        {{-- <a href="#completionModal" class="btn-2" data-bs-toggle="modal">저장</a>
                        <!-- If Fail -->
                        <!-- <a href="#failModal" class="btn-2" data-bs-toggle="modal">저장</a> --> --}}
                    </div>
                </div>
            </div>
        </form>
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
                                총 배점이 100점이 아닐 경우<br>
                                저장되지 않습니다.
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

@endsection

@section('scripts')

<script>
function addrow() {
    var boxAssessment = document.getElementById('departments-container');
    var existingRows = boxAssessment.querySelectorAll('.row.border-b-cus.first');
    var rowLimit = 5;  
    if (existingRows.length >= rowLimit) {
         
        return;
    }
    
    let questionIndex = existingRows.length;

    var newRow = document.createElement('div');
    newRow.classList.add('row', 'border-b-cus','first', 'mx-1', 'mb-4');
    newRow.innerHTML = `
        <div class="form-check col-6 item-flex-left mb-4">
            <div class="ml-1" id="addrow">
                <input class="form-check-input" type="radio" name="" id="">
                <input type="text" class="form-check-label ttl-1" placeholder="답지${questionIndex+1}" name="questions[0][option${questionIndex+1}]">
            </div>
        </div>
        <div class="form-check col-6 item-flex-right mb-4">
            <div class="mr-1">
                <input class="form-check-input" type="radio" name="" id="" >
                <label class="form-check-label ttl-1 mr-2" for="">정답</label>
                <label class="ttl-31" onclick="removeRow(this)">X</label>
            </div>
        </div>
    `;

    var targetElement = boxAssessment.querySelector('.row.border-b-cus.bottomRow');
    targetElement.parentNode.insertBefore(newRow, targetElement);
}

function removeRow(element) {
    var row = element.closest('.row.border-b-cus');
    row.remove();
}

let questionIndex = 0;
function addcard(){
    var addDepartmentButton = document.getElementById('add-icon-btn');
    var departmentsContainer = document.getElementById('departments-container');
    
    
        questionIndex++;

        var total_questions = document.getElementById('totalQuestion');
        total_questions.textContent = questionIndex + 1 + "개";
    

      var newCard = document.createElement('div');
      newCard.classList.add('row');
      newCard.innerHTML = `
      <div class="row mx-1 " id="departments-container-generate${questionIndex + 1}" >
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 box-assesment shadow border-rad-5 mb-4 px-4">
                        <div class="py-4">
                            <div class="row mb-4">
                                <div class="col-12">
                                    <div class="item-flex-center my-2">
                                        <h2 class="ttl-29 py-2">${questionIndex + 1}.</h2><input type="text" class="form-control val-text py-2" name="questions[${questionIndex}][question]" id="" placeholder="질문을 입력해주세요." value="" aria-describedby="">
                                    </div>
                                </div>
                            </div>

                                <!-- 1 -->
                                <div class="row border-b-cus generate mx-1 mb-4">
                                    <div class="form-check col-6 item-flex-left mb-4">
                                        <div class="ml-1">
                                            <input class="form-check-input" type="radio" name="" id="">

                                            <input type="text" class="form-check-label ttl-1" placeholder="답지1" name="questions[${questionIndex}][option1]" id="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-check col-6 item-flex-right mb-4">
                                        <div class="mr-1">
                                            <input class="form-check-input" type="radio" name="" id="" checked>
                                            <label class="form-check-label ttl-1 mr-2" for="">
                                                정답
                                            </label>
                                            <a href="#" class="ttl-31">
                                                X
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="rowindex row border-b-cus generate bottomRow mx-1 mb-4">
                                    <div class="form-check col-6 item-flex-left mb-4">
                                        <div class="ml-1">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>
                                            <label class="form-check-label ttl-31" for="" onclick="addrow_generate(${questionIndex + 1})">
                                                답지 추가
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                

                                <!-- 3 -->
                                <div class="row mx-1 ">
                                    <div class="form-check col-6 item-flex-left mb-4">
                                        <div class="ml-1">
                                            <input class="form-check-input" type="checkbox" name="" id="" checked>
                                            <label class="form-check-label ttl-31" for="">
                                                선택지 섞기
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check col-6 item-flex-right mb-4">
                                        <div class="mr-1">
                                            <div class="item-flex-right my-2">
                                                <input type="text" class="form-control val-text py-2 width-50 height-40 position-rel" name="questions[${questionIndex}][points]" placeholder="배점 입력" value="" aria-describedby="">
                                                <label class="asses-eval-reg-abs">점</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    
                </div>
      `;
  
      departmentsContainer.appendChild(newCard);
    }
  
    function addNewCard() {
      var cardToClone = this.parentNode.parentNode;
      var newCard = cardToClone.cloneNode(true);
      departmentsContainer.appendChild(newCard);
    }

 function addrow_generate(answerNumber){
    var boxAssessment = document.getElementById('departments-container-generate'+answerNumber);
    var existingRows = boxAssessment.querySelectorAll('.row.border-b-cus.generate');
    var rowLimit = 6; 
    if (existingRows.length >= rowLimit) {
        
        return;
    }
    
    let questionIndex = existingRows.length;

    
    var newRow = document.createElement('div');
    newRow.classList.add('row', 'border-b-cus','generate', 'mx-1', 'mb-4');
    newRow.innerHTML = `
        <div class="form-check col-6 item-flex-left mb-4">
            <div class="ml-1" id="addrow">
                <input class="form-check-input" type="radio" name="" id="">
                <input type="text" class="form-check-label ttl-1" placeholder="답지${questionIndex}" name="questions[${answerNumber - 1}][option${questionIndex}]">
            </div>
        </div>
        <div class="form-check col-6 item-flex-right mb-4">
            <div class="mr-1">
                <input class="form-check-input" type="radio" name="" id="" >
                <label class="form-check-label ttl-1 mr-2" for="">정답</label>
                <label class="ttl-31" onclick="removeRow(this)">X</label>
            </div>
        </div>
    `;

    var targetElement = boxAssessment.querySelector('.row.border-b-cus.bottomRow');
    targetElement.parentNode.insertBefore(newRow, targetElement);
 }
</script>
@endsection