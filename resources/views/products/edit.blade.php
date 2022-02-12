@extends('layouts.app')

@section('title', 'Criar produtos - ')

@section('content')
    <h1>Editar produto</h1>

    <form action="{{route('products.update', $product->id)}}" method="put">
        @csrf
        @include('products.fields')
    </form>
@endsection
