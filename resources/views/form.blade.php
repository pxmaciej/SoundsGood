
@extends('home')


@section('game')
@if( $wrong  < 3 )
<div class="game">
<div class="row">
    <div class="col-md-6">
        <audio autoplay id="song"
                    src="{!! $current_track->track->preview_url !!}" type="audio/mp3">   
        </audio>
                           
                <progress class="progress-bar mb-2" id="playtime" max="30" value="0">
                </progress>

                <h4 class="card-title bg-success text-white rounded">{{__('text.points')}} {{$points}}</h4>
 
                <h4 class="card-subtitle bg-danger text-white rounded">{{__('text.life')}} {{$wrong}}</h4>   

    </div>
              
    <div class="col-md-6">
      <h4 class="card-title text-success">{{__('text.author')}} </h4>               
            @foreach($tracks as $track)
                <div class="row justify-content-center">
                    <a class="btn btn-outline-success btn-lg mt-1" href="/points/{{$track->track->id}}/{{$current_track->track->id}}/{{$points}}/{{$wrong}}"> {{ str_limit(collect($track->track->artists)->implode('name'),10) }} - {{ str_limit($track->track->name,20)}}</a> 
                </div>
                             
             @endforeach  
    </div>   
</div>
</div>
@endif 
@endsection

@section('script')
<script>
    setInterval(function() {
    
       elapsedTime = document.getElementById('song').currentTime;
       document.getElementById('playtime').value = elapsedTime;
       var song = document.getElementById("song");
        song.volume = 100;
   },10); 
</script>
@endsection



