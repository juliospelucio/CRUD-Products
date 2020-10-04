@extends('layouts.app')

@section('content')
<div class="container">
<h1>Editar categoria <span class="text-info">{{$category->type}}</span></h1>
    <form action="{{ route('category.update', $category->id) }}" method="POST" class="form-inline">
        @csrf
        <div class="form-group">
            <label for="type">Nome:</label>
            <input type="text" id="type" name="type" value="{{$category->type ? $category->type : old('type')}}"
                class="form-control mx-2 @error('type') is-invalid @enderror" placeholder="Ex: cosméticos, casa"
                required>
        </div>
        @error('type')
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('type') }}
        </div>
        @enderror
        <input type="submit" value="Editar categoria" class="btn btn-secondary mx-2">
    </form>
</div>
@endsection