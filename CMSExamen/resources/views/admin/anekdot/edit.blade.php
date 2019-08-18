@extends('adminlte::page')



@section('title', 'Dashboard')



@section('content_header')

    <h1>Dashboard</h1>

@stop



@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('admin-anekdots.update', $anekdot->id) }}"
                  method="post"
                  enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="">Имя категории</label>
                    <select name="cathegory_id" id="">
                        @foreach ($cathegories as $cathegory)
                        <option value="{{ $cathegory->id }}">{{ $cathegory->name }}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Ссылка на продукт</label>
                    <input type="text" class="form-control" name="title" value="{{ $anekdot->title }}">
                </div>
                <div class="form-group">
                    <label for="">Цена продукта</label>
                    <input type="text" class="form-control" name="author" value="{{ $anekdot->author }}">
                </div>
                <div class="form-group">
                    <label for="">Наличие продукта</label>
                    <textarea name="content" class="form-control" id="" cols="30" rows="10">{{ $anekdot->content }}</textarea>
                </div>

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
