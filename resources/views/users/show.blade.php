@extends('layouts.app')

@section('title', 'Listagem do usuário')

@section('content')

<h1>Listagem de usuário {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>

@endsection


