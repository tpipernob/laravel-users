<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - App Usuários</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <header class="text-slate-50 body-font bg-sky-600">
        <div class="container mx-auto flex flex-wrap p-5 pl-0 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <span class="ml-3 text-xl text-slate-50">Gestão de usuários</span>
          </a>
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('users.index') }}" class="mr-5 hover:text-gray-600">Consultar Usuários</a>
            <a href="{{ route('users.create') }}" class="mr-5 hover:text-gray-900">Cadastrar Usuários</a>
          </nav>
          <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 text-gray-900">Sair
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </header>


    <div class="container mx-auto px-4 m-4">
        @yield('content')
    </div>

</body>
</html>
