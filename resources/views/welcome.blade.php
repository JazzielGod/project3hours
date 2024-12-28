{{-- Herencia de la plantilla principal --}}

{{-- @extends('layouts.app')

@section('title', 'Home')
@section('meta-description', 'Home meta description')

@section('content')
    <h1>Inicio</h1>
@endsection --}}


{{-- componentes --}}

{{-- @component('components.layout')
    <h1>Inicio</h1>
@endcomponent
 --}}

 {{-- otra forma --}}
{{-- <x-layout>
    <x-slot name="title">
        Home
    </x-slot>
    <h1>Inicio</h1>
</x-layout> --}}

<x-layouts.app
    title="Home" 
    meta-description="Home meta description"
    {{-- :sum="2 + 2" --}}
>
    <h1>Inicio</h1>
</x-layouts.app>