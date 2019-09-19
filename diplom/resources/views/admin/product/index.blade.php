@extends('adminlte::page')



@section('title', 'Dashboard')



@section('content_header')

    <h1>Продукты</h1>

@stop



@section('content')
    <div class="btn btn-primary btn-lg open-form">
        Создать продукт
    </div>
    <div class="edit-form form-hide" id="create-form">
        <form action="{{ route('products.create') }}" method="get" enctype="multipart/form-data" class="form-create">
            @csrf
                    @foreach($cathegories as $cathegory)
                <input type="radio" name="cathegory_id" value="{{$cathegory->id}}" class="form-check-input form-control-lg">{{$cathegory->name}}<br>
                    @endforeach
                <br>
            <input type="submit" class="btn btn-primary btn-lg" value="Создать продукт">
        </form>
    </div>
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

    <script>
        $(document).ready(function () {
            $('.open-form').click(function(){
                $('#create-form').toggleClass('form-hide');
                return true;
            });

        });

    </script>

@stop