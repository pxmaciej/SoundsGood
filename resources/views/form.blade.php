
@extends('home')


@section('game')
@if( $wrong  < 3 )
<main class="py-4">
    <div class="container-fluid">
        <div class="row justify-content-center">

                    <div class="col-md-4">
                       <div class="row pl-md-1">
                           <audio autoplay id="song">

                                <source src="{!! $current_track->track->preview_url !!}" type="audio/mp3">
                            </audio>
                           
                              <progress class="progress-bar" id="playtime" max="30" value="0"></progress>
                       </div>

                        <div class="row d-block">

                               <h2 class="text-success pt-md-4">Punkty {{$points}}</h2>


                              <h2 class="text-danger pt-md-2 pb-md-2">Błędy {{$wrong}}</h2>
                            @if($points == 0)
                            @else
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
                            @endif

                        </div>
                    </div>

                    <div class="col-md-8 float-right d-block"><h3>Wykonwaca</h3>

                            @foreach($tracks as $track)
                            <div class="row text-right p-1">

                            <a class="btn btn-outline-success btn-lg btn-block" href="/points/{{$track->track->id}}/{{$current_track->track->id}}/{{$points}}/{{$wrong}}/{{$temp}}"> {{ collect($track->track->artists)->implode('name') }} - {{ str_limit($track->track->name,20)}}</a>

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



