@extends('layout.master')
@section('content')
@section('title')
    <title>Thanh toán</title>
@endsection
<section class=" section-container">
    <div class="row row-section">
        <div class="l-content">
            <div class="null">
            </div>

        </div>
        <div class="r-content">
            <div class="little-a">
                <a href="{{route('index')}}">
                    Trang chủ
                </a>
                >
                <a href="#">Thanh toán</a>
            </div>
            <div class="img-content">
                <img src="{{asset('bonsai/images/gioithieu.jpg')}}" class="img-fluid" alt="Responsive image">
            </div>

        </div>
        <div class="new">
            <div class="present-pay">
                <i class="fab fa-pagelines">
                    <h5 style="margin-left: 20px">Thanh toán</h5>
                </i>
{{--                <img src="{{asset('bonsai/images/icon_section1.png')}}">--}}
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="">
                        <b style="font-family: sans-serif">THANH TOÁN VÀ GIAO HÀNG</b>
                    </div>
                    <div style="margin-top: 15px">
                        <b>Họ và tên *</b>
                    </div>
                    <div style="margin-top: 5px">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập họ tên của bạn">
                    </div>
                    <div style="margin-top: 15px">
                        <b>Địa chỉ *</b>
                    </div>
                    <div style="margin-top: 5px">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập địa chỉ của bạn">
                    </div>
                    <div style="margin-top: 15px">
                        <b>Số điện thoại *</b>
                    </div>
                    <div style="margin-top: 5px">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập SĐT của bạn">
                    </div>
                    <div style="margin-top: 15px">
                        <b>Email *</b>
                    </div>
                    <div style="margin-top: 5px">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập email của bạn">
                    </div>
                    <div style="margin-top: 15px">
                        <b style="font-family: sans-serif">THÔNG TIN BỔ SUNG</b>
                    </div>
                    <div class="form-group" style="margin-top: 5px">
                        <label for="exampleFormControlTextarea1">Ghi chú đơn hàng</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-5" style="border: 2px solid #1e7e34">
                    <div class="" style="padding: 18px 8px">
                        <b style="font-family: sans-serif">ĐƠN HÀNG CỦA BẠN</b>
                    </div>
{{--                    <div class="" style="font-size: 15px; margin-left: 7px; border-bottom: 2px solid #b2b4b691; padding-bottom: 10px">--}}
{{--                        <b>SẢN PHẨM</b>--}}
{{--                        <b style="margin-left: 280px">TẠM TÍNH</b>--}}
{{--                    </div>--}}
                    <table class="table table-payment">
                        <thead>
                        <tr>
                            <th scope="col">SẢN PHẨM</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col" style="margin-left: 50px">TẠM TÍNH</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Cây lưỡi hổ x 1</th>
                            <td></td>
                            <td></td>
                            <td>50.000đ</td>
                        </tr>
                        <tr>
                            <th scope="row">Tạm tính</th>
                            <td></td>
                            <td></td>
                            <td>50.000đ</td>
                        </tr>
                        <tr>
                            <th scope="row">Phí vận chuyển</th>
                            <td></td>
                            <td></td>
                            <td>20.000đ</td>
                        </tr>
                        <tr>
                            <th scope="row" style="color: red">Tổng</th>
                            <td></td>
                            <td></td>
                            <td style="color: red">70.000đ</td>
                        </tr>
                        <tr>
                            <th scope="row" style="color: #ff000c">* Trả tiền mặt khi nhận hàng</th>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <button style="margin-left: 15px" type="button" class="btn btn-warning"><a href="#"><b>ĐẶT HÀNG</b></a></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->
@endsection
