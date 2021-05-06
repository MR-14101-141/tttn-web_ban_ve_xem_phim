@extends('layout_KH')
@section('layout_KH')
<section class="container-fluid">
    <div class="col-sm-12">
        <h2 class="page-heading">Phim</h2>

        <div>
            <form method='get' style="background-color:white">
                <label for="select_item">Loại Phim : </label>
                <select id="select_item" name="select_item" class="search__sort" tabindex="0">
                    <option value="{{URL::to('/dsphim','all')}}">All</option>
                    @foreach($dsLphim as $Lphim)
                    <option value="{{URL::to('/dsphim',$Lphim->idLPhim)}}">{{$Lphim->tenLPhim}}</option>
                    @endforeach
                </select>
            </form>
        </div>

        <div class="changepage">
        @include('KH.dsPhimcon')
        </div>
        
    </div>
</section>
@endsection