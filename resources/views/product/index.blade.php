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
        Nenhum produto cadastrado ainda!
    </div>
    @else
    <h2 class="text-center border-bottom border-secondary pb-1">Todas os produtos disponíveis
        <a href="/product/create" title="Novo produto">
            <svg class="text-secondary" width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                    clip-rule="evenodd" />
            </svg>
        </a>
    </h2>
    @endif
    <div class="row justify-content-md-between justify-content-sm-center">
        @foreach ($products as $product)
        <div class="card-deck">
            <div class="m-1">
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