@extends('layout_NV')
@section('dscuanv')
@foreach($nvprofile as $key => $nvprofile)
<section class="container">
    <h1 class="d-flex justify-content-center">THÔNG TIN NHÂN VIÊN</h1>
    <hr>

    <div class="card">
        <div class="card-body">
    <form action="{{URL::to('/update-nv/'.$nvprofile->idNV)}}" method="post">
        @csrf
        
        <div>
            <table class="table d-flex justify-content-center">
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$nvprofile->emailNV}}</td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td>:</td>
                    <td><a href="{{URL::to('/change-passwordadmin')}}">Đổi mật khẩu</a></td>
                </tr>
                <tr>
                    <td>Tên</td>
                    <td>:</td>
                    <td><input type="text" name="name" value="{{$nvprofile->tenNV}}" id=""></td>
                </tr>
                <tr>

                    <td>Giới tính</td>
                    <td>:</td>
                    <?php
                if($nvprofile->gioitinhNV == 'Nam'){
              ?>
                    <td>
                        <div class="form-group m-b-25 wrap-input100 validate-input">

                            <select name="gioitinhNV" class="input100 form-control input-lg m-bot15">
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
                    <td><input type="date" name="ngaysinh" value="{{$nvprofile->ngaysinhNV}}"></td>
                </tr>

            </table>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" value="Sửa" name="update" class="btn btn-warning">
        </div>
    </form>
</section>
@endforeach
@endsection