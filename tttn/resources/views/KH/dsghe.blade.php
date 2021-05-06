@extends('layout_KH')
@section('layout_KH')
<section class="container">
    <section class="mananh">
        <div class="mananh__name">
            <hr />
            <h3>MÀN ẢNH</h3>
            <hr />
        </div>
    </section>
    <section class="ghengoi">

        <h3>Chọn ghế </h3>

        <div class="ghengoi__nor row ">

            @foreach($dsghe as $ghe)
                @if($dsve!='[]')

                    @foreach($dsve as $ve)
                        @if($ghe->idGhe==$ve->idGhe)
                            <a class="btn btn-danger btn__item" disabled>{{$ghe->vitrighe}}</a>
                        @else
                            <a class="border border-info btn btn-outline-info btn-block btn__item"
                            href="{{URL::to('/ve',[Session::get('idKH'),Session::get('idLC'),$ghe->idGhe,-1])}}">{{$ghe->vitrighe}}</a>
            
                        @endif
                    @endforeach
                @else
                <a class="border border-info btn btn-outline-info btn-block btn__item"
                href="{{URL::to('/ve',[Session::get('idKH'),Session::get('idLC'),$ghe->idGhe,-1])}}">{{$ghe->vitrighe}}</a>
                @endif
            @endforeach

        </div>
    </section>
</section>
@endsection