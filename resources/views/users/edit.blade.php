@extends('layouts.app')

@section('title', 'Editar usuário')

@section('content')

    <h1 class="font-bold">Editar Usuário - {{ $user->name }}</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @include('users._partials.form')
        <button class="text-sm bg-blue-500 px-5 py-2 rounded text-white shadow hover:bg-blue-600" type="submit">
            Editar
        </button>
    </form>

@endsection
