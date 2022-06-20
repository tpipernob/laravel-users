@extends('layouts.app')

@section('title', 'Novo comentário')

@section('content')

<h1 class="font-bold">Novo Comentário para o usuário {{ $user->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('comments.store', $user->id) }}" method="post">
    @csrf
    @include('users.comments._partials.form')
    <button
        class="text-sm bg-blue-500 px-5 py-2 rounded text-white shadow hover:bg-blue-600" type="submit">
        Criar
    </button>
</form>

@endsection
