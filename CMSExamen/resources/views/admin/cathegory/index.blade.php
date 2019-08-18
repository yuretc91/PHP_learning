@extends('adminlte::page')



@section('title', 'Dashboard')



@section('content_header')

    <h1>Dashboard</h1>

@stop



@section('content')
    <a href="{{ route('admin-cathegories.create') }}"
       class="btn btn-primary">Создать категорию</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Cathegory ID</th>
            <th>Cathegory name</th>
            <th>Cathegory description</th>
            <th>Редактирование</th>
            <th>Удаление</th>
        </tr>
        </thead>
        <tbody>

        @foreach($cathegories as $cathegory)
            <tr>
                <td>{{ $cathegory->id }}</td>
                <td>{{ $cathegory->name }}</td>
                <td>{{ $cathegory->description }}</td>

                <td><a href="{{ route('admin-cathegories.edit', $cathegory->id) }}" class="btn btn-success">Редактировать</a></td>
                <td>

                    <form action="{{ route('admin-cathegories.destroy', $cathegory->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

@stop



@section('css')

    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}

@stop



@section('js')

    <script> console.log('Hi!'); </script>

@stop