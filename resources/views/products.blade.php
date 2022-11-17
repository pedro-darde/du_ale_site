@extends('layouts.default')

@section('title')
    Produtos da {{ $line }}
@endsection

@section('content')
    <product-list :products=" {{ $products }}" line="{{ $line }}">
        </product-lis>
    @endsection
