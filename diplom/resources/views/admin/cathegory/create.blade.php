@extends('adminlte::page')



@section('title', 'Dashboard')



@section('content_header')

    <h1>Dashboard</h1>

@stop



@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('cathegories.store') }}"
                  method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Имя категории</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="">Описание категории</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <input type="hidden" name="picture" value="img.jpg">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Создать</button>
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

