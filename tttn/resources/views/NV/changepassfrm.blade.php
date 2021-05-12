@extends('layout_NV')
@section('dscuanv')
{{$nv_id = Session::get('idNV')}}
<section class="container">
    <h1 class="d-flex justify-content-center">Đổi mật khẩu</h1>
    <form action="{{URL::to('/update-passwordadmin')}}" method="post">
        @csrf
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <td>Mật khẩu cũ</td>
                    <td>:</td>
                    <td><input type="password" name="old_password"></td>
                </tr>
                <tr>
                    <td>Mật khẩu mới</td>
                    <td>:</td>
                    <td><input type="password" name="new_password"></td>
                </tr>
                <tr>
                    <td>Xác nhận mật khẩu mới</td>
                    <td>:</td>
                    <td><input type="password" name="confirm_password"></td>
                </tr>
                <input type="hidden" name="hidden_nvid" value="{{$nv_id}}">
            </table>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-5"></div>
        <div class="col-md-2 justify-content-center">
            <input type="submit" value="Đổi mật khẩu" name="update" class="btn btn-warning">
        </div>
        <div class="col-md-5"></div>
    </form>
</section>
@endsection