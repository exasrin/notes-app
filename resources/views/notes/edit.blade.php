@extends('layouts.app')

@section('content')
    <h2>Edit Catatan</h2>

    @include('notes._form', ['action' => url('/notes/'.$note->id), 'method' => 'put'])
@endsection
