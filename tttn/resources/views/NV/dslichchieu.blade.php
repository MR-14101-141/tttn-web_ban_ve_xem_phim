@extends('layout_NV')
@section('dscuanv')
<br>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Mã</th>
                        <th scope="col">Phim</th>
                        <th scope="col">Phong</th>
                        <th scope="col">Gio chieu</th>
                        <th scope="col"><a href="{{ URL::to('lichchieu/create') }}" class="btn btn-info" role="button">+ thêm lịch chiếu
                        </a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lichchieu as $key=> $lichchieu)
                    <tr>
                        <th scope="row">{{$lichchieu->idLC}}</th>
                        <td>{{$lichchieu->idPhim}}</td>
                        <td>{{$lichchieu->idPhong}}</td>
                        <td>{{$lichchieu->giochieu}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ URL::to('lichchieu/' . $lichchieu->idLC . '/edit') }}">
                                    <button type="button" class="btn btn-warning">Sửa</button>
                                </a>&nbsp;
                                <form action="{{ URL::to('lichchieu/' . $lichchieu->idLC . '/delete') }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-danger" value="Xoá" />
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