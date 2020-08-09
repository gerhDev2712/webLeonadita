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
    <main-component class="col-sm-12 col-lg-7"></main-component>


    <!--ASIDE-->
    <aside-component class="col-sm-12 col-lg-4"></aside-component>

</div>

@endsection