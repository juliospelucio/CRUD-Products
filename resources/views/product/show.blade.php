@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-md-4">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('img/img-200.svg') }}" alt="product-name" class="img-fluid w-50">
            </div>
            <div class="d-flex justify-content-center mt-2">
                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-outline-secondary  px-5 m-1">Edit</a>
                <a href="/delete/product/{{$product->id}}" class="btn btn-outline-danger  px-5 m-1" data-toggle="modal"
                    data-target="#deleteModal">Delete</a>
            </div>
        </div>
        <div class="col-md-6 my-sm-3">
            <ul class="list-group">
                <li class="list-group-item list-group-item-dark"><span class="item-label">Nome:</span>
                    {{$product->name}}
                </li>
                <li class="list-group-item list-group-item-dark"><span class="item-label">Descrição:</span>
                    {{$product->description}}</li>
                <li class="list-group-item list-group-item-dark"><span class="item-label">Preço:</span>
                    {{$product->price}}</li>
                <li class="list-group-item list-group-item-dark"><span class="item-label">Categoria:</span>
                    {{$category->type}}
                </li>
            </ul>
        </div>
    </div>
    <x-modal :id="$product->id" type="product"  :product="$product->name"/>

</div>
@endsection