@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Post</h1>

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

    <!-- Edit Form -->
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Specify PUT method for updating -->

        <!-- Title Input -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter post title"
                   value="{{ old('title', $post->title) }}" required>
        </div>

        <!-- Description Input -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="5"
                      placeholder="Enter post description"
                      required>{{ old('description', $post->description) }}</textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Update Post</button>

        <!-- Back Button -->
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
