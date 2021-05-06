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
                            @if(Session::has('idKH'))
                            <div class="movie__btns movie__btns--full">
                                <a href="{{URL::to('/dsLC',$phim->idPhim)}}" class="btn btn-md btn--warning">book a ticket for this movie</a>
                            </div>
                            @else
                            <div class="movie__btns movie__btns--full">
                            <a  class="btn btn-md btn--warning btn--book btn-control--home login-window">book a ticket for this movie</a>
                            </div>
                            @endif

                        
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <h2 class="page-heading">The plot</h2>

                    <p class="movie__describe">Bilbo Baggins is swept into a quest to reclaim the lost Dwarf Kingdom of Erebor from the fearsome dragon Smaug. Approached out of the blue by the wizard Gandalf the Grey, Bilbo finds himself joining a company of thirteen dwarves led by the legendary warrior, Thorin Oakenshield. Their journey will take them into the Wild; through treacherous lands swarming with Goblins and Orcs, deadly Wargs and Giant Spiders, Shapeshifters and Sorcerers. Although their goal lies to the East and the wastelands of the Lonely Mountain first they must escape the goblin tunnels, where Bilbo meets the creature that will change his life forever ... Gollum. Here, alone with Gollum, on the shores of an underground lake, the unassuming Bilbo Baggins not only discovers depths of guile and courage that surprise even him, he also gains possession of Gollum's "precious" ring that holds unexpected and useful qualities ... A simple, gold ring that is tied to the fate of all Middle-earth in ways Bilbo cannot begin to ... </p>
                    
                </div>
            </div>

        </section>
@endsection
