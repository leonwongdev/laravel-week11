@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                View all Coding Youtube Channels
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach ($channels as $channel)
            <div class="col-md-4  mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"> Channel name: {{ $channel->name }}</h5>
                        <a href="{{ route('channels.show', $channel->id) }}" class="card-link">Show Detail</a>
                        <a href="{{ route('channels.edit', $channel->id) }}" class="card-link">Edit</a>
                        <a href="{{ route('channels.trash', $channel->id) }}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
