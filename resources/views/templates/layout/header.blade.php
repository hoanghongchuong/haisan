<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    $categories = DB::table('product_categories')->where('com', 'san-pham')->where('status',1)->where('parent_id', 0)->get();
?>
<div id="google_translate_element"></div>
<header id="header" class="header hidden-xs" style="">
    <div class="container">
        <div class="row">
            <div class="top-header">
                <div class="pull-right" style="padding-right: 50px;">
                    
                </div>
            </div>
                          
        </div>
    </div>
    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}"></a>
                </div>
                <div class="col-md-7">
                    <ul class="ul_menu">
                        <li><a href="{{url('')}}">Trang chủ</a></li>
                        <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                        @if(count($categories) > 0)
                        @foreach($categories as $category)

                        <li class="submenux">
                            <a href="{{url('san-pham/'.$category->alias)}}">{{$category->name}}</a>
                            <?php $cateChilds = DB::table('product_categories')->where('parent_id', $category->id)->where('status',1)->get(); ?>
                            @if(count($cateChilds) > 0)                                
                                <ul class="dropdown-menu dropmenux">
                                    @foreach($cateChilds as $child)
                                    <li><a href="{{url('san-pham/'.$child->alias)}}">{{$child->name}}</a></li>
                                    @endforeach
                                </ul>                                
                            @endif
                        </li>
                        @endforeach
                        @endif
                        
                        <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>
                       
                    </ul>
                </div>
                <div class="col-md-3 box-search">
                    <div class="search-text" id="search_text">
                        <form action="{{route('search')}}" method="get" accept-charset="utf-8">
                            <div class="form-group">
                                <input type="text" placeholder="Từ khóa tìm kiếm" class="input-search text" name="txtSearch">
                                <input type="submit" class="btn-search" id="search_btn" name="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <img src="{{asset('public/images/tomca.png')}}" style="width: 100%;">
                </div>
            </div>
        </div>
    </div> 
    
</header><!-- /header -->
<div class="header-mobile visible-xs">
    <div class="menu">
        <div class="img-logo-mobile col-xs-12">
            <img src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="">

            <!-- <div class="col-xs-6 col-sm-6"><span><i class="fa fa-phone">&nbsp;0987654321</i></span></div> -->
        </div>
       
        <div class="box-search box-search-mobile">
            <div class="search-text col-xs-12" id="search_text">
                <form action="" method="get" accept-charset="utf-8">
                    <div class="form-group">
                        <input type="text" placeholder="Từ khóa tìm kiếm" class="input-search form-control text" name="">
                        <input type="submit" class="btn-search" id="search_btn" name="">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <div class="vk-header__search">
        <div class="container">
            <!-- <div class="col-xs-8">
                <div id="google_translate_element"></div>
            </div> -->
            <a href="#menuMobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
        </div>
    </div>
    <nav class="vk-header__menu-mobile">
        <ul class="vk-menu__mobile collapse" id="menuMobile">
            <li><a href="{{url('')}}">Trang chủ</a></li>
            <li>
                <a href="{{url('gioi-thieu')}}">Giới thiệu</a>
                
            </li>
            <li>
                <a href="#">Hải sản tươi sống</a>
                <a href="#menu1" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>                    
                    <ul class="collapse" id="menu1">                                                
                        <li>
                            <a href="">Hải sản 1</a>
                        </li>
                        <li>
                            <a href="">Hải sản 2</a>
                        </li>
                        <li>
                            <a href="">Hải sản 3</a>
                        </li>
                    </ul>
                   
            </li>
            <li><a href="#">Đồ khô</a></li>
            <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>
            
        </ul>
    </nav>
    
</div>