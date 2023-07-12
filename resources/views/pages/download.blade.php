@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
    <div class="row">

        <div class="col-lg-2">
            @include('includes.sidenav-info')
        </div>

        <div class="col-lg-10">

            <!-- card -->
            <div class="row item-flex-center pt200 pb200">
                <div class="col-lg-6 shadow border-rad-5 download-box mb-3 px-5 py-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="px-5 py-5">
                                <p class="ttl-4 px-5 text-center" style="font-family: pretendard-bold; font-size: 26px; color: #212880;">NURSENSE를 다운로드받고<br> 학습 시뮬레이션을 플레이하세요.</p>
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
</section>
<script>
    var element = document.getElementById("curriculum2");
    element.classList.add("dropdown-menu-item");
</script>
@endsection