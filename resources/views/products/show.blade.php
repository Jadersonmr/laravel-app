@extends('layouts.app')

@section('title', 'Detalhes do produtos - ')

@section('content')
    <div class="container">
        @component('products.components.card')
            @slot('title')
                Detalhes do produto
            @endslot
                <h4>Nome: {{$product->name}}</h4>
                <p>Preço: {{$product->price}}</p>
                <p>Descrição: {{$product->description}}</p>

                <div class="mb-2">
                    <a href="{{route('products.index')}}" class="btn btn-primary">Voltar</a>
                </div>
        @endcomponent
    </div>
@endsection
