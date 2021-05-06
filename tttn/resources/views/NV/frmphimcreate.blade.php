@extends('layout_NV')
@section('dscuanv')
<div class="container-fluid">
    <h1>Tao Phim</h1>
    <hr>
    <div class="card">
        <div class="card-body">
            <form action="{{ URL::to('phim/store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="tenPhim">Ten Phim</label>
                    <input type="text" class="form-control" id="ten_phim" name="tenPhim">
                </div>
                <div class="form-group">
                    <label for="imgPhim">Poster Phim</label>
                    <input type="file" class="form-control" name="imgPhim" accept="image/*"
                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                    <img id="output" width="100" height="150">
                </div>
                <div class="form-group">
                    <label for="trangthai">Trang thai</label>
                    <select class="border border-black" name="trangthai">
                        <option value="1">Còn chiếu</option>
                        <option value="0">Hết chiếu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Loai Phim</label>
                    <select class="border border-black" name="LPhim">
                        @foreach(App\Models\tbl_loaiphim::all() as $LoaiPhim)
                        <option value="{{ $LoaiPhim->idLPhim }}">{{$LoaiPhim->tenLPhim}}</option>
                        @endforeach
                    </select>
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
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection