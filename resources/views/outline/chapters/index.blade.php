@extends('layouts.app')

@section('content')
  <h1 class="page-title">Chapters Timeline</h1>

  @fragment('chapter-list')
  <div class="chapter-list content">
    <div class="flex justify-between items-center mb-8">
      <h2 class="text-xl ml-2 font-bold">Chapters</h2>
    
      @if ($isHtmx)
        <a
          hx-get="{{ route('outline.chapters.create') }}"
          hx-target=".modal-content"
          hx-swap="innerHTML"
          class="btn"
        >
          Add a New Chapter
        </a>
      @else
        <a href="{{ route('outline.chapters.create') }}" class="btn inline-block">
          Add a New Chapter
        </a>
      @endif

    </div>

    @forelse ($chapters as $chapter)

      <div class="chapter" id="chapter-{{ $chapter->id }}">
        <div class="chapter-header">
          <h2>Chapter {{ $chapter->order }}</h2>
          <a 
            href="{{ route('outline.chapters.show', $chapter) }}" 
            class="chapter-title">
            {{ $chapter->title }}
          </a>
          {{-- <a 
            href="{{ route('outline.chapters.edit', $chapter) }}" 
            class="chapter-edit" 
            title="Edit Chapter">
            <span>&#9998;</span>
          </a> --}}
        </div>
        <div class="chapter-description">
          {{ Str::words($chapter->description, 10, '...') }}
        </div>
      </div>

    @empty
      <p class="empty">No chapters yet. Add your first one to get started!</p>
    @endforelse
  </div>
  @endfragment

  @fragment('modal-content')
  <div class="modal-content" id="modal" hx-swap-oob="true"></div>
  @endfragment
  
@endsection