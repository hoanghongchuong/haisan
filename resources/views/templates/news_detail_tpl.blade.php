@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>

<div class="content-box content-box-page">
    <nav aria-label="breadcrumb" class="nav-breadcrumb">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{url('tin-tuc')}}">Tin tức</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$news_detail->name}}</li>
                </ol>
            </div>
        </div>
    </nav>
    <div class="box-detail-news">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <h1 class="name_news_detail">{{$news_detail->name}}</h1>
                    <div class="content_detail">
                        {!! $news_detail->content !!}
                    </div>
                    <div class="comment-facebook">
                        <div class="fb-comments" data-href="{{URL::Current()}}" data-width="100%" data-numposts="2"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


@endsection

