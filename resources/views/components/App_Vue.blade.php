@extends('layouts.app')

@section('content')

<!--ALERT-->
<div class="row mt-4 mb-4">
  
    <div class="col-12">

        <div class="alert alert-primary" role="alert">
            La página se encuentra en construcción, <span class="alert-link">la versión final sigue en desarrollo</span>
        </div>

    </div>

</div>


<!--CONTENT-->
<div class="row justify-content-around">

    <!--MAIN-->
    <div class="col-sm-12 col-lg-7">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>@{{$data}}</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>


    <!--ASIDE-->
    <div class="col-sm-12 col-lg-4">

        <!--TITLE-->
        <div class="row pb-3">
            <h2 class="col-12 display-5">Te puede interesar</h2>
        </div>

        <!--LISTGROUP-->
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item active">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        
    </div>

</div>

@endsection