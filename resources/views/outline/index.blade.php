@extends('layouts.app')

@section('content')
  <div class="outline-wrapper">
    <h1 class="page-title">Outline Dashboard</h1>

    <div class="dashboard">

      <div 
        class="col-span-3"
        hx-get="{{ route('outline.chapters.index') }}" 
        hx-trigger="load"
        hx-swap="innerHTML"
      >
        Loading Chapters…
      </div>

      <div
        class="col-span-2"
        hx-get="{{ route('outline.codex.index') }}" 
        hx-trigger="load"
        hx-swap="innerHTML"
      >
        Loading Codex...
      </div>

      <div class="modal-container"
        hx-get="/modal/empty"
        hx-target=".modal-content"
        hx-swap="innerHTML"
        hx-trigger="click target:.modal-container"
      >
        <div class="modal-content" id="modal"></div>
      </div>

      <noscript>
        You have JavaScript disabled.
      </noscript>

    </div>
  </div>
@endsection