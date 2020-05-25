@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rozpocznij Gre</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
               
                    <a id="play" type="button" class="btn btn-success" href="/game/{{$points=0}}/{{$wrong = 0}}">GRAJ</a>
                     
                    @yield('game')
                    
                </div>
            </div>
        </div>
    </div>
</div>

 
    
</main>

@endsection




