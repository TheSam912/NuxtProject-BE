<?php

use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;

Route::get('/topics/{slug}', [TopicController::class, 'show']);
