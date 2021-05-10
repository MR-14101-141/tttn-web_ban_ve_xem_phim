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
                    <td>Old Password</td>
                    <td>:</td>
                    <td><input type="password" name="old_password"></td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td>:</td>
                    <td><input type="password" name="new_password"></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>:</td>
                    <td><input type="password" name="confirm_password"></td>
                </tr>
                <input type="hidden" name="hidden_nvid" value="{{$nv_id}}">
            </table>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-5"></div>
        <div class="col-md-2 justify-content-center">
            <input type="submit" value="Update" name="update" class="btn btn-warning">
        </div>
        <div class="col-md-5"></div>
    </form>
</section>
@endsection