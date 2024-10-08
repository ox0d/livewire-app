<?php

use App\Livewire\CreatePost;
use App\Livewire\ShowPosts;
use App\Livewire\Counter;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/todos', Todos::class)->name('todos');
Route::get('/counter', Counter::class)->name('counter');


// Post routes

// Show Posts
Route::get('/posts', ShowPosts::class)->name('posts.index');

// Create Post
Route::get('/posts/create', CreatePost::class)->name('posts.create');