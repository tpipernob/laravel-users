@extends('layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')

<h1>Listagem de usuários</h1>

<h3><a href="{{ route('users.create') }}">Criar novo usuário</a></h3>

<form action="{{ route('users.index') }}" method="get">
    <input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form>

<ul>
    @foreach ($users as $user)

        <li>
            {{ $user->name }} - {{ $user->email }}
            | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
            | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
        </li>

    @endforeach

</ul>

@endsection


