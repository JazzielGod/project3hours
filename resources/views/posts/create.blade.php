<x-layouts.app
    title="Create a new post" 
    meta-description="Formulario para crear un nuevo Blog"
>

    <h1>Create new Post</h1>
    {{-- @dump($post->toArray()) --}}
    {{-- @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach --}}

    <form action="{{ route('posts.store') }}" method="POST">
        
        @csrf
        @include('posts.form-fields')
        <br>
        <button type="submit">Create Post</button>
        <br>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>