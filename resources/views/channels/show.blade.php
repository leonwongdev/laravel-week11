@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Coding Youtube Channel
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4  mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Channel Name {{ $channel->name }}</h5>
                    <p class="card-text">Youtube Url: <a href={{ $channel->url }}>{{ $channel->url }}</a></p>
                    <a href="{{ route('channels.edit', $channel->id) }}" class="card-link">Edit</a>
                    <a href="{{ route('channels.trash', $channel->id) }}" class="card-link">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
