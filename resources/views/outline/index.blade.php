@extends('layouts.app')

@section('content')
  <div class="outline-wrapper">
    <h1 class="page-title">Outline Home</h1>

    <div class="content">
      <p class="center my-12 max-w-1/2 mx-auto">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum optio, necessitatibus cumque labore voluptatem illo doloribus, iure placeat accusantium vero, distinctio beatae ex quis recusandae voluptates consectetur? Dolore, necessitatibus tenetur.
      </p>
      <div class="flex justify-center my-8 gap-8 max-w-1/2 mx-auto">
        <a href="{{ route('outline.chapters.index') }}" class="btn">Chapter Timeline</a>
        <a href="{{ route('outline.codex.index') }}" class="btn">Codex Entries</a>
      </div>
    </div>
  </div>
@endsection