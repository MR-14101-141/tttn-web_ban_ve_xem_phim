@extends('layout_NV')
@section('dscuanv')
<div class="container-fluid">
    <h1>Tao lich chieu</h1>
    <hr>
    <div class="card">
        <div class="card-body">
            <form action="{{ URL::to('lichchieu/store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label>Phim</label>
                    <select class="border border-black" name="idPhim">
                        @foreach(App\Models\tbl_phim::all() as $Phim)
                        <option value="{{ $Phim->idPhim }}">{{$Phim->tenPhim}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Phong</label>
                    <select class="border border-black" name="idPhong">
                        @foreach(DB::table('tbl_phong')->get() as $Phong)
                        <option value="{{ $Phong->idPhong }}">{{$Phong->vitriphong}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Gio chieu</label>
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
                <button type="submit" class="btn btn-primary">Tao</button>
            </form>
        </div>
    </div>
</div>
@endsection