@extends('layouts.default')

@section('title')
    Visualizando produto
@endsection

@section('content')
    <script>
        window.product = {!! json_encode($product) !!}
    </script>
    <product-overview></product-overview>
@endsection
