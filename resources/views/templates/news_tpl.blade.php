@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="content-box content-box-page" style="margin-bottom: 30px;">
    <nav aria-label="breadcrumb" class="nav-breadcrumb">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
                </ol>
            </div>
        </div>
    </nav>
    <div class="list_news" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    @foreach($tintuc as $item)
                    <div class="box-item-news">
                        <div class="col-md-4 col-xs-12 left">
                            <a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title="{{$item->name}}" class="zoom"><img src="{{asset('upload/news/'.$item->photo)}}" ></a>
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <p class="name_news">
                                <a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}
                                </a>
                            </p>
                            <div class="short-des-news">
                                {{$item->mota}}
                            </div>
                            <p class="read-more"><a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title="">Chi tiết >></a></p>
                        </div>
                    </div>
                    @endforeach
                    <div class="pginations">
                        {!! $tintuc->links() !!}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection