@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">학생 계정 관리</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/studentDash') }}">회원 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">학생 계정 관리</li>
        </ol>
    </nav>
</div>

<!-- Instructor Account Management Start -->
<div class="container-fluid px-0">

    <div class="rounded pt-4">

        <form id="instructor-filter-form" method="POST" action="/admin/studentDash/filterData">
            @csrf
            <!-- Table Section -->
            <div class="row mb-4">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <select class="form-select form-text-d" name="university" id="university" aria-label="University Selection" onchange="showDepartments()">
                        <option value="0" selected>전체 학교</option>
                        @forelse ($unis as $uni)
                        <option value="{{ $uni->id }}">{{ $uni->name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <select class="form-select form-text-d" name="major" id="major" aria-label="Select Major">
                        <option value="0" selected>전체 학과</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <select class="form-select form-text-d" name="criteria" id="criteria" aria-label="Alignment Criteria">
                        <option value="name" selected>이름 순</option>
                        <option value="created_at">최근 등록 순</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <input type="date" class="form-control form-text-l" value="{{ request('reg-date') }}" name="reg-date" id="regDate" aria-describedby="Account Reg Date">
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <span class="position-rel"><i class="fas fa-search view-search-i" area-hidden="true"></i></span>
                    <input type="search" value="{{ request('search') }}" class="form-control form-text-l search-bar-custom" name="search" id="search" placeholder="이름, 아이디를 입력하세요." aria-label="Search">
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <button type="submit" class="btn btn-secondary btn1">
                        검색
                    </button>
                </div>
            </div>
            <div class="row mb-4">

                <div class="col-xl-8 col-lg-8 col-md-6 d-sm-none d-md-block list-count-outer">
                    <span class="position-rel list-count">
                        Total
                        <span class="b-right"></span>
                    </span>
                    <span class="list-count-num">
                        {{$users->count()}}
                    </span>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                    <a href="#confirmationModal" class="btn btn-secondary btn2" data-bs-toggle="modal" role="button">
                        임시 계정 발송
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                    <a href="{{ route('stuReg') }}" class="btn btn-secondary btn3">
                        학생 등록
                    </a>
                </div>

                <div class="col-sm-12 d-none d-sm-block d-md-none list-count-outer">
                    <span class="position-rel list-count">
                        Total
                    </span>
                    <span class="list-count-num">
                        {{$users->count()}}
                    </span>
                </div>

            </div>

        </form>

    </div>

    <div class="table-responsive mb-3">

        <table class="table align-middle table-hover">
            <thead class="thead-light text-center">
                <tr class="table-head-1">
                    <th scope="col">
                        <span><input type="checkbox" name="" id="" class="form-check-input" aria-label="CheckboxTh"></span>
                    </th>
                    <th scope="col" class="table-th-text">번호</th>
                    <th scope="col" class="table-th-text">이름</th>
                    <th scope="col" class="table-th-text">아이디</th>
                    <th scope="col" class="table-th-text">활동 상태</th>
                    <th scope="col" class="table-th-text">학교</th>
                    <th scope="col" class="table-th-text">학과</th>
                    <th scope="col" class="table-th-text">휴대폰 번호</th>
                    <th scope="col" class="table-th-text">이메일</th>
                    <th scope="col" class="table-th-text">계정 등록일</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($users as $user)
                <tr>
                    <td scope="row">
                        <span><input type="checkbox" name="" id="" class="form-check-input" aria-label=""></span>
                    </td>
                    <td>{{$user->id}}</td>
                    <td><a href="{{ route('stuAccData', $user->id) }}">{{$user->name}}</a> </td>
                    <td>{{$user->std_id}}</td>
                    <td style="color: {{ $user->active_status == 1 ? 'Black' : 'Red' }}">
                        {{ $user->active_status == 1 ? 'Learnable' : 'Not Learnable' }}                    
                    </td>
                    <td>{{ isset($user->university) ? $user->university->name : '-' }}</td>
                    <td>{{ isset($user->major) ? $user->major->name : '-' }}</td>
                    <td>{{$user->pno}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->format('Y-m-d')}}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>

        <!-- Show when click related button -->
        <div class="d-none">
            <table class="table align-middle table-hover">
                <thead class="thead-light text-center">
                    <tr class="table-head-1">
                        <th scope="col">
                            <span><input type="checkbox" name="" id="" class="form-check-input" aria-label="CheckboxTh"></span>
                        </th>
                        <th scope="col" class="table-th-text">번호</th>
                        <th scope="col" class="table-th-text">이름</th>
                        <th scope="col" class="table-th-text">아이디</th>
                        <th scope="col" class="table-th-text">활동 상태</th>
                        <th scope="col" class="table-th-text">학교</th>
                        <th scope="col" class="table-th-text">학과</th>
                        <th scope="col" class="table-th-text">휴대폰 번호</th>
                        <th scope="col" class="table-th-text">이메일</th>
                        <th scope="col" class="table-th-text">계정 등록일</th>
                    </tr>
                </thead>
            </table>
            <div class="item-flex-center mt-5">
                <div class="text-center mt-5">
                    <p class="dash-text1 mt-5">검색어와 일치한 내용이 없습니다.</p>
                    <div class="item-flex-align-center">
                        <button class="btn btn-dash1 mt-2">돌아가기</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Show when click related button -->

    </div>

    
<div class="item-flex-end">
    
    {{ $users->links('vendor.pagination.default') }}

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


</div>
<!-- Instructor Account Management End -->
@endsection
@section('scripts')
<script type="text/javascript">
    let uniData = {!! json_encode($unis) !!}

    function showDepartments(){
        let uniID = document.getElementById('university').value;
        $('#major').find('option:not(:first)').remove();

        if(uniID > 0){
            let departments = uniData[uniID].departments;
            departments.forEach(element => {
                $('#major').append('<option value="'+element.id+'">'+element.name+'</option>');
            });
        }
    }
</script>
@endsection