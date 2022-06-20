@csrf

<textarea name="body" cols="60" rows="10"
    class="placeholder:italic placeholder:text-slate-400 bg-white border border-slate-300 rounded-md py-2 pl-2 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm block mb-4 mt-4"
    placeholder="Digite o comentário"> {{ $comment->body ?? old('body') }}
</textarea>

<label for="visible" class="block mb-4">
    <input type="checkbox" name="visible"
        @if (isset($comment) && $comment->visible)
            checked
        @endif
    >
    Visível?
</label>

{{-- <input
    class="placeholder:italic placeholder:text-slate-400 bg-white w-96 border border-slate-300 rounded-md py-2 pl-2 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm block mb-4"
    placeholder="Digite o e-mail" type="email" name="email" value="{{ $user->email ?? old('email') }}" /> --}}


