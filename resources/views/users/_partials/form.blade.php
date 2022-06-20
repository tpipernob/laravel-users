@csrf

<input
    class="placeholder:italic placeholder:text-slate-400 bg-white w-96 border border-slate-300 rounded-md py-2 pl-2 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm block mb-4 mt-4"
    placeholder="Digite o nome" type="text" name="name" value="{{ $user->name ?? old('name') }}" />
<input
    class="placeholder:italic placeholder:text-slate-400 bg-white w-96 border border-slate-300 rounded-md py-2 pl-2 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm block mb-4"
    placeholder="Digite o e-mail" type="email" name="email" value="{{ $user->email ?? old('email') }}" />
<input
    class="placeholder:italic placeholder:text-slate-400 bg-white w-96 border border-slate-300 rounded-md py-2 pl-2 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm block mb-4"
    placeholder="Digite a senha" type="password" name="password"/>
<input
    class="placeholder:italic placeholder:text-slate-400 bg-white w-96 border border-slate-300 rounded-md py-2 pl-2 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm block mb-4"
    type="file" name="image"/>
