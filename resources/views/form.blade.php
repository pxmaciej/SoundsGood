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
                        <progress class="progress is-info" id="playtime" max="30" value="0"></progress>
                       </div>
                            
                        <div class="row">
                          
                               <h2>Punkty {{$points}}</h2> 
                          
                           
                              <h2>Błędy {{$wrong}}</h2>  
                            
                            
                            @if($answer == false)
                                <div class="alert alert-danger" role="alert">
                                    ŹLE!
                                </div>
                            @endif
                            @if($answer == true)
                                <div class="alert alert-success" role="alert">
                                   DOBRZE!
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-8"><h3>Wykonwaca</h3>
                          
                            @foreach($tracks as $track)
                            <div class="row">

                            <a class="btn btn-outline-success btn-lg" href="/points/{{$track->track->id}}/{{$current_track->track->id}}/{{$points}}/{{$wrong}}/{{$temp}}"> {{ collect($track->track->artists)->implode('name') }} - {{$track->track->name}}</a> 
                                
                            </div>
                             
                            @endforeach
                         
                    </div>

        </div>
    </div>
</main>
@endif 

@endsection
@section('script')
<script>
    setInterval(function() {
    
       elapsedTime = document.getElementById('song').currentTime;
       document.getElementById('playtime').value = elapsedTime;
   },10); 
</script>
@endsection


