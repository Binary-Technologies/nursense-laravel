@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">자료실 관리</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/resourceDash') }}">컨텐츠 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">자료실 관리</li>
        </ol>
    </nav>
</div>

<!-- Resource Management Start -->
<div class="container-fluid px-0">

    <div class="rounded pt-4">
        <form id="resource-filter-form" method="POST" action="/admin/resourceDash/filterData">
            @csrf

            <!-- Table Section -->
            <div class="row mb-4">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <select class="form-select form-text-d" value="{{ request('expose-resource') }}"  name="expose-resource" id="exposeResource" aria-label="Whether to Expose Resource">
                        <option value="1" >전체</option>
                        <option value="2">노출</option>
                        <option value="3">미노출</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <span class="position-rel"><i class="fas fa-search view-search-i" area-hidden="true"></i></span>
                    <input type="search" value="{{ request('search') }}" class="form-control form-text-l search-bar-custom" name="search" id="searchResource" placeholder="제목을 입력하세요." aria-label="Search">
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
                        {{$resources->total()}}
                    </span>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                    <a href="{{ route('resourceReg') }}" class="btn btn-secondary btn3">
                        자료실 등록
                    </a>
                </div>

                <div class="col-sm-12 d-none d-sm-block d-md-none list-count-outer">
                    <span class="position-rel list-count">
                        Total
                    </span>
                    <span class="list-count-num">
                        70
                    </span>
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
                    <th scope="col" class="table-th-text">첨부파일</th>
                    <th scope="col" class="table-th-text">조회수</th>
                    <th scope="col" class="table-th-text">카드 노출</th>
                    <th scope="col" class="table-th-text">등록일</th>
                </tr>
            </thead>
            <tbody class="text-center">
                    @foreach ($resources as $resource)
                    <tr>  
                        <td>{{$resource->id}}</td>
                        <td><a href="{{ route('resourceDetails', ['resource' => $resource->id]) }}" class="td-a-custom">{{$resource->title}}</a></td>
                        <td>
                            <div class="item-flex-center">
                                <ul>
                                    @foreach(json_decode($resource->path) as $filePath)
                                    <li>
                                        <span class="i-color-1"><i class='far fa-file-alt'></i></span>
                                        <span class="ms-2">
                                            <a href="{{ Storage::url($filePath) }}" target="_blank">
                                                {{ basename($filePath) }}
                                            </a>
                                        </span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </td>
                        <td>{{$resource->details}}</td>
                        <td style="color: {{ $resource->status == 1 ? 'Red' : 'Black' }}">
                            {{$resource->status == 1 ? '노출' : '미노출'}}
                        </td>
                        <td>{{$resource->created_at->format('Y-m-d')}}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>


<div class="item-flex-end">
    
    {{ $resources->links('vendor.pagination.default') }}

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
<!-- Resource Management End -->

    <!-- Delete Completion Alert Modal -->
    <div class="modal" tabindex="-1" style="display: {{ session('resource delete') ? 'block' : 'none'}}">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center my-3" id="deleteCompletionModalContent"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <p class="alert-text2 text-center mt-2 mb-5">
                        자료실 삭제를 완료하였습니다.
                    </p>
    
                    <div class="item-flex-center my-2">
                        <div class="mx-1">
                            <a href="{{route('resourceDash')}}">
                                <button type="submit" class="btn btn-alert3" data-bs-target="#" data-bs-toggle="modal">확인</button>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Completion Alert Modal -->

    <!-- UpdateCompletion Alert Modal -->
<div class="modal" tabindex="-1" style="display: {{ session('resource update') ? 'block' : 'none'}}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="completionModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    자료실 수정을 완료하였습니다.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <a href="{{route('resourceDash')}}">
                            <button type="submit" class="btn btn-alert3" data-bs-target="#" data-bs-toggle="modal">확인</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Completion Alert Modal -->

@endsection