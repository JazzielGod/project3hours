{{-- @extends('layouts.app')

@section('title', 'Blog')
@section('meta-description', 'Blog meta description')

@section('content')
    <h1>Blog</h1>
@endsection --}}

<x-layouts.app
    title="Blog" 
    meta-description="Blog meta description"
>
        
    <h1>Blog</h1>
    {{-- @dump($posts) --}}

    <a href="{{ route('posts.create') }}">Create a new post</a>
    @foreach ($posts as $post)
        <div style="display: flex; align-items: baseline;">
            <h2> 
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }} 
                </a>
            </h2> &nbsp;
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
        </div>
    @endforeach
</x-layouts.app>