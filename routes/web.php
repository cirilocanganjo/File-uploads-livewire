<?php

use App\Livewire\File\FileComponent;
use Illuminate\Support\Facades\Route;

Route::get('/' , FileComponent::class)->name('app.file.index');
