@extends('layout_KH')
@section('layout_KH')
<section class="container">
    <h2 class="d-flex justify-content-center">LỊCH CHIẾU:</h2>
    <div class="time-select">
        @foreach($dsNC as $NC)
        <div class="time-select__group">
            <div class="col-sm-4">
                <p class="time-select__place">{{$NC}}:</p>
            </div>
            <ul class="col-sm-8 items-wrap">
                @foreach($dsLC as $LC)
                @if(Carbon\Carbon::parse($LC->giochieu)->format('d/m/Y')==$NC)
                <a style="color:black" href="{{URL::to('/dsghe',[$LC->idPhong,$LC->idLC])}}" class="time-select__item">
                    {{Carbon\Carbon::parse($LC->giochieu)->format('H:i')}}</a>
                @endif
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
</section>
@endsection