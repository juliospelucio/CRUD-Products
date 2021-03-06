@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Produto</h1>
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col-md col-md-3">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" value="{{ $product->name ? $product->name : old('name') }}"
                    class="form-control mx-2 @error('name') is-invalid @enderror" placeholder="Ex: esmalte, tijolo"
                    required>
            </div>
            <div class="form-group col-md">
                <label for="description">Descrição:</label>
                <input type="text" id="description" name="description"
                    value="{{ $product->description ? $product->description : old('description')}}"
                    class="form-control mx-2 @error('description') is-invalid @enderror"
                    placeholder="Ex: Uma nova forma de destacar as suas mãos" required>
            </div>
        </div>
        <div class="row">
            @error('name')
            <div class="col-md-3 alert alert-danger " role="alert">
                {{ $errors->first('name') }}
            </div>
            @enderror
            @error('description')
            <div class="col-md-3 alert alert-danger" role="alert">
                {{ $errors->first('description') }}
            </div>
            @enderror
        </div>
        <div class="row">
            <div class="form-group col-md col-md-3">
                <label for="price">Preço:</label>
                <input type="number" min="0.1" step="any" id="price" name="price"
                    value="{{ $product->price ? $product->price : old('price')}}" class="form-control" required>
            </div>
            <div class=" col-md">
                <label for="category">Categoria</label>
                <select id="category" name="category_id" class="custom-select">
                    @foreach ($categories as $category)
                    @if ($category->id === $product->category_id)
                    <option selected value="{{$category->id}}">{{$category->type}}</option>
                    @else
                    <option value="{{$category->id}}">{{$category->type}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            @error('price')
            <div class="col-md-3 alert alert-danger " role="alert">
                {{ $errors->first('price') }}
            </div>
            @enderror
            @error('category_id')
            <div class="col-md-3 alert alert-danger" role="alert">
                {{ $errors->first('category_id') }}
            </div>
            @enderror
        </div>
        <input type="submit" value="Editar produto" class="btn btn-block btn-secondary my-2">
    </form>
</div>
@endsection