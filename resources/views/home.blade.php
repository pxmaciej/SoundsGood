@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
               
                    <a type="button" class="btn btn-success" href="/game/{{Auth::user()->id}}">GRAJ</a>
                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('game')
<div class="container">
    <div class="row justify-content-center">
        
                <div class="col-md-5">jak sie nazwa wykonawca
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
@endsection



