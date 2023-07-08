@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
    <div class="row">

        <div class="col-lg-2">
            @include('includes.sidenav-info')
        </div>

        <div class="col-lg-10">

            <section class="img-sec-top text-center comp-height-120 py44 pl0 pr0" style="background-image: linear-gradient(to right, #212880 , #4A227B);">
                <div class="pl30">
                    <div class="content-box">
                        <div class="title">
                            <h2 class="text-left text-white mb0" style="font-family: pretendard-bold; font-size: 24px; color: #fff;">사전학습</h2>
                        </div>
                    </div>
                </div>
            </section>

            <div style="padding: 1%;">

                <div class="row my-5 pr-0">

                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4 pr-4">
                        <form class="form-inline justify-content-end my-2 ttl-12">
                            <span>교육 과정</span>
                            <select class="form-select search-bar-custom ml-3" style="width: 150px;">
                                <option>전체</option>
                                <option>당뇨</option>
                                <option>정신간호학</option>
                            </select>
                        </form>
                    </div>
                    @foreach ($preLearnings as $preLearning)
                    <!-- card -->
                    <div class="row mt-3">
                        <div class="col-lg-12 shadow border-rad-5 mb-3 px-4">
                            <div class="row">
                                <div class="col-md-4 item-flex-left position-rel curr-in-box py-4">
                                    <div class="curr-brd">
                                        지역사회간호학
                                    </div>
                                    <div class="curr-brd-r pl20">
                                        <strong>{{ $preLearning->name }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-md-8 position-rel">
                                    <span class="ttl-1 pr-4">등록일</span>
                                    <span class="br-right-2"></span>
                                    <span class="ttl-1">{{ $preLearning->register_date }}</span>
                                    <div class="mt-2" style="width: 516px;">
                                        <span class="desc-1" style="font-family: pretendard-regular; font-size: 14px; color: #616474; overflow:hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{{ $preLearning->description }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="align-item-top-end">
                                        <a href="/curriculum/quiz/{{ $preLearning->id }}" class="btn btn-outline-secondary btn-sm btn-curr" type="submit" style="background-color: #3941A2; color: #FFF;">자료 보기</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    @endforeach
                    {{ $preLearnings->links('vendor.pagination.default') }}
                </div>
            </div>

        </div>
    </div>
</section>

@endsection