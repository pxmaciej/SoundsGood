@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Rozpocznij grę</div>

                <div class="card-body text-center">


                <a id="play" type="button" class="btn btn-success btn-hover color-8 align-center" href="/game/{{$points=0}}/{{$wrong = 0}}/{{$temp = 0}}">GRAJ</a>

                    @yield('game')

                </div>
            </div>
        </div>
    </div>
</div>



</main>

@endsection




