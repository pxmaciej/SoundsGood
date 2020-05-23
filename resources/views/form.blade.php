@extends('home')

@section('game')
@if( $update  =='play')
<main class="py-4">
<div class="container">
    <div class="row justify-content-center">
        
                <div class="col-md-5">
         
                    <audio autoplay id="song">
                        <source src="{!! $track->preview_url !!}" type="audio/mp3">
                    </audio>
              
                </div>

                <div class="col-md-2">nazywa sie:
                    <div class="row">
                        <div class="col">jurek
                        </div>
                        <div class="col">marek
                        </div>
                        <div class="col">barek
                        </div>
                    </div>   
                </div>

    </div>
</div>
</main>
@endif 
@endsection
 

