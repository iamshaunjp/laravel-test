@extends('layouts.app')

@section('content')
  <h1 class="page-title">Codex</h1>

  <div class="codex-list content">
    <a href="{{ route('outline.codex.create') }}" class="btn inline-block mb-4">
      Add a New Codex Entry
    </a>

    @php
      $types = ['character', 'item', 'location'];
    @endphp

    @foreach ($types as $type)
      @if(isset($codexEntries[$type]) && $codexEntries[$type]->count())
        <div class="codex-group codex-group-{{ $type }}">
          <h2>{{ ucfirst($type) }}s</h2>
          <ul>
            @foreach ($codexEntries[$type] as $entry)
              <li class="codex-entry" id="codex-entry-{{ $entry->id }}">
                <a href="{{ route('outline.codex.show', $entry) }}">
                  {{ $entry->name }}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      @endif
    @endforeach

    @if ($codexEntries->isEmpty())
      <p class="empty">No codex entries yet. Add your first character, item, or location!</p>
    @endif

  </div>
@endsection
