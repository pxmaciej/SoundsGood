@extends('home')

@section('game')
@if( $update  =='play')
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            
                    <div class="col-md-5">
            
                        <audio autoplay id="song">
                            <source src="{!! $track->track->preview_url !!}" type="audio/mp3">
                        </audio>
                
                    </div>

                    <div class="col-md-2">nazywa sie:
                            
                            @foreach($tracks as $track)
                            <div class="row">
                                <button class="btn btn-success"  name="answer"  type="submit" value="{{ $track->track->id }}" href="{{}}">
                                    {{ $track->track->name}}
                                </button>
                            </div>

                            @endforeach
                         
                    </div>

        </div>
    </div>
</main>
@endif 
@endsection
 

