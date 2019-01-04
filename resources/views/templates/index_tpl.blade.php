@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
<div class="content-home" style="background: url('{{asset('public/images/bg.jpg')}}'); background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="about-home">
                <div class="col-md-6">
                    <h4 class="title-home">{{$about->name}}</h4>
                    <div class="short-des">
                        {!! $about->mota !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('upload/hinhanh/'.$about->photo)}}" style="width: 100%;">
                </div>
            </div>
            @foreach($categories_home as $k=>$cate)
            <div class="box-category-product">
            	@if($k%2 == 0)
                <div class="col-md-6">
                    <h4 class="title-home"><a href="{{url('san-pham/'.$cate->alias)}}" title="{{$cate->name}}">{{$cate->name}}</a></h4>
                    <div class="short-des">
                        {!! $cate->mota !!}
                    </div>
                </div>
                
                <div class="col-md-6">
                    <img src="{{asset('upload/product/'.$cate->photo)}}">
                </div>
                @else
                <div class="col-md-6">
                    <img src="{{asset('upload/product/'.$cate->photo)}}">
                </div>
                <div class="col-md-6">
                    <h4 class="title-home"><a href="{{url('san-pham/'.$cate->alias)}}" title="{{$cate->name}}">{{$cate->name}}</a></h4>
                    <div class="short-des">
                        {!! $cate->mota !!}
                    </div>
                </div>
                
                
                @endif
            </div>
			@endforeach
            
            

        </div>
    </div>
</div>
<div class="box-news-home">
    <div class="container">
        <div class="row">
            <h3 class="title-news-home"><a href="" title="">Tin tức</a></h3>
            @foreach($news as $item)
            <div class="col-md-6 col-xs-12 box_item_news">
                <div class="col-md-6">
                    <a href="{{url('tin-tuc/'.$item->alias.'.html')}}" title="{{$item->name}}"><img src="{{asset('upload/news/'.$item->photo)}}"></a>
                </div>
                <div class="col-md-6">
                    <h4 class="name-news-home"><a href="{{url('tin-tuc/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></h4>
                    <div class="shot-des-news">
                        {!! $item->mota !!}
                    </div>
                    <p class="read-more"><a href="{{url('tin-tuc/'.$item->alias.'.html')}}">Xem thêm >></a></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
