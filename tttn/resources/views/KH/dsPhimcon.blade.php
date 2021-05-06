<div class="cinema-wrap">
    <div class="row">
        @foreach($dsphim as $phim)
        <div class="col-xs-6 col-sm-3 cinema-item">
            <div class="cinema">
                <a href="{{URL::to('/singlePhim',$phim->idPhim)}}" class="movies__images HOVER">
                    <img alt='' src="data:image/png;base64,{{ chunk_split(base64_encode($phim->imgPhim)) }}"
                        class="img-fluid image" style="width:265px; height:350px">
                </a>
                <a href="{{URL::to('/singlePhim',$phim->idPhim)}}"
                    class="cinema-title page-heading">{{$phim->tenPhim}}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="pagination paginatioon--full">
    {{$dsphim->links('KH.paginationKH')}}
</div>