@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">1:1문의 관리</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">
                1:1문의 관리
            </li>
        </ol>
    </nav>
</div>

<!-- Inquiry Management Start -->
<div class="container-fluid px-0">

    <div class="rounded pt-4">

        <form  id="inquiry-filter-form" >

            <!-- Table Section -->
            <div class="row mb-4">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <select class="form-select form-text-d" name="expose-inquiry" id="exposeInquiry" aria-label="Whether to Expose Inquiry">
                        <option value="1" selected>전체</option>
                        <option value="2">답변 대기</option>
                        <option value="3">답변 완료</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <span class="position-rel"><i class="fas fa-search view-search-i" area-hidden="true"></i></span>
                    <input type="search" value="{{ request('search') }}" class="form-control form-text-l search-bar-custom" name="search" id="searchInquiry" placeholder="제목을 입력하세요." aria-label="Search">
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <button type="submit" class="btn btn-secondary btn1">
                        검색
                    </button>
                </div>
            </div>
            <div class="row mb-4">

                <div class="col-xl-10 col-lg-10 col-md-6 d-sm-none d-md-block list-count-outer">
                    <span class="position-rel list-count">
                        Total
                        <span class="b-right"></span>
                    </span>
                    <span class="list-count-num">
                        {{$inquiries->count()}}
                    </span>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">

                </div>

            </div>

        </form>

    </div>

    <div class="table-responsive mb-3">

        <table class="table align-middle table-hover">
            <thead class="thead-light text-center">
                <tr class="table-head-1">
                    <th scope="col" class="table-th-text">번호</th>
                    <th scope="col" class="table-th-text">제목</th>
                    <th scope="col" class="table-th-text">작성자</th>
                    <th scope="col" class="table-th-text">문의 일자</th>
                    <th scope="col" class="table-th-text">답변상태</th>
                    <th scope="col" class="table-th-text">기능</th>
                    <th scope="col" class="table-th-text">답변일자</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($inquiries as $inquiry)
                   
                <tr>
                    <td>{{$inquiry->id}}</td>
                    <td>{{$inquiry->title}}</td>
                    <td>{{$inquiry->writerName}}</td>
                    <td>{{$inquiry->created_at}}</td>
                    <td>
                        @if ($inquiry->status == 0)
                        <span class="table-td-text4">답변 대기</span>
                        @else
                        답변 완료
                        @endif
                        
                    <td>
                        @if ($inquiry->status == 0)
                        <div class="height-52 item-flex-center">
                            <a href="{{ route('inquiryReg', ['inquiry' => $inquiry->id]) }}" class="btn btn3 btn3-1">
                                자료실 등록
                            </a>
                        </div>
                        @else
                        <div class="height-52 item-flex-center">
                            <a href="{{ route('inquiryDetails', ['inquiry' => $inquiry->id])}}" class="btn btn5 btn5-1">
                                답변 보기
                            </a>
                        </div>
                        @endif
                    </td>
                    <td>
                        {{$inquiry->status == 0 ? '-' : $inquiry->updated_at}}
                    
                    </td>
                </tr>
                @endforeach

                
            </tbody>
        </table>

    </div>

</div>


<div class="item-flex-end">
    
    {{ $inquiries->links('vendor.pagination.bootstrap-4') }}

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

<!-- update Completion Alert Modal -->
<div class="modal" tabindex="-1" style="display: {{ session('Inquiry updated') ? 'block' : 'none'}} ">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="completionModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    답변 수정을 완료하였습니다.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <a href="{{route('inquiryDash')}}"  class="btn btn-alert3"  >
                            확인
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Completion Alert Modal -->

</div>
<!-- Inquiry Management End -->

@endsection