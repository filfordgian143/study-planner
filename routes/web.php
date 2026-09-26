<?php

use App\Http\Controllers\StudyTopicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('study-topics.index');
});

Route::resource('study-topics', StudyTopicController::class);