@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
    <div class="container">
        <div class="row row-width-1920">

            <div class="col-lg-2">
                {{-- TODO: Side navbar --}}
            </div>

            <div class="col-lg-10 sec-width-1396">
                <!-- card -->
                <div class="row item-flex-center pt200 pb200">
                    <div class="col-lg-6 shadow border-rad-5 download-box mb-3 px-5 py-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="px-5 py-5">
                                    <p class="ttl-4 px-5 text-center" style="font-family: pretendard-bold; font-size: 26px; color: #212880;">NURSENSE를 다운로드받고 학습 시뮬레이션을 플레이하세요.</p>
                                </div>
                            </div>
                            <div class="col-md-12 item-flex-center pb-5">
                                <button class="btn btn-outline-secondary btn-sm btn-downld" type="submit">NURSENSE 다운로드</button>
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