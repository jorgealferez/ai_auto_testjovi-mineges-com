@extends('layouts.app')

@section('content')
    <h1>Crear Categoría</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label>Nombre:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label>Descripción:</label>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection