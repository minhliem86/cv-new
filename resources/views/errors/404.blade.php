@extends("Web::layouts.default")

@section('content')
    <!-- START: PAGE CONTENT -->
    <div class="page-404">
        <h2>4<span>0</span>4</h2>
        <p>Ooops! This page doesn't even exist</p>
        <a class="btn btn-lg btn-border" href="{!! url('/') !!}">Go To The Homepage ?</a>
    </div>
    <!-- END: PAGE CONTENT -->
@stop