@extends('layout.master2')
@section('content')
@section('title')
    <title>Sản phẩm chi tiết</title>
@endsection
<section class="section-product">
    <div class="link">
        <a href="{{route('index')}}"> Trang chủ </a> > <a href="{{route('sanpham')}}"> Sản phẩm </a> >
        <a href="#">{{$product->name}}</a>
    </div>
    <div class="row infor-product ">
        <div class=" img-product">
            <div class="f-img-product">
                <img style="height: 485px; width: 486px;" src="http://localhost:8001{{$product->feature_image_path}}" alt="..." class=" img-content img-main">
            </div>
            <div class="row nth-img">
                @php
                  $imgDetails = $product->imageDetails;
                @endphp
                @foreach($imgDetails as $img)
                    <img style="width: 120px; height: 97px;" src="http://localhost:8001{{$img->image_path}}" alt="..." class="col-3 img-thumbnail img-detail">
                @endforeach
            </div>
        </div>
        <div class="content-product">
            <div class="name-product">
                <h3>{{$product->name}}</h3>

                <ul>
                    <li><b>Mã sản phẩm:</b> TM{{$product->id}}</li>
                    <li><b>Tình trạng:</b>
                    @if($product->stock > 0)
                        Còn hàng
                        @else
                        Hết hàng
                    @endif
                    </li>
                </ul>
            </div>
            <div class="cost">
                <div class="cost-product">
                    <p>Giá bán:</p>
                    <h4>{{number_format($product->price,0)}}<u>đ</u></h4>
                </div>
                <div class="total">
{{--                    <p>Số lượng:</p>--}}
                    <form class="form-inline">
{{--                        <div class="form-group mx-sm-3 mb-2">--}}
{{--                            <input type="number" class="form-control" id="click" >--}}
{{--                        </div>--}}
                      <a href="{{route('lienhe')}}" type="submit" class="btn btn-success mb-2">
                          <i class="fas fa-shopping-cart">  Đặt hàng</i>
                      </a>
                    </form>
                </div>
            </div>
            <div class="content-pr">
                <h5>MÔ TẢ NGẮN</h5>
                <p>{!! $product->description !!}</p>
            </div>
            <dir class="tags">
                <p>
                    <b>Tags:</b>
                    @php
                        $tags = $product->tags;
                    @endphp
                    @foreach($tags as $tag)
                        <a href="#">{{$tag->name}}</a>
                    @endforeach
                </p>
                <button type="button" class="btn btn-primary"><i class="far fa-thumbs-up">   Thích 251 </i></button>
                <button type="button" class="btn btn-primary"> Chia sẻ </button>
                <button type="button" class="btn btn-info"><i class="fab fa-twitter">   Tweet</i></button>
                <button type="button" class="btn btn-danger"><i class="fab fa-ravelry">   Save</i></button>
                <button type="button" class="btn btn-outline-secondary"><i class="fab fa-google-plus-g"></i></button>
            </dir>
        </div>
    </div>
    <div class="row">
        <div class="background-tab">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Đánh giá</a>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                {!! $product->content !!}
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            </div>
        </div>
    </div>

    <div class="new">
        <div class="present">
            <i class="fab fa-pagelines">
                <h5>Sản phẩm</h5>
            </i>
        </div>
        <img src="{{asset('bonsai/images/icon_section1.png')}}">
    </div>

    <div class=" product-list1">
        <div class="row list1">
            @foreach($productRelated as $product)
            <div class="col col-list">
                <div class="card">
                    <img src="http://localhost:8001{{$product->feature_image_path}}" class="card-img-top" alt="...">
                    <div class="show-infor show-infor1">
                        <span>{!! Str::limit($product->description,300) !!}</span>
                        <br>
                        <a href='{{route("sanphamchitiet",['id'=>$product->id])}}' class="btn btn-light" onclick="san_pham_chi_tiet()">Chi tiết</a>

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$product->name}}</h5>
                      <p class="card-text"><small class="text-muted">{{number_format($product->price)}}đ</small></p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<script>
    $('.img-detail').on('click', function (){
        $img = $(this);

        $('.img-main').attr('src', $img.attr('src'))

    })
</script>
@endsection
