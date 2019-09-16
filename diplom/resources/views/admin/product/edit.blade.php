@extends('adminlte::page')



@section('title', 'Dashboard')



@section('content_header')

    <h1>Dashboard</h1>

@stop



@section('content')
    <div class="row">
        <div class="col-lg-6">
{{--{{dd(json_decode($properties->properties, true))}}--}}
            <form action="{{ route('products.update', $product->id) }}"
                  method="post"
                  enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="title">Название продукта</label>
                    <input type="text" name="title" value="{{$product->title}}">
                </div>
                <div class="form-group">
                    <label for="info">Описание продукта</label>
                    <textarea name="info" class="form-control" cols="30" rows="10" >{{$product->info}}</textarea>
                </div>
                <div class="form-group">
                    <label for="availability">Наличие продукта</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="availability" value="1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Есть в наличии
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="availability" value="0">
                        <label class="form-check-label" for="exampleRadios1">
                            Нет в наличии
                        </label>
                    </div>
                </div>
                {{--@foreach(json_decode($product->options, true) as $option_name => $option_value)
                <div class="form-group">
                    <label for="{{$option_name}}">{{$option_name}}</label>
                    <input type="text" class="form-control" name="{{$option_name}}" value="{{$option_value}}">
                </div>
                @endforeach--}}
                @foreach(json_decode($properties->properties, true) as $property_name => $property_value)
                <div class="form-group">
                    <label for="{{$property_name}}">{{$property_value['title']}}</label>
                    <div class="form-check">
                        @foreach($property_value['values'] as $property_en_name => $property_ru_name)
                        <input class="form-check-input" type="radio" name="{{$property_en_name}} {{ $property_ru_name == 'true' ? 'checked' : '' }}">
                        <label class="form-check-label" for="{{$property_en_name}}">
                            {{$property_ru_name}}
                        </label>
                            @endforeach
                    </div>

                </div>
                @endforeach


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
            </form>
        </div>
    </div>
@stop



@section('css')

    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}

@stop



@section('js')

    <script> console.log('Hi!'); </script>

@stop
