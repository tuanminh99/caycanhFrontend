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
                      <div class="card-body">
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
                    <a href="lienhe.html">Liên hệ</a>
                </div>
            <div class="img-content-sp">
                    <img src="{{asset('bonsai/images/gioithieu.jpg')}}" class="img-fluid-sp" alt="Responsive image">
            </div>
                <div class="new">
                    <div class="present">
                        <i class="fab fa-pagelines">
                            <h5>Liên hệ</h5>
                        </i>
                    </div>
                    <img src="{{asset('bonsai/images/icon_section1.png')}}">
                </div>
                <div class="row">
                    <div class="contact-form col-lg-6">
                        <p>Mọi ý kiến đóng góp xin vui lòng điền vào Form dưới đây và gửi cho
                        chúng tôi. Xin chân thành cảm ơn!</p>
                        <form action="{{route('lienhes')}}" method="POST">
                            @csrf
                            <label for="name">Họ tên</label>
                            <input type="text" name="name"> <br>
                            <label for="mail">Email</label>
                            <input type="mail" name="mail"> <br>
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address"> <br>
                            <label for="phone">Điện thoại</label>
                            <input type="text" name="phone"> <br>
                            <label for="title">Tiêu đề </label>
                            <input type="text" name="title"> <br>
                            <label for="content">Nội dung</label>
                            <input type="text" name="contents"> <br>
                            <input type="submit" value="Gửi">
                            <input type="reset" value="Nhập lại">
                        </form>
                    </div>
                    <div class="contact-infor-company ">
                        <img src="{{asset('bonsai/images/logo.png')}}" alt="">
                        <h5>NHÀ VƯỜN VÂN THỦY</h5>
                        <p>Địa chỉ: {{getConfigValue('Địa chỉ')}} <br>
                            Hotine: {{getConfigValue('Hotline_footer')}} <br>
                            Email: {{getConfigValue('Email')}} <br>
                        Website: {{getConfigValue('Website')}}</p>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection
