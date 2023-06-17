@extends('layouts.admin')

@section('dashboardContent')
<div class="container-fluid border-b1 px-0">
    <div class="page-title-top">
        <div class="rounded">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="text-center mb-0">설문 통계</h5>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="mb-28">
        <ol class="breadcrumb">
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/surveyStatDash') }}">통계 관리</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text1">
                <a href="{{ url('admin/surveyStatDash') }}">설문 통계</a>
            </li>
            <li class="breadcrumb-item breadcrumb-text2 active" aria-current="page">'학습 1' 통계</li>
        </ol>
    </nav>
</div>

<!-- Statistics Survey Management Start -->
<div class="container-fluid px-0">

    <div class="table-responsive pt-4 mb-3">

        <div class="mt-3 mb-4">
            <h4 class="ttl-acc-blue position-rel title-border-t">기본 정보</h4>
        </div>
        <table class="table align-middle table-hover mb-4">
            <tbody class="text-center">

                <tr class="table-head-2">
                    <td scope="row" class="table-td-text1 bg-td width-10 height-40">학교</td>
                    <td colspan="5" class="table-td-text2 width-40">
                        <div class="height-40 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                대구대학교
                            </label>
                        </div>
                    </td>
                    <td scope="row" class="table-td-text1 bg-td width-10 height-40">학과</td>
                    <td colspan="4" class="table-td-text2 width-40">
                        <div class="height-40 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                간호학과
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="table-td-text1 bg-td width-10 height-40">학습명</td>
                    <td colspan="5" class="table-td-text2 width-40">
                        <div class="height-40 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                당뇨
                            </label>
                        </div>
                    </td>
                    <td scope="row" class="table-td-text1 bg-td width-10 height-40">세부 학습명</td>
                    <td colspan="4" class="table-td-text2 width-40">
                        <div class="height-40 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                학습 1
                            </label>
                        </div>
                    </td>
                </tr>
                <tr class="table-head-3">
                    <td scope="row" class="table-td-text1 bg-td width-10 height-40">교수명</td>
                    <td colspan="5" class="table-td-text2 width-40">
                        <div class="height-40 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                김행신
                            </label>
                        </div>
                    </td>
                    <td scope="row" class="table-td-text1 bg-td width-10 height-40">참여 수</td>
                    <td colspan="4" class="table-td-text2 width-40">
                        <div class="height-40 item-flex-align-start ps-4 pe-5">
                            <label class="lbl-y2 py-0 my-0 pe-5">
                                600명
                            </label>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="table-responsive pt-4 mb-3">

        <div class="mt-3 mb-4">
            <h4 class="ttl-acc-blue position-rel title-border-t">통계</h4>
        </div>
        <!-- 1 -->
        <table class="table align-middle table-hover mb-5">
            <tbody class="text-center">

                <tr class="table-head-2">
                    <td colspan="10" class="table-td-text1 bg-td height-30 text-left">1. 학습에 만족하십니까?</td>
                </tr>
                <tr>
                    <td>
                        <!-- Identify where the chart should be drawn. -->
                        <div id="chart_div1"></div>
                    </td>
                </tr>

            </tbody>
        </table>
        <!-- 2 -->
        <table class="table align-middle table-hover mb-5">
            <tbody class="text-center">

                <tr class="table-head-2">
                    <td colspan="10" class="table-td-text1 bg-td height-30 text-left">2. 학습에 만족하십니까?</td>
                </tr>
                <tr>
                    <td>
                        <!-- Identify where the chart should be drawn. -->
                        <div id="chart_div2"></div>
                    </td>
                </tr>

            </tbody>
        </table>
        <!-- 3 -->
        <table class="table align-middle table-hover mb-5">
            <tbody class="text-center">

                <tr class="table-head-2">
                    <td colspan="10" class="table-td-text1 bg-td height-30 text-left">3. 학습에 만족하십니까?</td>
                </tr>
                <tr>
                    <td>
                        <!-- Identify where the chart should be drawn. -->
                        <div id="chart_div3"></div>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>

    <div class="table-responsive pt-4 mb-3">

        <div class="mt-3 mb-4">
            <h4 class="ttl-acc-blue position-rel title-border-t">불편 사항</h4>
        </div>
        <table class="table align-middle table-hover">
            <thead class="thead-light text-center">
                <tr class="table-head-1">
                    <th scope="col" class="table-th-text">번호</th>
                    <th scope="col" class="table-th-text">내용</th>
                    <th scope="col" class="table-th-text">등록일</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>70</td>
                    <td class="text-left">
                        <a href="#complaintsModal" class="td-a-custom px-4" data-bs-toggle="modal">
                            가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 가지에 만물은 수 앞이 가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 가지에 만물은 수 앞이
                        </a>
                    </td>
                    <td>2023.01.31</td>
                </tr>
                <tr>
                    <td>69</td>
                    <td class="text-left">
                        <a href="#complaintsModal" class="td-a-custom px-4" data-bs-toggle="modal">
                            가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다.
                        </a>
                    </td>
                    <td>2023.01.31</td>
                </tr>
                <tr>
                    <td>68</td>
                    <td class="text-left">
                        <a href="#complaintsModal" class="td-a-custom px-4" data-bs-toggle="modal">
                            가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 가지에 만물은 수 앞이
                        </a>
                    </td>
                    <td>2023.01.31</td>
                </tr>
                <tr>
                    <td>67</td>
                    <td class="text-left">
                        <a href="#complaintsModal" class="td-a-custom px-4" data-bs-toggle="modal">
                            가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 가지에 만물은 수 앞이
                        </a>
                    </td>
                    <td>2023.01.31</td>
                </tr>
                <tr>
                    <td>66</td>
                    <td class="text-left">
                        <a href="#complaintsModal" class="td-a-custom px-4" data-bs-toggle="modal">
                            가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 가지에 만물은 수 앞이
                        </a>
                    </td>
                    <td>2023.01.31</td>
                </tr>
            </tbody>
        </table>

    </div>

    <div class="item-flex-end mb-5">
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

<!-- Complaints Modal Start -->
<div class="modal fade" id="complaintsModal" aria-hidden="true" aria-labelledby="complaintsModalContent" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center my-3" id="complaintsModalContent"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <div class="table-responsive pt-4 mb-3">
                    <table class="table align-middle table-hover">
                        <tbody class="text-center">

                            <tr class="table-head-2">
                                <td scope="row" class="table-td-text1 bg-td height-52">등록일</td>
                                <td colspan="8" class="table-td-text2">
                                    <div class="height-52 item-flex-align-start ps-4 pe-5">
                                        <label class="lbl-y2 py-0 my-0 pe-5">
                                            2023.01.31
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-head-3">
                                <td scope="row" class="table-td-text1 bg-td">내용</td>
                                <td colspan="8" class="table-td-text2">
                                    <div class="item-flex-align-start ps-4 my-2">
                                        <label class="lbl-y2 py-0 my-0 pe-5">
                                            따뜻한 풀밭에 커다란 살 노래하며 남는 위하여서, 뼈 말이다. 위하여, 그들의 가지에 이 남는 가슴에 굳세게 쓸쓸하랴? 같이, 대중을 낙원을 얼음이 공자는 심장의 철환하였는가? 황금시대의 청춘이 우리는 철환하였는가? 인생에 두기 장식하는 그와 구할 곳이 창공에 듣는다. 행복스럽고 별과 찾아다녀도, 동력은 생생하며, 얼마나 것이다. 전인 노래하며 있는 있으랴? 청춘 간에 가장 구하지 돋고, 같은 꽃이 그들을 칼이다. 행복스럽고 같으며, 보내는 피고 이상의 이상 새 쓸쓸하랴?<br><br>
                                            그들은 위하여 불어 무엇을 찾아 뭇 일월과 이상은 아니더면, 봄바람이다. 실로 무엇을 얼마나 자신과 못하다 말이다. 지혜는 위하여, 희망의 보는 칼이다. 꽃이 가진 되는 살았으며, 설레는 하는 노년에게서 만물은 이것이다. 피가 곳으로 밝은 스며들어 붙잡아 천지는 이성은 피는 뜨고, 약동하다. 청춘을 그것을 않는 없는 들어 희망의 위하여 용기가 이것이다. 창공에 보는 피고, 싶이 주는 주며, 커다란 속에 듣는다. 속에서 원질이 품었기 사막이다. 살 그들은 수 못할 많이 만물은 말이다. 것은 뼈 이상을 황금시대를 고동을 산야에 있으랴?<br><br>
                                            일월과 그들은 바로 힘있다. 그들의 얼마나 같은 끓는 같지 두손을 품으며, 사막이다. 따뜻한 충분히 목숨을 피가 위하여, 아름다우냐? 얼음과 따뜻한 풀밭에 가지에 열락의 트고, 가진 뜨거운지라, 것이다. 곳으로 그들은 풀이 가장 몸이 끓는 아니더면, 교향악이다. 천고에 붙잡아 할지라도 피에 것이다. 있음으로써 찬미를 사랑의 인도하겠다는 날카로우나 기쁘며, 황금시대다. 이상, 할지니, 얼마나 안고, 쓸쓸하랴? 예가 작고 같이, 방지하는 어디 것이다. 동산에는 피부가 속에 얼마나 위하여 대중을 사랑의 있으랴? 무한한 못하다 물방아 자신과 부패뿐이다.
                                        </label>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Complaints Modal End -->


</div>
<!-- Statistics Survey Management End -->

@endsection