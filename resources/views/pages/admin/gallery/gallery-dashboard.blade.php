@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">갤러리 관리</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">
                갤러리 관리
            </li>
        </ol>
    </nav>
</div>

<!-- Gallery Management Start -->
<div class="container-fluid px-0">

    <div class="rounded pt-4">

        <form method="post" id="gallery-filter-form" action="#">

            <!-- Table Section -->
            <div class="row mb-4">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <span class="position-rel"><i class="fas fa-search view-search-i" area-hidden="true"></i></span>
                    <input type="text" class="form-control form-text-l search-bar-custom" name="search-gallery" id="searchGallery" placeholder="제목을 입력하세요." aria-label="Search">
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <a href="#" class="btn btn-secondary btn1">
                        검색
                    </a>
                </div>
            </div>
            <div class="row mb-4">

                <div class="col-xl-10 col-lg-10 col-md-6 d-sm-none d-md-block list-count-outer">
                    <span class="position-rel list-count">
                        Total
                        <span class="b-right"></span>
                    </span>
                    <span class="list-count-num">
                        {{$galleries->count()}}
                    </span>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                    <a href="{{ route('galleryReg') }}" class="btn btn-secondary btn3">
                        갤러리 등록
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
                    <th scope="col" class="table-th-text">썸네일 이미지</th>
                    <th scope="col" class="table-th-text">조회수</th>
                    <th scope="col" class="table-th-text">등록일</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($galleries as $gallery)
                    <tr>
                        <td>{{$gallery->id}}</td>
                        <td><a href="{{ route('galleryDetails', ['gallery' => $gallery->id])  }}" class="td-a-custom">{{$gallery->title}}</a></td>
                        <td>
                            <img src="{{ Storage::url($gallery->path) }}" height="200px">
                        </td>
                        <td>{{$gallery->views}}</td>
                        <td>{{$gallery->created_at->format('Y-m-d')}}</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>

    </div>

</div>

<div class="item-flex-end">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link pgln-custom pagination_link_arrows pagination_link_arrows_disabled" href="#" aria-label="Previous">
                    <span aria-hidden="true">&lt;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d pagination_link_active" href="">1</a></li>
            <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d" href="#">2</a></li>
            <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d" href="#">3</a></li>
            <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d" href="#">4</a></li>
            <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d" href="#">5</a></li>
            <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d" href="#">6</a></li>
            <li class="page-item"><a class="page-link pgln-custom pagination_link form-text-d" href="#">7</a></li>
            <li class="page-item">
                <a class="page-link pgln-custom pagination_link_arrows" href="#" aria-label="Next">
                    <span aria-hidden="true">&gt;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>


</div>
<!-- Gallery Management End -->


<!-- Delete Completion Alert Modal -->
<div class="modal" tabindex="-1" style="display: {{ session('gallery delete') ? 'block' : 'none'}}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="deleteCompletionModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    갤러리 삭제를 완료하였습니다.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <a href="{{route('galleryDash')}}">
                            <button type="submit" class="btn btn-alert3" data-bs-target="#" data-bs-toggle="modal">확인</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete Completion Alert Modal -->


<!-- Completion Alert Modal -->
<div class="modal" tabindex="-1" style="display: {{ session('gallery update') ? 'block' : 'none'}}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="completionModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="alert-text2 text-center mt-2 mb-5">
                    갤러리 수정을 완료하였습니다.
                </p>

                <div class="item-flex-center my-2">
                    <div class="mx-1">
                        <a href="{{route('galleryDash')}}">
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