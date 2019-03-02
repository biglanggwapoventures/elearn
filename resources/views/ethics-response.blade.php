@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-img-top" id="player"></div>
                <div class="card-body">
                    <h5 class="card-title">{{ $submittedResponse->user->name }}'s Anwers</h5>
                    <form action="{{ url('questionaire/ethics') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>
                                Based on the video that you have just watched, how do you define ethics?
                            </label>
                            <textarea class="form-control" rows="4" disabled >{{ $submittedResponse['response_content'][0] }}</textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>
                                Give at least three challenges that you observed in your life and propose a general solution
                            </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">1</span>
                                </div>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" disabled value="{{ $submittedResponse['response_content'][1][0] }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">2</span>
                                </div>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" disabled value="{{ $submittedResponse['response_content'][1][1] }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">3</span>
                                </div>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" disabled value="{{ $submittedResponse['response_content'][1][2] }}">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Solution</span>
                                </div>
                                <textarea class="form-control" aria-label="With textarea" rows="5" disabled>{{ $submittedResponse['response_content'][1][3] }}</textarea>
                            </div>  
                        </div>
                        <hr>
                        <a href="{{ url('questionaire/responses') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
