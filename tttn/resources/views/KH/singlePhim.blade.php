@extends('layout_KH')
@section('layout_KH')
        <section class="container">
            <div class="col-sm-12">
                <div class="movie">
                    <h2 class="page-heading">{{$phim->tenPhim}}</h2>
                    
                    <div class="movie__info">
                        <div class="col-sm-8 col-md-4 movie-mobile">
                            <div class="movie__images">
                                <img style="width:450px; height:350px" src="data:image/png;base64,{{ chunk_split(base64_encode($phim->imgPhim)) }}">
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-8">

                            <p class="movie__option"><strong>Thể loại: </strong><a href="#">{{$phim->tenLPhim}}</p>
                            <p class="movie__option"><strong>Đạo diễn: </strong>{{$phim->daodienPhim}}</p>
                            <p class="movie__option"><strong>Diễn viên: </strong>{{$phim->dienvien}}</p>
                            @if(Session::has('idKH'))
                            <div class="movie__btns movie__btns--full">
                                <a href="{{URL::to('/dsLC',$phim->idPhim)}}" class="btn btn-md btn--warning">Đặt vé</a>
                            </div>
                            @else
                            <div class="movie__btns movie__btns--full">
                            <a  class="btn btn-md btn--warning btn--book btn-control--home login-window">Đặt vé</a>
                            </div>
                            @endif

                        
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    
                    <h2 class="page-heading">Tóm tắt</h2>

                    <p class="movie__describe">{{$phim->mieutaPhim}}</p>
                    
                </div>
            </div>

        </section>
@endsection
