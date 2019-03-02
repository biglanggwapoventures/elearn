@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <table class="table">
                <thead>
                    <tr class="bg-info text-white">
                        <th>Name</th>
                        <th>Ethics</th>
                        <th>Work</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($responses as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            @php $ethics = $user->submittedResponses->where('set_type', 'ethics')->first(); @endphp
                            @php $work = $user->submittedResponses->where('set_type', 'work')->first(); @endphp
                            <td>
                                @if($ethics)
                                    <a href="{{ url("questionaire/responses/ethics/{$ethics->id}") }}" class="btn btn-info btn-sm">View</a>
                                @else
                                    Not submitted
                                @endif
                            </td>
                            <td>
                                @if($work)
                                    <a href="{{ url("questionaire/responses/work/{$work->id}") }}" class="btn btn-info btn-sm">View</a>
                                @else
                                    Not submitted
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
