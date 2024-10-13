<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OllamaController extends Controller
{
    public function sendToOllama(Request $request)
    {
        // Customize URL and data to fit the local Ollama API requirements
        $response = Http::post('http://localhost:11434/api/generate', [
            'model' => 'tinyllama:latest',
            'prompt' => $request->input('prompt'),
        ]);

        return view('ollama.response', ['response' => $response->json()]);
    }
}
