@extends('layout_KH')
@section('layout_KH')
<section class="container">
    <h1 class="d-flex justify-content-center">Đăng ký</h1>

    <form action="{{url('postsignup')}}" method="post">
        @csrf
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input class="input100" type="email" name="email" placeholder="Địa chỉ email"></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td>:</td>
                    <td><input class="input100" type="password" name="password" placeholder="Mật khẩu"></td>
                </tr>
                <tr>
                    <td>Xác nhận lại mật khẩu</td>
                    <td>:</td>
                    <td><input class="input100" type="password" name="repass" placeholder="Nhập lại mật khẩu"></td>
                </tr>
                <tr>
                    <td>Tên khách hàng</td>
                    <td>:</td>
                    <td><input class="input100" type="text" name="tenKH" placeholder="Nhập tên của bạn..."></td>
                </tr>
                <tr>

                    <td>Giới tính</td>
                    <td>:</td>
                    <td>
                    <select name="gioitinh" class="input100 form-control input-lg m-bot15">
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td>:</td>
                    <td><input type="date" name="ngaysinh"></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td>:</td>
                    <td><input class="input100" type="text" name="sdtKH" placeholder="Nhập số điện thoại..."></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-5"></div>
        <div class="col-md-2 justify-content-center">
            <input type="submit" value="Đăng ký" name="update" class="btn btn-warning">
        </div>
        <div class="col-md-5"></div>
    </form>
</section>
@endsection