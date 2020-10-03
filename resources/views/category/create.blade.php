@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nova categoria</h1>
    <form action="/category/" method="POST" class="form-inline">
        @csrf
        <div class="form-group">
            <label for="type">Nome:</label>
        <input type="text" id="type" name="type" value="{{old('type')}}" class="form-control mx-2 @error('type') is-invalid @enderror" placeholder="Ex: cosméticos, casa" required>
        </div>
        @error('type')
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('type') }}
        </div>
        @enderror
        <input type="submit" value="Salvar categoria" class="btn btn-secondary mx-2">
    </form>
</div>
@endsection