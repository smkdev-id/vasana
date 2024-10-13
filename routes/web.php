<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OllamaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ollama', function () {
    return view('ollama.form'); // For displaying the input form
});
Route::post('/ollama/send', [OllamaController::class, 'sendToOllama'])->name('ollama.send');
