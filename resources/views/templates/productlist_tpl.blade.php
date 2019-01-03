@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $cateProducts = Cache::get('cateProducts');
?>

<div class="content-home" style="background: url('{{asset('public/images/bg.jpg')}}'); background-size: cover;">
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</div>
<div class="box-category-list content-home">
    <div class="container">
        <div class="content-wraper">
            <div class="box-content-cate">
                <h1 class="title-category"><span>{{$product_cate->name}}</span></h1>
                <p class="under_line"><span><img src="{{asset('public/images/line.png')}}"></span></p>
                <div class="list-item-category">
                    @foreach($products as $item)
                    <div class="col-md-4 box">
                        <a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}"><img src="{{asset('upload/product/'.$item->photo)}}">
                            <p class="name_product">{{$item->name}}</p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
