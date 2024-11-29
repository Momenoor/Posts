@extends('layouts.app')
@section('content')
    <a href="{{ route('posts.index') }}" class="btn btn-secondary mb-3">Back to Posts</a>

    <!-- Post Details -->
    <div class="card">
        <div class="card-header">
            <h1>{{ $post->title }}</h1>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $post->description }}</p>
        </div>
        <div class="card-footer text-muted">
            <p>Created on: {{ $post->created_at->format('d M, Y') }}</p>
        </div>
    </div>
@endsection
