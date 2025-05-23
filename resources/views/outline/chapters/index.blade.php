@extends('layouts.app')

@section('content')
  <h1 class="page-title">Chapters Timeline</h1>

  <div class="chapter-list content">
    @forelse ($chapters as $chapter)

      <div class="chapter" id="chapter-{{ $chapter->id }}">
        <div class="chapter-header">
          <a 
            href="{{ route('outline.chapters.show', $chapter) }}" 
            class="chapter-title">
            {{ $chapter->title }}
          </a>
          <a 
            href="{{ route('outline.chapters.edit', $chapter) }}" 
            class="chapter-edit" 
            title="Edit Chapter">
            <span>&#9998;</span>
          </a>
        </div>
        <div class="chapter-description">
          {{ Str::words($chapter->description, 10, '...') }}
        </div>
      </div>

    @empty
      <p class="empty-state">No chapters yet. Add your first one to get started!</p>
    @endforelse
  </div>
@endsection