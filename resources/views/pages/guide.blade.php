@extends('layouts.app')

@section('content')
<section class="pt100 pb100">
    <div class="row">

        <div class="col-lg-2">
            @include('includes.sidenav-info')
        </div>

        <div class="col-lg-10">

            <section class="img-sec-top text-center comp-height-120 py44 pl0 pr0" style="background-color: #E1E3F7;">
                <div class="pl30">
                    <div class="content-box">
                        <div class="title">
                            <h2 class="text-center ttl-4 mb0" style="font-family: pretendard-bold; font-size: 26px; color: #212880;">NURSENSE 다운로드받기 <img src="/images/arrow_right2.png" class="ttl-icon"></h2>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container cont-width-1396">
                <div class="row pt-4 ml--86">
                    <div class="col-lg-12 pl-0 py-5">
                        <h4 class="ttl-5 relative-block title-border-t ml--14">이용안내</h4>
                    </div>
                    <div class="col-lg-1 pl-0 pr-0"></div>
                    <div class="col-lg-3 pl-0 pr-0">
                        <div class="guide-round">
                            <div class="comp-height-320 align-item-middle-center">
                                <div class="px-2">
                                    <div class="item-flex-center">
                                        <span class="ttl-6">01</span>
                                    </div>
                                    <div class="pt10 item-flex-center">
                                        <p class="ttl-7-2 comp-width-234 text-center">화면 상단에 있는 NURSENSE 다운로드 받기를 실행하세요.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 relative-block">
                        <div class="guide-i">
                            <img src="/images/playarrow.png" alt="steps">
                        </div>
                    </div>
                    <div class="col-lg-3 pl-0 pr-0">
                        <div class="guide-round">
                            <div class="comp-height-320 align-item-middle-center">
                                <div class="px-2">
                                    <div class="item-flex-center">
                                        <span class="ttl-6">02</span>
                                    </div>
                                    <div class="pt10 item-flex-center">
                                        <p class="ttl-7-2 comp-width-234 text-center">다운받은 프로그램 실행 후 ID 및 PW 입력하여 로그인하세요.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 relative-block">
                        <div class="guide-i">
                            <img src="/images/playarrow.png" alt="steps">
                        </div>
                    </div>
                    <div class="col-lg-3 pl-0 pr-0">
                        <div class="guide-round">
                            <div class="comp-height-320 align-item-middle-center">
                                <div class="px-2 mt--26">
                                    <div class="item-flex-center">
                                        <span class="ttl-6">03</span>
                                    </div>
                                    <div class="pt10 item-flex-center">
                                        <p class="ttl-7-2 comp-width-234 text-center">수강생 본인의 차시에 맞게 학습하기 클릭하면 끝!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container cont-width-1396 pt-5">
                <div class="row ml--86 pt-5">

                    <div class="col-lg-12 pl-0 py-5">
                        <h4 class="ttl-5 relative-block title-border-t ml--14">NURSENSE 조작 가이드</h4>
                    </div>

                    <div class="col-lg-6 item-flex-center">
                        <div class="ml--110">
                            <img src="/images/guide.png" width="654" alt="Guide">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="txt-box-1 position-rel">

                            <div class="mb-3">
                                <span class="ttl-8-2 guide-2-pad1 relative-block dot-1">WASD</span>
                                <span class="br-right-3"></span>
                                <span class="ttl-8-2">이동하기</span>
                            </div>

                            <div class="mb-3">
                                <span class="ttl-8-2 guide-2-pad2 relative-block dot-1">마우스 우클릭 (누른상태)</span>
                                <span class="br-right-4"></span>
                                <span class="ttl-8-2" style="margin-left: 15px;">카메라 회전</span>
                            </div>

                            <div class="mb-3">
                                <span class="ttl-8-2 guide-2-pad3 relative-block dot-1">마우스 좌클릭</span>
                                <span class="br-right-5"></span>
                                <span class="ttl-8-2">상호작용</span>
                            </div>

                            <div class="mb-3">
                                <span class="ttl-8-2 guide-2-pad4 relative-block dot-1">L-Shift</span>
                                <span class="br-right-6"></span>
                                <span class="ttl-8-2">빠르게 걷기</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="container cont-width-1396 pt-5">
                <div class="row ml--86 pt-5">

                    <div class="col-lg-12 pl-0 py-5">
                        <h4 class="ttl-9 relative-block title-border-t-clr1 ml--14">주의사항</h4>
                    </div>

                    <div class="col-lg-12 pl-0">
                        <div class="ttl-10 guide-list">
                            <div class="align-item-top-start ml--14 pb-20">
                                <div class="guide-list-li">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <p class="ml-3">반드시 하나의 챕터가 끝나고 종료를 누르시기 바랍니다.<br>종료 버튼을 누르지 않고 화면을 이탈할 경우, 처음부터 다시 시작해야할 수 있습니다.</p>
                            </div>
                            <div class="align-item-top-start ml--14">
                                <div class="guide-list-li">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <p class="ml-3">온라인 사전학습 완료 후에 해당 학습을 진행하기 바랍니다.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
</section>
<script>
    var element = document.getElementById("curriculum2");
    element.classList.add("dropdown-menu-item");
</script>
@endsection