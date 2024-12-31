<x-layouts.app
    title="Create a new post" 
    meta-description="Formulario para crear un nuevo Blog"
>

    <h1>Create new Post</h1>

    {{-- @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach --}}

    <form action="{{ route('posts.store') }}" method="POST">
        
        @csrf

        <label>
            Title
            <input name="title" type="text" value="{{ old('title') }}">
            <br>
            @error('title')
                <small style="color: red">{{ $message }}</small>
                <br>
            @enderror
        </label>
        <label>
            Body
            <textarea name="body" value="{{ old('body') }}"></textarea>
            <br>
            @error('body')
                <small style="color: red">{{ $message }}</small>
                <br
            @enderror
        </label>
        <br>
        <button type="submit">Create Post</button>
        <br>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>