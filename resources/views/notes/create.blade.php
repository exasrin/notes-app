@extends('layouts.app')

@section('content')
    <h2>Tambah Catatan</h2>

    @include('notes._form', ['action' => url('/notes')])
@endsection
