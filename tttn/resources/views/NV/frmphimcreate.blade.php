@extends('layout_NV')
@section('dscuanv')
<div class="container-fluid">
    <h1>Tạo Phim</h1>
    <hr>
    <div class="card">
        <div class="card-body">
            <form action="{{ URL::to('phim/store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="tenPhim">Tên Phim</label>
                    <input type="text" class="form-control" id="ten_phim" name="tenPhim">
                </div>
                <div class="form-group">
                    <label for="imgPhim">Poster Phim</label>
                    <input type="file" class="form-control" name="imgPhim" accept="image/*"
                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                    <img id="output" width="100" height="150">
                </div>
                <div class="form-group">
                    <label for="trangthai">Trạng thái</label>
                    <select class="border border-black" name="trangthai">
                        <option value="1">Còn chiếu</option>
                        <option value="0">Hết chiếu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Loại Phim</label>
                    <select class="border border-black" name="LPhim">
                        @foreach(App\Models\tbl_loaiphim::all() as $LoaiPhim)
                        <option value="{{ $LoaiPhim->idLPhim }}">{{$LoaiPhim->tenLPhim}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                	<label>Tóm tắt</label>
                	<textarea class="form-control" name="mieutaPhim"></textarea>
                </div>
                <div class="form-group">
                	<label>Đạo diễn</label>
                	<input type="text" class="form-control" name="daodienPhim">
                </div>
                <div class="form-group">
                    <label>Diễn viên</label>
                    <input type="text" class="form-control" name="dienvien">
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
</div>
@endsection