@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Create a New Post</h1>

    <!-- Show Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Post Creation Form -->
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf <!-- CSRF Protection Token -->

        <!-- Title Input -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter post title"
                   value="{{ old('title') }}">
        </div>

        <!-- Description Input -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="5"
                      placeholder="Enter post description">{{ old('description') }}</textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection
