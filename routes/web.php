<?php

use App\Livewire\Counter;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); })->name('home');

Route::get('/todos', Todos::class)->name('todos');
Route::get('/counter', Counter::class)->name('counter');