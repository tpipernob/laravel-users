@extends('layouts.app')

@section('title', 'Editar comentário')

@section('content')

    <h1 class="font-bold">Editar Comentário do usuário {{ $user->name }}</h1>

    @include('includes.validations-form')

    <form action="{{ route('comments.update', $comment->id) }}" method="post">
        @method('PUT')
        @include('users.comments._partials.form')
        <button class="text-sm bg-blue-500 px-5 py-2 rounded text-white shadow hover:bg-blue-600" type="submit">
            Editar
        </button>
    </form>

@endsection
