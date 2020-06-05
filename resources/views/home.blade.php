@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card text-center">
                <div class="card-header bg-success text-white"><h5>{{__('text.start')}} <svg class="bi bi-music-player" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                    <path fill-rule="evenodd" d="M11 3H5v3h6V3zM5 2a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H5zm3 11a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <circle cx="8" cy="11" r="1"/>
                  </svg></h5></div>

                <div class="card-body bg-dark">
                   
               
                <a id="play" type="button" class="btn start border-3 border-success" href="/game/{{$points=0}}/{{$wrong = 0}}/{{$temp = 0}}">{{__('text.button')}}<span class="first">{{__('text.button1')}}</span></a>
                     
                    @yield('game')
                    <div class="container text-white">
                        <div class="row justify-content-center">
                            <div class="card-body">
                                    <h1 class="display-4">{{__('text.display4')}}</h1>
                                        <p class="lead card-text">{{__('text.goal')}}</p>
                                        <p class="lead card-text">{{__('text.gameflowt')}}</p> 
                                        <p class="lead card-text">{{__('text.gameflow')}}</p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
 
    
</main>

@endsection




