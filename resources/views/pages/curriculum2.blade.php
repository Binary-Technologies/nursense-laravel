@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
    <div class="container">
        <div class="row row-width-1920">

            <div class="col-lg-2">
            {{-- TODO: Side navbar --}}
            </div>

            <div class="col-lg-10 sec-width-1396">

                <section class="img-sec-top text-center comp-height-120 py44 pl0 pr0" style="background-image: linear-gradient(to right, #212880 , #4A227B);">
                    <div class="pl30">
                        <div class="content-box">
                            <div class="title">
                                <h2 class="text-left text-white mb0" style="font-family: pretendard-bold; font-size: 24px; color: #fff;">사전학습 평가</h2>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="container cont-width-1396">

                    <div class="row my-5 pr-0">

                        <div class="col-md-8">
                        </div>
                        <div class="col-md-4 pr-0">
                            <form class="form-inline justify-content-end my-2 ttl-12">
                                <span>교육 과정</span>
                                <select class="form-control search-bar-custom ml-3" style="width: 150px;">
                                    <option>당뇨</option>
                                    <option>당뇨당뇨</option>
                                    <option>당뇨당뇨당뇨</option>
                                </select>
                            </form>
                        </div>

                    </div>

                    <!-- card -->
                    <div class="row">
                        <div class="col-lg-12 shadow border-rad-5 mb-3 px-4">
                            <div class="row">
                                <div class="col-md-4 item-flex-left position-rel curr-in-box py-4">
                                    <div class="curr-brd-r">
                                        <strong>학습 1</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-md-8 position-rel">
                                    <span class="ttl-1 pr-4">등록일</span>
                                    <span class="br-right-2"></span>
                                    <span class="ttl-1">2023.03.16 18:00</span>
                                    <div class="mt-2" style="width: 516px;">
                                         <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="align-item-top-end mb-2">
                                        <span class="ttl-25 pr-4 relative-block border-r2">점수</span>
                                        <span class="ttl-26">0점</span>
                                    </div>
                                    <div class="align-item-top-end">
                                        <a href="quiz.php">
                                        <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">자료 보기</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <!-- card -->
                    <div class="row">
                        <div class="col-lg-12 shadow border-rad-5 mb-3 px-4">
                            <div class="row">
                                <div class="col-md-4 item-flex-left position-rel curr-in-box py-4">
                                    <div class="curr-brd-r">
                                        <strong>학습 2</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-md-8 position-rel">
                                    <span class="ttl-1 pr-4">등록일</span>
                                    <span class="br-right-2"></span>
                                    <span class="ttl-1">2023.03.16 18:00</span>
                                    <div class="mt-2" style="width: 516px;">
                                         <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="align-item-top-end mb-2">
                                        <span class="ttl-25 pr-4 relative-block border-r2">점수</span>
                                        <span class="ttl-26">0점</span>
                                    </div>
                                    <div class="align-item-top-end">
                                        <a href="quiz.php">
                                        <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">자료 보기</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <!-- card -->
                    <div class="row">
                        <div class="col-lg-12 shadow border-rad-5 mb-3 px-4">
                            <div class="row">
                                <div class="col-md-4 item-flex-left position-rel curr-in-box py-4">
                                    <div class="curr-brd-r">
                                        <strong>학습 3</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-md-8 position-rel">
                                    <span class="ttl-1 pr-4">등록일</span>
                                    <span class="br-right-2"></span>
                                    <span class="ttl-1">2023.03.16 18:00</span>
                                    <div class="mt-2" style="width: 516px;">
                                         <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="align-item-top-end mb-2">
                                        <span class="ttl-25 pr-4 relative-block border-r2">점수</span>
                                        <span class="ttl-26">0점</span>
                                    </div>
                                    <div class="align-item-top-end">
                                        <a href="quiz.php">
                                        <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">자료 보기</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <!-- card -->
                    <div class="row">
                        <div class="col-lg-12 shadow border-rad-5 mb-3 px-4">
                            <div class="row">
                                <div class="col-md-4 item-flex-left position-rel curr-in-box py-4">
                                    <div class="curr-brd-r">
                                        <strong>학습 4</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-md-8 position-rel">
                                    <span class="ttl-1 pr-4">등록일</span>
                                    <span class="br-right-2"></span>
                                    <span class="ttl-1">2023.03.16 18:00</span>
                                    <div class="mt-2" style="width: 516px;">
                                         <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="align-item-top-end mb-2">
                                        <span class="ttl-25 pr-4 relative-block border-r2">점수</span>
                                        <span class="ttl-26">0점</span>
                                    </div>
                                    <div class="align-item-top-end">
                                        <a href="quiz.php">
                                        <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">자료 보기</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <!-- card -->
                    <div class="row">
                        <div class="col-lg-12 shadow border-rad-5 mb-3 px-4">
                            <div class="row">
                                <div class="col-md-4 item-flex-left position-rel curr-in-box py-4">
                                    <div class="curr-brd-r">
                                        <strong>학습 5</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-md-8 position-rel">
                                    <span class="ttl-1 pr-4">등록일</span>
                                    <span class="br-right-2"></span>
                                    <span class="ttl-1">2023.03.16 18:00</span>
                                    <div class="mt-2" style="width: 516px;">
                                         <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="align-item-top-end mb-2">
                                        <span class="ttl-25 pr-4 relative-block border-r2">점수</span>
                                        <span class="ttl-26">0점</span>
                                    </div>
                                    <div class="align-item-top-end">
                                        <a href="quiz.php">
                                        <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">자료 보기</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <!-- card -->
                    <div class="row">
                        <div class="col-lg-12 shadow border-rad-5 mb-3 px-4">
                            <div class="row">
                                <div class="col-md-4 item-flex-left position-rel curr-in-box py-4">
                                    <div class="curr-brd-r">
                                        <strong>학습 6</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-md-8 position-rel">
                                    <span class="ttl-1 pr-4">등록일</span>
                                    <span class="br-right-2"></span>
                                    <span class="ttl-1">2023.03.16 18:00</span>
                                    <div class="mt-2" style="width: 516px;">
                                         <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="align-item-top-end mb-2">
                                        <span class="ttl-25 pr-4 relative-block border-r2">점수</span>
                                        <span class="ttl-26">0점</span>
                                    </div>
                                    <div class="align-item-top-end">
                                        <a href="quiz.php">
                                        <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">자료 보기</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <!-- card -->
                    <div class="row">
                        <div class="col-lg-12 shadow border-rad-5 mb-3 px-4">
                            <div class="row">
                                <div class="col-md-4 item-flex-left position-rel curr-in-box py-4">
                                    <div class="curr-brd-r">
                                        <strong>학습 7</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-md-8 position-rel">
                                    <span class="ttl-1 pr-4">등록일</span>
                                    <span class="br-right-2"></span>
                                    <span class="ttl-1">2023.03.16 18:00</span>
                                    <div class="mt-2" style="width: 516px;">
                                         <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="align-item-top-end mb-2">
                                        <span class="ttl-25 pr-4 relative-block border-r2">점수</span>
                                        <span class="ttl-26">0점</span>
                                    </div>
                                    <div class="align-item-top-end">
                                        <a href="quiz.php">
                                        <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">자료 보기</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <!-- card -->
                    <div class="row">
                        <div class="col-lg-12 shadow border-rad-5 mb-3 px-4">
                            <div class="row">
                                <div class="col-md-4 item-flex-left position-rel curr-in-box py-4">
                                    <div class="curr-brd-r">
                                        <strong>학습 8</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-md-8 position-rel">
                                    <span class="ttl-1 pr-4">등록일</span>
                                    <span class="br-right-2"></span>
                                    <span class="ttl-1">2023.03.16 18:00</span>
                                    <div class="mt-2" style="width: 516px;">
                                         <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="align-item-top-end mb-2">
                                        <span class="ttl-25 pr-4 relative-block border-r2">점수</span>
                                        <span class="ttl-26">0점</span>
                                    </div>
                                    <div class="align-item-top-end">
                                        <a href="quiz.php">
                                        <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">자료 보기</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <!-- card -->
                    <div class="row">
                        <div class="col-lg-12 shadow border-rad-5 mb-3 px-4">
                            <div class="row">
                                <div class="col-md-4 item-flex-left position-rel curr-in-box py-4">
                                    <div class="curr-brd-r">
                                        <strong>학습 9</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-md-8 position-rel">
                                    <span class="ttl-1 pr-4">등록일</span>
                                    <span class="br-right-2"></span>
                                    <span class="ttl-1">2023.03.16 18:00</span>
                                    <div class="mt-2" style="width: 516px;">
                                         <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="align-item-top-end mb-2">
                                        <span class="ttl-25 pr-4 relative-block border-r2">점수</span>
                                        <span class="ttl-26">0점</span>
                                    </div>
                                    <div class="align-item-top-end">
                                        <a href="quiz.php">
                                        <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">자료 보기</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <!-- card -->
                    <div class="row">
                        <div class="col-lg-12 shadow border-rad-5 mb-3 px-4">
                            <div class="row">
                                <div class="col-md-4 item-flex-left position-rel curr-in-box py-4">
                                    <div class="curr-brd-r">
                                        <strong>학습 10</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-md-8 position-rel">
                                    <span class="ttl-1 pr-4">등록일</span>
                                    <span class="br-right-2"></span>
                                    <span class="ttl-1">2023.03.16 18:00</span>
                                    <div class="mt-2" style="width: 516px;">
                                         <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #616474;">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="align-item-top-end mb-2">
                                        <span class="ttl-25 pr-4 relative-block border-r2">점수</span>
                                        <span class="ttl-26">0점</span>
                                    </div>
                                    <div class="align-item-top-end">
                                        <a href="quiz.php">
                                        <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">자료 보기</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->

<nav aria-label="Page navigation muve gallery" style="margin-left: 70%;">
    <ul class="pagination">
    <li class="page-item">
      <a class="page-link pagination_link_arrows pagination_link_arrows_disabled" href="#" aria-label="Previous">
        <span aria-hidden="true">&lt;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link pagination_link pagination_link_active" href="">1</a></li>
    <li class="page-item"><a class="page-link pagination_link" href="#">2</a></li>
    <li class="page-item"><a class="page-link pagination_link" href="#">3</a></li>
    <li class="page-item"><a class="page-link pagination_link" href="#">4</a></li>
    <li class="page-item"><a class="page-link pagination_link" href="#">5</a></li>
    <li class="page-item"><a class="page-link pagination_link" href="#">6</a></li>
    <li class="page-item"><a class="page-link pagination_link" href="#">7</a></li>
    <li class="page-item">
      <a class="page-link pagination_link_arrows" href="#" aria-label="Next">
        <span aria-hidden="true">&gt;</span>
      </a>
    </li>
  </ul>
</nav>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection