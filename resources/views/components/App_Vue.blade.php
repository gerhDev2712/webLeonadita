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
    <!--
    <div class="col-sm-12 col-lg-7">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>@{{$data}}</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
        <br><br>        
    </div>--> 
    <main-component></main-component>


    <!--ASIDE-->
    <aside-component></aside-component>

</div>

@endsection