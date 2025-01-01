<x-layouts.app
    :title="$post->title" 
    :meta-description="$post->body"
>

    <h1>Formulario de Edición</h1>
    <a href="{{ route('posts.index') }}">Back to blog</a>
    {{-- @dump($post->toArray()) --}}

    <form action="{{ route('posts.update', $post) }}" method="POST">
        
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <br>
        <button type="submit">Update Post</button>
        <br>
    </form>

    

</x-layouts.app>