@if ($errors->any())

@foreach ($errors->all() as $error)
    <div class="p-4 mt-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
        <span class="font-medium">{{ $error }}</span>
    </div>
@endforeach

@endif
