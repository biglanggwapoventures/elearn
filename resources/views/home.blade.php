@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="jumbotron text-center">
                <h1 class="display-4">Welcome to eLearn</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg  {{ $workResponse ? 'disabled' : '' }}" href="{{ url('questionaire/work') }}" role="button">Take the Work Test</a>
                <a class="btn btn-secondary btn-lg {{ $ethicsResponse ? 'disabled' : '' }}" href="{{ url('questionaire/ethics') }}" role="button" >Take the Ethics Test</a>
            </div>
        </div>
    </div>
</div>
@endsection
