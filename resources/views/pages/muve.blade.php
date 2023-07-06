@extends('layouts.app')

@section('content')
<section>
    <div>
        <div class="row">

            <div class="col-md-2">
                @include('includes.sidenav-info')
            </div>

            <div class="col-md-10" style="padding: 5%;">

                <section class="img-sec-top text-center mt-5" style="background-image: url(/images/wrappers/muve.png); width: 100%; height: 600px;">
                </section>

                <div class="row my-5">
                    <div class="col-md-2">
                        <h3 class="pl-4 pb-3" style="font-size: 32px; font-family: pretendard-bold; color: #212880;">MUVE란?</h3>
                    </div>
                    <div class="col-md-10">
                        <p class="text-justify pr-4" style="font-family: pretendard-regular; font-size: 22px; text-align: center; color: #1B1D1F;">Multi-User Virtual Environments(MUVE) 시뮬레이션을 활용하여 다수의 사용자가 공간적 제약 없이 접속해 상호작용할 수 있도록 하고, 국대 의료산업 현장에 적합한 시나리오, 모션 인식 장갑 등의 개발을 통해 국내 의료현장을 가상현실에서 직졉 체험할 수 있는 MUVE 시뮬레이터 입니다.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection