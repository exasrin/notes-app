@extends('layouts.app')

@section('content')
    <h2>Detail Catatan</h2>

    <p><strong>Judul:</strong> {{ $note->title }}</p>
    <p><strong>Konten:</strong> {{ $note->content }}</p>

    <a href="{{ url('/notes/'.$note->id.'/edit') }}" class="btn btn-primary">Edit Catatan</a>
    <form action="{{ url('/notes/'.$note->id) }}" method="post" style="display:inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Hapus Catatan</button>
    </form>
    <a href="{{ url('/notes') }}" class="btn btn-secondary">Kembali</a>
@endsection
