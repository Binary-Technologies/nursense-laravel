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
                                <h2 class="text-left text-white">사전학습</h2>
                            </div>
                        </div>
                    </div>


                </section>
                <br>
                <div class="row">
                    <div class="col-lg-2">
                        <form class="form-inline justify-content-end mx-3 my-2 my-lg-0">
                            <select class="form-control search-bar-custom ml-2" style="width: 250px;">
                                <option>전체</option>
                                <option>당뇨</option>
                                <option>당뇨당뇨</option>
                                <option>당뇨당뇨당뇨</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-2">
                        <form class="form-inline justify-content-end mx-3 my-2 my-lg-0">
                            <select class="form-control search-bar-custom ml-2" style="width: 250px;">
                                <option>전체</option>
                                <option>당뇨</option>
                                <option>당뇨당뇨</option>
                                <option>당뇨당뇨당뇨</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-8 mt-4" style="text-align: right;">
                        <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit">자료 등록</button>
                    </div>
                </div>

                <!-- card -->
                <div class="row">
                    <div class="col-lg-12 shadow border-rad-5 mb-3 px-4 mt-3">
                        <div class="row">
                            <div class="col-md-4 item-flex-left position-rel curr-in-box py-4">
                                <div class="curr-brd">
                                    당뇨
                                </div>
                                <div class="curr-brd-r pl20">
                                    <strong>학습 1</strong>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-md-8 position-rel">
                                <span class="ttl-1 pr-4">등록일</span>
                                <span class="br-right-2"></span>
                                <span class="ttl-1">2023.03.16</span>
                                <div class="mt-2">
                                    <span class="desc-1">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                </div>
                            </div>
                            <div class="col-md-4 align-item-top-end">
                                <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit" style="background-color: #ffffff;color: #212880;">자료 수정</button>
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
                                <div class="curr-brd">
                                    당뇨
                                </div>
                                <div class="curr-brd-r pl20">
                                    <strong>학습 1</strong>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-md-8 position-rel">
                                <span class="ttl-1 pr-4">등록일</span>
                                <span class="br-right-2"></span>
                                <span class="ttl-1">2023.03.16</span>
                                <div class="mt-2">
                                    <span class="desc-1">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                </div>
                            </div>
                            <div class="col-md-4 align-item-top-end">
                                <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit" style="background-color: #ffffff;color: #212880;">자료 수정</button>
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
                                <div class="curr-brd">
                                    당뇨
                                </div>
                                <div class="curr-brd-r pl20">
                                    <strong>학습 1</strong>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-md-8 position-rel">
                                <span class="ttl-1 pr-4">등록일</span>
                                <span class="br-right-2"></span>
                                <span class="ttl-1">2023.03.16</span>
                                <div class="mt-2">
                                    <span class="desc-1">학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용</span>
                                </div>
                            </div>
                            <div class="col-md-4 align-item-top-end">
                                <button class="btn btn-outline-secondary btn-sm btn-curr" type="submit" style="background-color: #ffffff;color: #212880;">자료 수정</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card -->

            </div>
        </div>
    </div>
</section>

@endsection