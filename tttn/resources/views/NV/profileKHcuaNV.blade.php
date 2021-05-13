@extends('layout_NV')
@section('dscuanv')
@foreach($cusprofile as $key => $cusprofile)
<section class="container">
<br>
    <h1 class="d-flex justify-content-center">THÔNG TIN CHI TIẾT KHÁCH HÀNG</h1>
    <hr>

    <div class="card">
        <div class="card-body">
    <form action="{{URL::to('/suakh/'.$cusprofile->idKH)}}" method="post">
        @csrf
        <div>
            <table class="table d-flex justify-content-center">
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$cusprofile->emailKH}}</td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td>:</td>
                    <td><a href="{{URL::to('/frmdoimatkhauKH/'.$cusprofile->idKH)}}">Đổi mật khẩu</a></td>
                </tr>
                <tr>
                    <td>Tên</td>
                    <td>:</td>
                    <td><input type="text" name="name" value="{{$cusprofile->tenKH}}" id=""></td>
                </tr>
                <tr>

                    <td>Giới tính</td>
                    <td>:</td>
                    <?php
                if($cusprofile->gioitinhKH == 'Nam'){
              ?>
                    <td>
                        <div class="form-group m-b-25 wrap-input100 validate-input">

                            <select name="gioitinhKH" class="input100 form-control input-lg m-bot15">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>
                        <?php
								}else{
							?>
                    </td>
                    <td>
                        <select name="gioitinhKH" class="input100 form-control input-lg m-bot15">
                            <option value="Nữ">Nữ</option>
                            <option value="Nam">Nam</option>
                            <?php            
								}
							?>
                    </td>
                </tr>

                <tr>
                    <td>Ngày sinh</td>
                    <td>:</td>
                    <td><input type="date" name="ngaysinh" value="{{$cusprofile->ngaysinh}}"></td>
                </tr>

            </table>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" value="Sửa" name="update" class="btn btn-warning">
        </div>
        <div class="col-md-5"></div>
    </form>
    </div>
    </div>
</section>
@endforeach
@endsection