@extends('layouts.app')

@section('content')
<!-- Page Title -->
<section class="page-title text-center" style="background-image: url(images/wrappers/1.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="title">
                <h2>User's Manual</h2>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li class="text-center mr-2"><i class="fas fa-angle-right"></i></li>
                <li>User's Manual</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<section class="py-5">
    <div class="container pt-5">
        <div class="row">

            <@forelse ($news as $newsItem)


                <!-- Card -->
                <div class="col-md-6 col-sm-12 shadow border-rad-5 py-4 px-4 mt-2 m5">

                    <div class="docu-details pb-2">

                        <div class="row">
                            <div class="col-md-6">
                                <h4>News</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="add_news.php"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="row mt15">
                            <div class="col-md-6">
                                <h5>{{$main_notice[0]->title}}</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <p>{{$main_notice[0]->updated_at}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-justify">
                                <p class="pt10">{{$main_notice[0]->content}}</p>
                            </div>
                        </div>

                    </div>

                    <input type="hidden" value="{{ $notice->id }}" id="newsId">
                    <input type="hidden" value="{{ $notice->exposure }}" id="newsStatus">

                </div>
                <!-- Card -->

                @empty
                @endforelse

        </div>
</section>

@endsection