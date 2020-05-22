@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Zagraj teraz</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        </div>
                    @endif
                 
                    <a type="button" class="btn btn-success" href="/game/{{Auth::user()->id}}">GRAJ</a>
                  
                </div>
            </div>
        </div>
    </div>



    
</div>
@endsection
