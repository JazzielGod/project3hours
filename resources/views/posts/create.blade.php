<x-layouts.app
    title="Create a new post" 
    meta-description="Formulario para crear un nuevo Blog"
>

    <h1>Create new Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        <label>
            Title
            <input name="title" type="text">
            <br>
        </label>
        <label>
            Body
            <textarea name="body"></textarea>
            <br
        </label>
        <button type="submit">Create Post</button>
        <br>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>