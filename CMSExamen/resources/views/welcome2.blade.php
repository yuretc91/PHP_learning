@extends('adminlte::page')



@section('title', 'Dashboard')



@section('content_header')

    <h1>Dashboard</h1>

@stop



@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Cathegory name</th>
            <th>Cathegory ID</th>
            <th>Anekdot title</th>
            <th>Anekdot author</th>
            <th>Anekdot content</th>
            <th>Редактирование</th>
            <th>Удаление</th>
        </tr>
        </thead>
        <tbody>

        @foreach($anekdots as $anekdot)
            <tr>
                <td>{{ $anekdot->cathegory['name'] }}</td>
                <td>{{ $anekdot->cathegory['id'] }}</td>
                <td>{{ $anekdot->title }}</td>
                <td>{{ $anekdot->author }}</td>
                <td>{{ $anekdot->content }}</td>

                <td>{{--<a href="{{ route('anekdots.edit', $anekdot->id) }}" class="btn btn-success">Редактировать</a>--}}</td>
                <td>

                    {{--<form action="{{ route('anekdots.destroy', $anekdot->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>--}}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

@stop



@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">

@stop



@section('js')

    <script> console.log('Hi!'); </script>

@stop