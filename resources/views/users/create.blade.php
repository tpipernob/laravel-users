@extends('layouts.app')

@section('title', 'Novo usuário')

@section('content')

<h1 class="font-bold">Novo Usuário</h1>

@include('includes.validations-form')

<form action="{{ route('users.store') }}" method="post">
    @csrf
    @include('users._partials.form')
    <button
        class="text-sm bg-blue-500 px-5 py-2 rounded text-white shadow hover:bg-blue-600" type="submit">
        Criar
    </button>
</form>

@endsection
