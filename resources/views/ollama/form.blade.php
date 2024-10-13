<!-- resources/views/ollama/form.blade.php -->
<form action="{{ route('ollama.send') }}" method="POST">
    @csrf
    <label for="prompt">Enter Prompt:</label>
    <input type="text" id="prompt" name="prompt" required>
    <button type="submit">Send to Ollama</button>
</form>
