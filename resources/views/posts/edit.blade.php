<x-layouts.app
    :title="$post->title" 
    :meta-description="$post->body"
>

    <h1>Formulario de Edición</h1>
    <a href="{{ route('posts.index') }}">Back to blog</a>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        
        @csrf @method('PATCH')

        <label>
            Title
            <input name="title" type="text" value="{{ old('title', $post->title) }}">
            <br>
            @error('title')
                <small style="color: red">{{ $message }}</small>
                <br>
            @enderror
        </label>
        <label>
            Body
            <textarea name="body">{{ old('body', $post->body) }}</textarea>
            <br>
            @error('body')
                <small style="color: red">{{ $message }}</small>
                <br
            @enderror
        </label>
        <br>
        <button type="submit">Update Post</button>
        <br>
    </form>

    

</x-layouts.app>