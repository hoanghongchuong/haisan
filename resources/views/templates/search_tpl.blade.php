@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $cateProducts = Cache::get('cateProducts');
?>

<div class="content-box content-box-page">
    <nav aria-label="breadcrumb" class="nav-breadcrumb">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item">Tìm kiếm</li>
                    <li class="breadcrumb-item active" aria-current="page">{{$search}}</li>
                </ol>
            </div>
        </div>
    </nav>
    <div class="list-category">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    
                    <div class="list-item">
                        @foreach($data as $item)
                        <div class="col-md-4 _item">
                            @if($item->com == 'san-pham-mau')
                            <div class="box-item_cate">
                                <a href="{{url('san-pham-mau/'.$item->alias.'.html')}}" title="{{$item->name}}" class="zoom"><img src="{{asset('upload/product/'.$item->photo)}}"></a>
                                <div class="name_cate"><a href="{{url('san-pham-mau/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></div>
                            </div>
                            @elseif($item->com == 'san-pham')
                            <div class="box-item_cate">
                                <a href="{{url('da-thi-cong/'.$item->alias.'.html')}}" title="{{$item->name}}" class="zoom"><img src="{{asset('upload/product/'.$item->photo)}}"></a>
                                <div class="name_cate"><a href="{{url('da-thi-cong/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></div>
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                @include('templates.sidebar_right');
            </div>
        </div>
    </div>
</div>


@endsection
