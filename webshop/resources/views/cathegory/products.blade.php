@extends('admin-panel')

@section('content')
    @foreach($cathegory->products as $product)
        {{ $product->name }}
    @endforeach
@endsection