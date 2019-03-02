@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-img-top" id="player"></div>
                <div class="card-body">
                    <h5 class="card-title">Guide Questions</h5>
                    @if($errors->all())
                        <div class="alert alert-danger">
                            <p class="mb-0">Please answer all of the questions!</p>
                        </div>
                    @endif
                    <form action="{{ url('questionaire/work') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>
                                How does your work help you in developing you as a person?
                            </label>
                            <textarea class="form-control" rows="4" name="response[0]">{{ old('response.0') }}</textarea>
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
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="response[1][0]" value="{{ old('response.1.0') }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">2</span>
                                </div>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="response[1][1]" value="{{ old('response.1.1') }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">3</span>
                                </div>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="response[1][2]" value="{{ old('response.1.2') }}">
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
                                        <textarea class="form-control" aria-label="With textarea" rows="5" name="response[2][0]">{{ old('response.2.0') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center">
                                    <div class="custom-file">
                                        <label for="exampleFormControlFile1">Upload picture</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="response[3]">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Outcome</span>
                                        </div>
                                        <textarea class="form-control" aria-label="With textarea" name="response[2][1]"  rows="5">{{ old('response.2.2') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Submit answers</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
  // 2. This code loads the IFrame Player API code asynchronously.
  var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        // height: "100%",
        width: "100%",
      videoId: 'xzYFJGWtziw',
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }

  // 4. The API will call this function when the video player is ready.
  function onPlayerReady(event) {
    // event.target.playVideo();
  }

  // 5. The API calls this function when the player's state changes.
  //    The function indicates that when playing a video (state=1),
  //    the player should play for six seconds and then stop.
  var done = false;
  function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.ENDED) {
      console.log('lol')
    }
  }
  function stopVideo() {
    player.stopVideo();
  }
</script>
@endpush