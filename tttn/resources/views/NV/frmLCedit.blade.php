@extends('layout_NV')
@section('dscuanv')
<div class="container-fluid">
    <h1>Edit Phim</h1>
    <hr>
    <div class="card">
        <div class="card-body">
            <form action="{{ URL::to('lichchieu/' . $lichchieu->idLC . '/update') }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

                <div class="form-group">
                    <label>Phim</label>
                    <select class="border border-black" name="idPhim">
                        @foreach(App\Models\tbl_phim::all() as $Phim)
                        @if($Phim->idPhim==$lichchieu->idPhim)
                        <option value="{{ $Phim->idPhim }}" selected>{{$Phim->tenPhim}}</option>
                        @else
                        <option value="{{ $Phim->idPhim }}">{{$Phim->tenPhim}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Phòng</label>
                    <select class="border border-black" name="idPhong">
                        @foreach(DB::table('tbl_phong')->get() as $Phong)
                        @if($Phong->idPhong==$lichchieu->idPhong)
                        <option value="{{ $Phong->idPhong }}" selected>{{$Phong->vitriphong}}</option>
                        @else
                        <option value="{{ $Phong->idPhong }}">{{$Phong->vitriphong}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Giờ chiếu</label>
                    <input type="datetime-local" class="form-control" id="giochieu_" name="giochieu">
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
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection