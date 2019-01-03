@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $quangcao = DB::table('lienket')->where('com','quang-cao')->get();
?>
<div class="content-box content-box-page">
    <nav aria-label="breadcrumb" class="nav-breadcrumb">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Sản phẩm mẫu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$product_detail->name}}</li>
                </ol>
            </div>
        </div>
    </nav>
    <div class="list-category">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="album-image slider_product">
                        <div class="slider-for">
                            @if(count($album_hinh) > 0)
                            @foreach($album_hinh as $album)
                                <div class="item">
                                    <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="image" class="img-responsive"  draggable="false"/>
                                </div>
                            @endforeach
                            @else
                                <div class="item">
                                    <img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="image" class="img-responsive"  draggable="false"/>
                                </div>
                            @endif
                        </div>

                        <div class="slider-nav">
                            @if(count($album_hinh) > 0)
                                @foreach($album_hinh as $album)
                                <div class="item">
                                    <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="image" class="img-responsive"  draggable="false"/>
                                </div>
                            @endforeach
                            @else
                                <div class="item">
                                    <img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="image" class="img-responsive"  draggable="false"/>
                                </div>
                            @endif
                        </div>
                    </div>

                    <h1 class="name-product">{{$product_detail->name}}</h1>
                    <p class="code_product">Mã sản phẩm: {{$product_detail->code}}</p>
                    <p class="price_product">Giá: {{number_format($product_detail->price)}} vnđ</p>
                    @if($product_detail->price < $product_detail->price_old)
                    <p class="price_old">Giá cũ: {{number_format($product_detail->price_old)}} vnđ</p>
                    @endif
                    <div class="short-des-product">
                        {!! $product_detail->mota !!}
                    </div>
                    <div class="buy">
                        <form action="{{route('addProductToCart')}}" method="post" accept-charset="utf-8">
                            {{csrf_field()}}
                            <input type="hidden" name="product_id" value="{{$product_detail->id}}" placeholder="">
                            <span>Số lượng: <input type="number" name="product_numb" value="1" min="1" class="number_product"></span>
                            <button type="submit" class=" btn-order"><i class="fa fa-cart-plus"></i> Đặt mua</button>
                           
                        </form>

                    </div>
                    <div class="info-comment">
                        <div id="exTab1" class=""> 
                            <ul  class="nav nav-pills">
                                <li class="active">
                                <a  href="#1a" data-toggle="tab">Thông tin chi tiết</a>
                                </li>
                                <li><a href="#2a" data-toggle="tab">Bình luận</a>
                                </li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="1a">
                                    {!! $product_detail->content !!}
                                </div>
                                <div class="tab-pane" id="2a">
                                    <div class="fb-comments" data-href="{{URL::Current()}}" data-width="100%" data-numposts="2"></div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="list_category_product">
                        <p class="title_cate">
                            Dự án đã thực hiện
                        </p>
                        <ul class="">
                            <li><a href="">Vẽ tranh tường 3D</a></li>
                            <li><a href="">Vẽ tranh tường 3D Nghệ thuật</a></li>
                            <li><a href="">Vẽ tranh tường mầm non</a></li>
                            <li><a href="">Vẽ tranh tường quán trà sữa</a></li>
                            <li><a href="">Vẽ tranh tường phòng khách</a></li>
                            <li><a href="">Vẽ tranh tường phòng ngủ</a></li>
                            <li><a href="">Vẽ tranh tường quán cafe</a></li>
                            <li><a href="">Vẽ tranh tường quán karaoke</a></li>
                            <li><a href="">Vẽ tranh tường phòng em bé</a></li>
                        </ul>
                    </div>
                    <div class="list_category_product">
                        <p class="title_cate">
                            Sản phẩm mẫu
                        </p>
                        <ul class="">
                            <li><a href="">Vẽ tranh tường 3D</a></li>
                            <li><a href="">Vẽ tranh tường 3D Nghệ thuật</a></li>
                            <li><a href="">Vẽ tranh tường mầm non</a></li>
                            <li><a href="">Vẽ tranh tường quán trà sữa</a></li>
                            <li><a href="">Vẽ tranh tường phòng khách</a></li>
                            <li><a href="">Vẽ tranh tường phòng ngủ</a></li>
                            <li><a href="">Vẽ tranh tường quán cafe</a></li>
                            <li><a href="">Vẽ tranh tường quán karaoke</a></li>
                            <li><a href="">Vẽ tranh tường phòng em bé</a></li>
                        </ul>
                    </div>
                    <div class="list_category_product">
                        <p class="title_cate">
                            Tin nổi bật
                        </p>
                        <ul class="">
                            <li><a href="">Vẽ tranh tường 3D</a></li>
                            <li><a href="">Vẽ tranh tường 3D Nghệ thuật</a></li>
                            <li><a href="">Vẽ tranh tường mầm non</a></li>
                            <li><a href="">Vẽ tranh tường quán trà sữa</a></li>
                            <li><a href="">Vẽ tranh tường phòng khách</a></li>
                            <li><a href="">Vẽ tranh tường phòng ngủ</a></li>
                            <li><a href="">Vẽ tranh tường quán cafe</a></li>
                            <li><a href="">Vẽ tranh tường quán karaoke</a></li>
                            <li><a href="">Vẽ tranh tường phòng em bé</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
