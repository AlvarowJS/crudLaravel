{{-- por seguridad csrf --}}

@csrf

<label class="uppercase text-gray-700 text-xs" for="">Titulo</label>
<span>@error('title') {{ $message }} @enderror</span>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{ old('title',$post-> title) }}">

<label class="uppercase text-gray-700 text-xs" for="">Slug</label>
<span>@error('slug') {{ $message }} @enderror</span>
<input type="text" name="slug" class="rounded border-gray-200 w-full mb-4" value="{{ old('slug',$post-> slug) }}">

<label class="uppercase text-gray-700 text-xs" for="">Contenido</label>
<span>@error('body') {{ $message }} @enderror</span>
<textarea name="body" class="rounded border-gray-200 w-full mb-4" id="" rows="5">{{ old('body',$post-> body) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>

