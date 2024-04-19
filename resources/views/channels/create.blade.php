<!-- resources/views/channels/create.blade.php -->

@extends('layouts/admin')

@section('content')
    <div class="container">
        <h1>Create New Channel</h1>

        <form action="{{ route('channels.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="text" name="url" id="url" class="form-control" value="{{ old('url') }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Create Channel</button>
        </form>
    </div>
@endsection
