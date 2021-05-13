@extends('layout_NV')
@section('dscuanv')
<br>
<div class="container-fluid">   
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Mã khách hàng</th>
                    <th scope="col">Tên Khách Hàng</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Hành động</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach($dskh as $key => $dskh)
                <tr>
                    <th scope="row">{{$dskh->idKH}}</th>
                    <td>{{$dskh->tenKH}}</td>
                    <td>{{$dskh->gioitinhKH}}</td>
                    <td>{{$dskh->ngaysinh}}</td>
                    <td>{{$dskh->sdtKH}}</td>
                    <td>
                  
                   <a href="{{URL::to('/profilekh/'.$dskh->idKH)}}" class="btn btn-primary">
                   SỬA</a>
                    </td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection