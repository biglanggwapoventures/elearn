√@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $submittedResponse->user->name }}'s Anwers</h5>
                    <form action="{{ url('questionaire/work') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>
                                How does your work help you in developing you as a person?
                            </label>
                            <textarea class="form-control" rows="4" name="response[0]" disabled>{{ $submittedResponse['response_content'][0] }}</textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>
                                Give 3 factors that cause bad working environment
                            </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">1</span>
                                </div>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="response[1][0]" disabled value="{{ $submittedResponse['response_content'][1][0] }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">2</span>
                                </div>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="response[1][1]" value="{{ $submittedResponse['response_content'][1][1] }}" disabled>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">3</span>
                                </div>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="response[1][2]" value="{{ $submittedResponse['response_content'][1][2] }}" disabled>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>
                                <strong class="d-block text-info">Be honest!</strong>
                                As a teacher, state a positive side of you, and your plan to become an effective and efficient worker?
                            </label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Bad side to conquer</span>
                                        </div>
                                        <textarea class="form-control" aria-label="With textarea" rows="5" name="response[2][0]" disabled>{{ $submittedResponse['response_content'][2][0] }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center">
                                    <img class="img-fluid" src="{{ asset("storage/{$submittedResponse['response_content'][3]}/") }}" alt="">
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Outcome</span>
                                        </div>
                                        <textarea class="form-control" aria-label="With textarea" name="response[2][2]"  rows="5" disabled>{{ $submittedResponse['response_content'][2][1] }}</textarea>
                                    </div>
                                </div>
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