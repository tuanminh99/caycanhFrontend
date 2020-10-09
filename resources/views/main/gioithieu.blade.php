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
                        <h5 class="card-title"><a href='{{route("tintucchitiet",['id'=>$info->id])}}'>{{$info->titles}}</a></h5>
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
                    <a href="{{route('index')}}">
                        Trang chủ
                    </a>
                    >
                    <a href="#">Giới thiệu</a>
                </div>
                <div class="img-content">
                    <img src="{{asset('bonsai/images/gioithieu.jpg')}}" class="img-fluid" alt="Responsive image">
                </div>
                <div class="new">
                    <div class="present">
                        <i class="fab fa-pagelines">
                            <h5>Giới thiệu</h5>
                        </i>
                    </div>
                    <img src="{{asset('bonsai/images/icon_section1.png')}}">
                </div>
                <div class="content-gt">
                    @foreach($intros as $intro)
                    <p>
                        {!! $intro->contents !!}
                    </p>
                    @endforeach
                </div>
        </div>
    </div>
</section>
<!-- End Section -->
@endsection
