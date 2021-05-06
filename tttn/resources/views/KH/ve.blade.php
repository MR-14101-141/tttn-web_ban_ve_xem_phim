@extends('layout_KH')
@section('layout_KH')
<div class="container-fluid">
    <h2 class="d-flex justify-content-center">THÔNG TIN VÉ:</h2>
    <form action="{{URL::to('/veTemplateCreate')}}" method="post" id="frmdatve">
        {{csrf_field()}}
        <label>Phim:</label>
        <div class="input-group input-group-lg">
            <input  class="form-control input-lg" type="text" name="tenPhim" value="{{$veTemp->tenPhim}}" readonly>
        </div>
        <br>

        <label>Suất chiếu:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="datetime" name="giochieu"
                value="{{Carbon\Carbon::parse($veTemp->giochieu)->format('d-m-Y H:i:s')}}" readonly>
        </div>
        <br>

        <label>Tên KH:</label>
        <div class="input-group input-group-lg">
            <input class="form-control input-lg" type="text" name="tenKH" value="{{$KH->tenKH}}" readonly>
        </div>
        <br>

        <label>Email:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="emailKH" value="{{$KH->emailKH}}" readonly>
        </div>
        <br>

        <label>SĐT:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="sdtKH" value="{{$KH->sdtKH}}" readonly>
        </div>
        <br>

        <label>Phòng:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="vitriphong" value="{{$veTemp->vitriphong}}" readonly>
        </div>
        <br>

        <label>Ghế:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="vitrighe" value="{{$veTemp->vitrighe}}" readonly>
        </div>
        <br>
        @if($KM==null)
        <label>Mã giảm giá:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="idKM" value="">
            <button style="color:black" type="submit" name="khuyenmai" value="khuyenmai" class="btn btn-warning">Nhập
                mã</button>
        </div>
        <br>
        <label>Tổng tiền:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="tongtien" value="75000" readonly>
            <span class="input-group-text">VNĐ</span>
        </div>
        <br>
        @else
        <label>Mã giảm giá:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="idKM" value="{{$KM->idKM}}" readonly>
        </div>
        <br>
        <label>Tổng tiền:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="tongtien" value="{{75000-(75000 * $KM->trigiaKM)}}" readonly>
            <span class="input-group-text">VNĐ</span>
        </div>
        <br><br>
        @endif

        <button id="btndatve" style="width:100%;color:black" type="submit" class="btn btn-warning btn-lg btn-block">Đặt vé</button>
    </form>
</div>
@endsection