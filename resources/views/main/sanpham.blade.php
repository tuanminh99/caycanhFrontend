@extends('layout.master')
@section('content')
    <section class=" section-container">
        <div class="row row-section">
            <div class="l-content">
                <div class="null">
                </div>
                <div class="newfeed">
                    <h3>TIN NỔI BẬT</h3>
                    <ul>
                        @foreach($hotInfos as $info)
                            <li>
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="http://localhost:8001{{$info->images}}" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card- body card1">
                                            <a href="{{route('tintucchitiet',['id'=>$info->id])}}">
                                                <h5 class="card-title">{{$info->titles}}</h5>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="far fa-clock">{{$info->created_at->format('d-m-Y')}}</i>
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="r-content">
                <div class="little-a">
                    <a href="{{ route('index') }}">
                        Trang chủ
                    </a>
                    >
                    <a href="{{ route('sanpham') }}">Sản phẩm</a>
                </div>
                <div class="img-content-sp">
                    <img src="{{asset('bonsai/images/gioithieu.jpg')}}" class="img-fluid-sp" alt="Responsive image">
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
{{--                        @php--}}
{{--                            function catchuoi_tuybien($string,$sochu)--}}
{{--                            {--}}
{{--                                $stringall = '';--}}
{{--                                $cut=explode(" ",trim($string));--}}

{{--                                for($i=0; $i<=$sochu; $i++)--}}
{{--                                {--}}
{{--                                    $stringall = $stringall.$cut[$i].' ';--}}
{{--                                }--}}

{{--                                return $stringall;--}}
{{--                            }--}}
{{--                        @endphp--}}
                        @foreach($products as $product)
                        <div class="col col-list">
                            <div class="card">
                                <img src="http://localhost:8001{{$product->feature_image_path}}" class="card-img-top" alt="...">
                                <div class="show-infor">
{{--                                    <span>@php--}}
{{--                                            $sokytu = explode(" ", $product->description);--}}
{{--                                            $socancat = 25;--}}
{{--                                        @endphp--}}
{{--                                        @if(count($sokytu) <= $socancat)--}}
{{--                                            {!! $product->description !!}--}}
{{--                                        @else--}}
{{--                                            {!!catchuoi_tuybien($product->description,$socancat)!!}...--}}
{{--                                        @endif</span>--}}
                                    <span>{!!Str::limit($product->description,150)!!}</span>
                                    <br>
                                    <button type="button" class="btn btn-light">Chi tiết</button>
                                    <button type="button" class="btn btn-light">Mua ngay</button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ Str::limit($product->name, 20) }}</h5>
                                    <p class="card-text"><small class="text-muted">{{number_format($product->price)}}đ</small></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
