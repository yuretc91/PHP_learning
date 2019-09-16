@extends('adminlte::page')



@section('title', 'Dashboard')



@section('content_header')

    <h1>Dashboard</h1>

@stop



@section('content')
    <a href="{{ route('products.create') }}"
       class="btn btn-primary">Создать продукт</a>

    @foreach($products as $product)
<h1>{{$product->title}}</h1>
<div><img src="{{asset('images/products/'. $product->image)}}" alt="{{$product->title}}"></div>
<h2>{{$product->price. " "}}<span>BYN</span></h2>
<h2>Характеристики продукта</h2>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Название</th>
        <th>Значение</th>
    </tr>
    </thead>
    <tbody>

@foreach(json_decode($product->options, true) as $key => $value)
    <tr>
        <td>{{$key}}</td>
        <td>{{$value}}</td>
    </tr>
@endforeach
    </tbody>
</table>
<a href="{{ route('products.edit', $product->id) }}" class="btn btn-lg btn-success">Редактировать</a>

    <form action="{{ route('products.destroy', $product->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-lg btn-danger">Удалить</button>
    </form>


    @endforeach


@stop



@section('css')

    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}

@stop



@section('js')

    <script> console.log('Hi!'); </script>

@stop