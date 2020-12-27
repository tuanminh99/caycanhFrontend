@extends('layout.master')
@section('content')
@section('title')
    <title>Giỏ hàng</title>
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
                <a href="#">Giỏ hàng</a>
            </div>
            <div class="img-content">
                <img src="{{asset('bonsai/images/gioithieu.jpg')}}" class="img-fluid" alt="Responsive image">
            </div>

        </div>
        <div class="new">
            <div class="present">
                <i class="fab fa-pagelines">
                    <h5>Giỏ hàng</h5>
                </i>
                <img src="{{asset('bonsai/images/icon_section1.png')}}">
            </div>

        </div>
        <div class="container-fluid">
                <div class="col-md-12">
                    <table class="table table-light">
                        <thead>
                        <tr style="background-color: #6c757d66">
                            <th scope="col">#</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col">Xoá</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>Cây lưỡi hổ</td>
                            <td><img class="#"></td>
                            <td>100.000</td>
                            <td>1</td>
                            <td>100000</td>
                            <td>Xoá</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

        </div>
        <div class="total-price">
            Tổng cộng:
            <strong>
                <span>15.000</span>
            </strong>
        </div>
        <div class="button-payment">
            <button type="button" class="btn btn-warning"><a href="{{route('thanhtoan')}}">Thanh toán</a></button>
            <button type="button" class="btn btn-warning"><a href="{{route('sanpham')}}">Mua thêm sản phẩm</a></button>
        </div>
    </div>
</section>
<!-- End Section -->
@endsection
