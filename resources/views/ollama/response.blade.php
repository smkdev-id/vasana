<!-- resources/views/ollama/response.blade.php -->
<h1>Ollama API Response</h1>
<pre>{{ json_encode($response, JSON_PRETTY_PRINT) }}</pre>
<a href="{{ url('/ollama') }}">Back</a>
