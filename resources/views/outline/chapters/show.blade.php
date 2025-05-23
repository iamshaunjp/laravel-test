@extends('layouts.app')

@section('content')

  <div class="chapter-details content">
    <h1 class="chapter-title">{{ $chapter->title }}</h1>
    <div class="chapter-description">
      {{ $chapter->description }}
    </div>
    <div class="chapter-meta">
      <span class="chapter-updated">
        Last edited: {{ $chapter->updated_at->format('F j, Y \a\t g:i a') }}
      </span>
    </div>
    <div class="chapter-actions">
      <a href="{{ route('outline.chapters.index') }}" class="btn">
        Go back to full chapter timeline
      </a>
    </div>
  </div>

@endsection
