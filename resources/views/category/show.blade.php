@extends('layouts.app')

@section('content')
<div id="app" class="container">

    @if (session('mssg'))
    <div class="alert alert-success text-center alert-dismissible" role="alert">
        {{ session('mssg') }}
    </div>
    @endif

    @if ($products->isEmpty())
    <div class="alert alert-info text-center" role="alert">
        Nenhum produto cadastrado nessa categoria!
    </div>
    @else
    <h2 class="text-center border-bottom border-secondary pb-1">
        Todas os produtos disponíveis para <span class="text-info">{{$category->type}}</span>
        <a href="/category/edit/{{$category->id}}" title="Editar categoria">
            <svg class="text-secondary" width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                <path fill-rule="evenodd"
                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                    clip-rule="evenodd" />
            </svg>
        </a>
    </h2>
    @endif
    <div class="row justify-content-md-between justify-content-sm-center">
        @foreach ($products as $product)
        <div class="card-deck">
            <div class="m-sm-1">
                <div class="card bg-light border-dark" style="width: 18rem;">
                    <a href="/product/{{$product->id}}" target="_blank">
                        <img class="card-img-top" src="{{ asset('/img/img-283.svg') }}" alt="Card image cap" />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="/product/{{$product->id}}" target="_blank">{{$product->name}}</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection