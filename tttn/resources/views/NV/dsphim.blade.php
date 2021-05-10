@extends('layout_NV')
@section('dscuanv')
<br>
<div class="container-fluid">   
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Ten Phim</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Trang thai</th>
                    <th scope="col">The Loai</th>
                    <th scope="col"><a href="{{ URL::to('phim/create') }}" class="btn btn-info" role="button">+ tao phim</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($phim as $key => $phim)
                <tr>
                    <th scope="row">{{$phim->idPhim}}</th>
                    <td>{{$phim->tenPhim}}</td>
                    <td><img src="data:image/png;base64,{{ chunk_split(base64_encode($phim->imgPhim)) }}" width="100"
                            height="150" alt="{{$phim->tenPhim}}"></td>
                    @if($phim->trangthai==1)
                    <td>Còn chiếu</td>
                    @else
                    <td>Hết chiếu</td>
                    @endif
                    <td>{{$phim->tbl_loaiphim->tenLPhim}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ URL::to('phim/' . $phim->idPhim . '/edit') }}">
                                <button type="button" class="btn btn-warning">Edit</button>
                            </a>&nbsp;
                            <form action="{{ URL::to('phim/' . $phim->idPhim . '/delete') }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-danger" value="Delete" />
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection