@extends('adminlte::page')



@section('title', 'Dashboard')



@section('content_header')

    <h1>Dashboard</h1>

@stop



@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('admin-anekdots.store') }}"
                           method="post"
                           enctype="multipart/form-data">
                    @csrf
                <div class="form-group {{$errors->first("name") ? "has-error" : ""}}">
                    <label for="">Имя категории</label>
                    <select name="cathegory_id" id="">
                        @foreach ($cathegories as $cathegory)
                            <option value="{{ $cathegory->id }}">{{ $cathegory->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Название анекдота</label>
                    <input type="text" class="form-control" name="title" value="{{old("title")}}">
                </div>
                <div class="form-group">
                    <label for="">Автор анекдота</label>
                    <input type="text" class="form-control" name="author" value="{{old("author")}}">
                </div>
                <div class="form-group">
                    <label for="">Текст анекдота</label>
                    <textarea name="content" class="form-control" id="" cols="30" rows="10">{{old("content")}}</textarea>
                </div>
                <input type="hidden" name="approved" value="0">


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
