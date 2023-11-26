<form action="{{ $action }}" method="post">
    @csrf
    @isset($method)
        @method($method)
    @endisset

    <label for="title">Judul:</label>
    <input type="text" name="title" value="{{ old('title', $note->title ?? '') }}" required>

    <label for="content">Konten:</label>
    <textarea name="content" required>{{ old('content', $note->content ?? '') }}</textarea>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ url('/notes') }}" class="btn btn-secondary">Batal</a>
</form>
