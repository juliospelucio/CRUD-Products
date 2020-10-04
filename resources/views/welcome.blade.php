@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row text-center">
        <div class="col-md-12">
            <div class="card shadow-sm p-3 rounded">
                <div class="card-header">Dashboard</div>
                <div class="card-body text-center">
                    O que você gostaria de fazer?
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md mt-3">
            <div class="card shadow-sm p-3 rounded">
                <div class="card-body text-center justify-content-around">
                    <a href="/category">Listar categorias</a>
                </div>
            </div>
        </div>
        <div class="col-md mt-3">
            <div class="card shadow-sm p-3 rounded">
                <div class="card-body text-center">
                    <a href="/category/create">Cadastrar categoria</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md mt-3">
            <div class="card shadow-sm p-3 rounded">
                <div class="card-body text-center">
                    <a href="/product">Listar Produtos</a>
                </div>
            </div>
        </div>
        <div class="col-md mt-3">
            <div class="card shadow-sm p-3 rounded">
                <div class="card-body text-center">
                    <a href="/product/create">Cadastrar produto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection