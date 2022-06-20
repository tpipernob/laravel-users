@extends('layouts.app')

@section('title', 'Listagem do usuário')

@section('content')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Nome</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $user->name }}</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">E-mail:</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $user->email }}</dd>
        </div>

        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Foto</dt>
            @if ($user->image)
                <img src="{{ url("storage/{$user->image}") }}" alt="{{ $user->name }}"
                    class="object-cover rounded-lg">
            @else
                <img src="{{ url("images/default_avatar.png") }}" alt="{{ $user->name }}"
                    class="object-cover rounded-lg">
            @endif
        </div>
      </dl>
    </div>
  </div>


<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button class="text-sm bg-red-500 mt-4 px-5 py-2 rounded text-white shadow hover:bg-red-600">
        Deletar
    </button>
</form>
@endsection


