@extends('layouts.app')

@section('title', 'Comentários do Usuário')

@section('content')

    <h1 class="font-bold mb-6">Comentários do usuário {{ $user->name }}</h1>

    <form action="{{ route('users.index') }}" method="get">
        <label class="relative">
            <input
                class="placeholder:italic placeholder:text-slate-400 bg-white w-96 border border-slate-300 rounded-md py-2 pl-4 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                placeholder="Digite um termo para filtrar" type="text" name="search" />
        </label>
        <button class="text-sm bg-blue-500 px-5 py-2 rounded text-white shadow hover:bg-blue-600">
            Filtrar
        </button>
    </form>




    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4 mb-8">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-sky-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Conteúdo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Visível
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ação
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                <tr class="border-b odd:bg-white even:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $comment->body }}
                    </th>

                    <td class="px-6 py-4">
                        {{ $comment->visible ? 'SIM' : 'NÃO' }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('users.edit', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('comments.create', $user->id) }}"
        class="text-sm bg-blue-500 px-5 py-2 rounded text-white shadow hover:bg-blue-600 mt-4">
        Criar comentário
    </a>

@endsection
