@extends('layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')

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




    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-sky-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Foto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ação
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="border-b odd:bg-white even:bg-gray-50">
                    <td class="px-6 py-4">
                        @if ($user->image)
                            <img src="{{ url("storage/{$user->image}") }}" alt="{{ $user->name }}"
                                class="object-cover w-16 h-16 rounded-lg">
                        @else
                            <img src="{{ url("images/default_avatar.png") }}" alt="{{ $user->name }}"
                                class="object-cover w-16 h-16 rounded-lg">
                        @endif
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <a href="{{ route('users.show', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ $user->name }}</a>

                    </th>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('users.edit', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a> |
                        <a href="{{ route('comments.index', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Comentários ({{ $user->comments->count() }})</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="py-4">
        {{ $users->appends([
            'search' => request()->get('search', '')
        ])->links() }}
    </div>



@endsection
