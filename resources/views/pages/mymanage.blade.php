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
                                <h2 class="text-left text-white">수강생 관리</h2>
                            </div>
                        </div>
                    </div>
                    

                </section>                
                <div class="row" style="font-size: 10px; text-align: center;">
                    <div class="col-lg-12">
                        
                        <div class="row">
                            <div class="col-lg-2" style="padding: 20px; color: #FFFFFF;">
                                <select class="form-control mr-sm-2 search-bar-custom">
                                    @foreach ($semesters as $semester)
                                    <option value="{{ $semester->id }}">{{ $semester->semester }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-2" style="padding: 20px; color: #FFFFFF;">
                                <select class="form-control mr-sm-2 search-bar-custom">
                                    @foreach ($university->departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-2" style="padding: 20px; color: #FFFFFF;">
                                <select class="form-control mr-sm-2 search-bar-custom">
                                    <option>전체</option>
                                    <option>전체</option>
                                    <option>전체</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-2" style="padding: 20px; color: #FFFFFF;">
                                <select class="form-control mr-sm-2 search-bar-custom">
                                    <option>이름 순</option>
                                    <option>이름 순</option>
                                    <option>이름 순</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5">

                    <div class="col-md-8">
                        Total : {{ count($students) }}
                    </div>
                    <div class="col-md-4">
                        <form class="form-inline justify-content-end mx-3 my-2 my-lg-0">
                            <input class="form-control mr-sm-2 search-bar-custom" type="search" placeholder="검색어를 입력하세요." aria-label="Search">
                            <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit">검색</button>
                        </form>
                    </div>

                </div>

                <div class="row" style="font-size: 14px;">
                    <div class="col-lg-12 border-rad-5 mt-2 px-4">
                        <table style="width: 100%;">
                            <tr style="background-image: linear-gradient(to right, #F5F7FE , #F5F7FE); border-bottom: #ccc solid thin; border-top: #ccc solid thin;">
                                <th style="width: 5%; padding: 10px;"><input type="checkbox" ></th>
                                <th style="width: 6%; padding: 10px;">번호</th>
                                <th style="width: 8%; padding: 10px;">이름</th>
                                <th style="width: 6%; padding: 10px;">성별</th>
                                <th style="width: 9%; padding: 10px;">학과</th>
                                <th style="width: 16%">학년/학번</th>
                                <th style="width: 12%">사전 학습 평가</th>
                                <th style="width: 10%">본 학습 평가</th>
                                <th style="width: 10%">리포트</th>
                                <th style="width: 10%">총점(100점)</th>
                                <th style="width: 8%">수료 여부</th>
                            </tr>
                            @foreach ($students as $student)
                            <tr style="border-bottom: #ccc solid thin;">
                                <td style="width: 5%; padding: 10px;"><input type="checkbox" ></td>
                                <td style="width: 6%; padding: 10px;">{{ $student->id }}</td>
                                <td style="width: 8%; padding: 10px;">{{ $student->name }}</td>
                                <td style="width: 6%; padding: 10px;">{{ $student->gender }}</td>
                                <td style="width: 9%; padding: 10px;">{{ $student->department }}</td>
                                <td style="width: 16%; padding: 10px;">{{ $student->grade }}</td>
                                <td style="width: 12%; padding: 10px;">{{ $student->std_id }}</td>
                                <td style="width: 10%; padding: 10px;">{{ $student->id }}</td>
                                <td style="width: 10%; padding: 10px;">{{ $student->id }}/10점</td>
                                <td style="width: 10%; padding: 10px;color: #3941A2;"><b>{{ $student->id }}점</b></td>
                                <td style="width: 8%; padding: 10px;color: #3941A2;"><b>{{ $student->id }}</b></td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="11" style="padding: 20px;">
                                    <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #F3F4F8;color: #9495A1;">메일 발송</button>
                                    <button class="btn btn-outline-secondary btn-sm btn-search my-2 my-sm-0" type="submit" style="background-color: #F3F4F8;color: #9495A1;">SMS 발송</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="pagination-container">
                    {{ $students->links('vendor.pagination.default') }}
                </div>
        </div>
    </div>
    </div>
</section>
@endsection