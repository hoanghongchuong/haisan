@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    
?>
<div class="breadcrumbx">
    <div class="container">
        <div class="row">
            <ul class="col-md-12">
                <li><a href="{{url('')}}" class="home">Trang chủ ></a></li>
                <li><a href="{{url('san-pham/'.$cateProduct->alias)}}" class="cate">{{$cateProduct->name}} ></a></li>
                <li><a href="javascript:;" class="name_detailx">{{$product_detail->name}}</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="box-content-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-detail">
                <div class="album-image">
                    <div class="slider-for">                        
                        @if(count($album_hinh) > 0)
                        @foreach($album_hinh as $album)
                            <div class="item">
                                <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="image" class=""  draggable="false"/>
                            </div>
                        @endforeach
                        @else
                            <div class="item">
                                <img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="image" class=""  draggable="false"/>
                            </div>
                        @endif                        
                    </div>
                    <div class="slider-nav">
                        @if(count($album_hinh) > 0)
                        @foreach($album_hinh as $album)
                            <div class="item">
                                <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="image" class=""  draggable="false"/>
                            </div>
                        @endforeach
                        @else
                            <div class="item">
                                <img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="image" class=""  draggable="false"/>
                            </div>
                        @endif                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="product_name">{{$product_detail->name}}</h1>
                <div class="short-des-product">
                    {!! $product_detail->mota !!}
                </div>
                <div class="dathang"><a href="{{url('lien-he')}}" title="">Liên hệ đặt hàng</a></div>
            </div>
        </div>
        <div class="row">
            <h4 class="detail_contentx"><span>Mô tả chi tiết</span></h4>
            <div class="content_detail_product">
                {!! $product_detail->content !!}
            </div>
        </div>
    </div>
</div>



@endsection
