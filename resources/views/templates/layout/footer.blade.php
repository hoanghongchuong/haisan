<?php
    $setting = Cache::get('setting');
    $categories = DB::table('product_categories')->where('status',1)->where('parent_id',0)->get();
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 left">
                <p><a href="" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo_footer)}}"></a></p>
                <p>Địa chỉ: {{$setting->address}}</p>
                <p>Email: {{$setting->email}}</p>
                <p>
                    <a href="{{$setting->facebook}}" title=""><i class="fa fa-facebook"></i></a>&nbsp;
                    <a href="{{$setting->twitter}}" title=""><i class="fa fa-twitter"></i></a>&nbsp;
                    <a href="{{$setting->google}}" title=""><i class="fa fa-google"></i></a>
                </p>
            </div>
            <div class="col-sm-4">
                <h4 class="title-home">Liên hệ</h4>
                <div class="box-form form-group">
                    <form action="{{route('postContact')}}" method="post" accept-charset="utf-8">
                        {{csrf_field()}}
                        <input type="text" name="name" value="" required="" class="form-control" placeholder="Họ tên">
                        <input type="text" name="phone" value="" required="" class="form-control" placeholder="Số điện thoại">
                        <input type="text" name="" value="" class="form-control" placeholder="Email">
                        <textarea name="content" required="" class="form-control" placeholder="Nội dung"></textarea>
                        <input type="button" name="" class="btn-send" value="Gửi" placeholder="">
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <h4 class="title-home">Fanpage</h4>
                <div class="page">
                    <div class="fb-page" data-href="{{$setting->facebook}}" data-tabs="timeline" data-width="350" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$setting->facebook}}" class="fb-xfbml-parse-ignore"><a href="{{$setting->facebook}}"></a></blockquote></div>
                </div>
            </div>
        </div>
    </div>
</footer>