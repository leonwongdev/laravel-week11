@extends('layouts/admin')

@section('content')
    <div class="container">
        <h1>Edit Channel</h1>

        <form action="{{ route('channels.update', $channel->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ old('name', $channel->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="text" name="url" id="url" class="form-control"
                    value="{{ old('url', $channel->url) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Channel</button>
        </form>
    </div>
@endsection
