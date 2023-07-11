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
            <br>
            <div class="row">
                <div class="col-2">
                    <form class="form-inline justify-content-end my-2 my-lg-0">
                        <select class="select-custom" style="width: 250px;">
                            <option class="select-custom-opt">전체</option>
                            <option class="select-custom-opt">당뇨</option>
                            <option class="select-custom-opt">당뇨당뇨</option>
                            <option class="select-custom-opt">당뇨당뇨당뇨</option>
                        </select>
                    </form>
                </div>
                <div class="col-2">
                    <form class="form-inline justify-content-end my-2 my-lg-0">
                        <select class="select-custom" style="width: 250px;">
                            <option class="select-custom-opt">전체</option>
                            <option class="select-custom-opt">당뇨</option>
                            <option class="select-custom-opt">당뇨당뇨</option>
                            <option class="select-custom-opt">당뇨당뇨당뇨</option>
                        </select>
                    </form>
                </div>
                <div class="col-8 pr-4" style="text-align: right;">
                    <div class="item-flex-right">
                        <input type="checkbox" class="mr-3" style="width: 18px; height: 18px;">
                        <p class="pt-3 pb-0">진행 중인 평가만 보기</p>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-4">Total &nbsp;|&nbsp; 3</div>
            </div>

            @foreach($studies as $study)
            <!-- card -->
            <div class="row px-3">
                <div class="col-lg-12 shadow border-rad-5 mb-3 px-4 py-4">
                    <div class="row pb-4">
                        <div class="col-md-8 position-rel">
                            <span class="ttl-1 pr-4">{{ $study->name }}</span>
                            <br>
                            <span class="ttl-3" style="color: #9495A1; font-size: 11px;">제목 |</span>
                            <span class="ttl-3" style="color: #090909;">{{ $study->preLearning ? $study->preLearning->name : '-' }}</span>

                            <span class="ttl-3" style="color: #9495A1; margin-left: 20px;">총 문제 수 |</span>
                            <span class="ttl-3" style="color: #090909;">{{ $study->preLearning ? $study->preLearning->total_points : '-' }}개</span>
                            <br />
                            <span class="ttl-3" style="color: #9495A1;">종료일 |</span>
                            <span class="ttl-3" style="color: #090909;">{{ $study->preLearning ? $study->preLearning->deadline_date : '-' }}</span>
                            <br />
                            <div class="curr-brd-r pl20 mt-3 border-rad-5" style="background-color: #F5F7FE; width: 300px;">
                                {{ $study->semester->semester }} . {{ $study->curriculum->name }} - {{ $study->department->name }}
                            </div>
                        </div>
                        <div class="col-md-4" style="text-align: right;">
                            <span class="ttl-3" style="color: #3941A2; font-size: 11px;">{{ $study->preLearning ? '등록완료' : '-' }}</span>
                            <br />
                            <span class="ttl-3" style="color: #7479BD; font-size: 11px;">{{ $study->preLearning ? $study->preLearning->register_date : '-' }}</span>
                            <br />
                            <br />
                            <a href="#" class="btn btn-outline-secondary btn-sm btn-curr mr-2" type="submit">미리보기</a>
                            <a href="{{ $study->final ? '/profile/final/'.$study->id : '' }}" class="btn btn-outline-secondary btn-sm btn-curr2">미리보기</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card -->
            <!-- card -->
            <div class="row px-3">
                <div class="col-lg-12 shadow border-rad-5 mb-3 px-4 py-4">
                    <div class="row pb-4">
                        <div class="col-md-8 position-rel">
                            <span class="ttl-1 pr-4">{{ $study->name }}</span>
                            <br>
                            <span class="ttl-3" style="color: #9495A1; font-size: 11px;">제목 |</span>
                            <span class="ttl-3" style="color: #090909;">{{ $study->final ? $study->final->name : '-' }}</span>

                            <span class="ttl-3" style="color: #9495A1; margin-left: 20px;">총 문제 수 |</span>
                            <span class="ttl-3" style="color: #090909;">{{ $study->final ? $study->final->total_points : '-' }}개</span>
                            <br />
                            <span class="ttl-3" style="color: #9495A1;">종료일 |</span>
                            <span class="ttl-3" style="color: #090909;">{{ $study->final ? $study->final->deadline_date : '-' }}</span>
                            <br />
                            <div class="curr-brd-r pl20 mt-3 border-rad-5" style="background-color: #F5F7FE; width: 300px;">
                                {{ $study->semester->semester }} . {{ $study->curriculum->name }} - {{ $study->department->name }}
                            </div>
                        </div>
                        <div class="col-md-4" style="text-align: right;">
                            <span class="ttl-3" style="color: #3941A2; font-size: 11px;">{{ $study->final ? '등록완료' : '-' }}</span>
                            <br />
                            <span class="ttl-3" style="color: #7479BD; font-size: 11px;">{{ $study->final ? $study->final->register_date : '-' }}</span>
                            <br />
                            <br />
                            <a href="#" class="btn btn-outline-secondary btn-sm btn-curr mr-2" type="submit">미리보기</a>
                            <a href="{{ $study->final ? '/profile/preLearning/'.$study->id : '' }}" class="btn btn-outline-secondary btn-sm btn-curr2">미리보기</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card -->
            @endforeach
        </div>
    </div>
</section>
@endsection