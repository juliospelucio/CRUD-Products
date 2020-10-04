@extends('layouts.app')

@section('content')
<div id="app" class="container">

    @if (session('mssg'))
    <div class="alert alert-success text-center alert-dismissible" role="alert">
        {{ session('mssg') }}
    </div>
    @endif

    @if (session('status'))
    <div class="alert alert-danger text-center alert-dismissible" role="alert">
        {{ session('status') }}
    </div>
    @endif

    @if ($categories->isEmpty())
    <div class="alert alert-info text-center" role="alert">
        Nenhuma categoria cadastrada ainda!
    </div>
    @else
    <h2 class="text-center border-bottom border-secondary pb-1">Todas as categorias disponíveis
        <a href="#" class="info-cursor" title="Selecione uma categoria para ver os produtos relacionados">
            <svg class="text-secondary" width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd" />
            </svg>
        </a>
    </h2>
    @endif
    <div class="row">
        @foreach ($categories as $category)
        <div class="m-md-1 mb-sm-1 p-3 col-md shadow-sm text-center bg-white rounded">
            <form action="{{ route('category.destroy', $category->id) }}" method="post">
                @csrf
                <a href="{{ route('category.show', $category->id) }}">{{$category->type}}</a>
                <a href="/category/edit/{{$category->id}}" title="Editar categoria" class="ml-2">
                    <svg class="text-secondary" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                        <path fill-rule="evenodd"
                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                @method('DELETE')
                <button class="btn" title="Editar categoria">
                    <svg class="text-danger" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection