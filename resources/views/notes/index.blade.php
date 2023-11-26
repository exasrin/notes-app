@extends('layouts.app')

@section('content')
    <h2>Daftar Catatan</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ url('/notes/create') }}" class="btn btn-primary">Tambah Catatan</a>

    <ul>
        @forelse($notes as $note)
            <li>
                <a href="{{ url('/notes/'.$note->id) }}">
                    {{ $note->title }}
                </a>
            </li>
        @empty
            <p>Tidak ada catatan.</p>
        @endforelse
    </ul>
@endsection
