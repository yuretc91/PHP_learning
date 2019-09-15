@extends('adminlte::page')



@section('title', 'Dashboard')



@section('content_header')

    <h1>Редактирование категории</h1>

@stop



@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('admin-cathegories.update', $cathegory->id) }}"
                  method="post"
                  enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="name">Имя категории</label>
                    <input type="text" class="form-control" name="name" value="{{ $cathegory->name }}" placeholder="{{ $cathegory->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Описание категории</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $cathegory->description }}</textarea>
                </div>
                {{--{{dd(json_decode($cathegory->property->properties, true))}}--}}
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
            </form>
            <a href="{{ route('admin-properties.edit', $cathegory->id) }}" class="btn btn-primary">Редактировать опции категории</a>
        </div>

    </div>
@stop



@section('css')

    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}

@stop



@section('js')

    <script> console.log('Hi!'); </script>

@stop
