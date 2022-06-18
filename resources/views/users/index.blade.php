@extends('layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')

<h1>Listagem de usuários</h1>

<h3><a href="{{ route('users.create') }}">Criar novo usuário</a></h3>

<ul>
    @foreach ($users as $user)

        <li>
            {{ $user->name }} - {{ $user->email }} | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
        </li>

    @endforeach

</ul>

@endsection


