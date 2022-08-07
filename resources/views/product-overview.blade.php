@extends('layouts.default')

@section('title')
    Visualizando produto
@endsection

@section('content')
    <product-overview :product="{{ $product }}"></product-overview>
@endsection
