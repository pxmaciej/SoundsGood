@extends('home')

@section('game')
@if( $wrong  < 3 )
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            
                    <div class="col-md-4">
                        <div class="row">
                            <audio autoplay id="song">
                                <source src="{!! $current_track->track->preview_url !!}" type="audio/mp3">
                            </audio>
                        </div>
                        <div class="row">
                         <h2>Punkty {{$points}}</h2>
                        <h2>Błędy {{$wrong}}</h2>
                   
                        </div>
                    </div>

                    <div class="col-md-8"><h3>Wykonwaca</h3>
                          
                            @foreach($tracks as $track)
                            <div class="row">

                            <a class="btn btn-outline-success btn-lg" href="/points/{{$track->track->id}}/{{$current_track->track->id}}/{{$points}}/{{$wrong}}"> {{ collect($track->track->artists)->implode('name') }}</a> 
                                
                            </div>
                             
                            @endforeach
                         
                    </div>

        </div>
    </div>
</main>
@endif 
@endsection


