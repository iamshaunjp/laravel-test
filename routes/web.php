<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CodexController;

Route::get('/', function () {
  return view('welcome');
});

Route::prefix('outline')->name('outline.')->group(function () {
  Route::get('/', function () {
    return view('outline.index');
  })->name('index');

  Route::resource('codex', CodexController::class);
  Route::resource('chapters', ChapterController::class);
});

Route::get('/modal/empty', function() {
  return '';
});