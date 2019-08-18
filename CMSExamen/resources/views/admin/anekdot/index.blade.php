@extends('adminlte::page')



@section('title', 'Dashboard')



@section('content_header')

    <h1>Dashboard</h1>

@stop



@section('content')
    <a href="{{ route('admin-anekdots.create') }}"
       class="btn btn-primary">Создать анекдот</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Cathegory name</th>

            <th>Anekdot title</th>
            <th>Anekdot author</th>
            <th>Anekdot content</th>
            <th>Is approved</th>
            <th>Approved</th>
            <th>Редактирование</th>
            <th>Удаление</th>
        </tr>
        </thead>
        <tbody>

        @foreach($anekdots as $anekdot)
            <tr>
                <td>{{ $anekdot->cathegory['name'] }}</td>
                <td>{{ $anekdot->title }}</td>
                <td>{{ $anekdot->author }}</td>
                <td>{{ $anekdot->content }}</td>
                <td>{{ $anekdot->approved }}</td>

                <td>
                    <form action="{{ route('admin-anekdots.update', $anekdot->id) }}"
                          method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="approved" value="1">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success {{$anekdot->approved == '1' ? "disabled" : ""}}">Approve</button>
                        </div>
                    </form>
                </td>
                <td><a href="{{ route('admin-anekdots.edit', $anekdot->id) }}" class="btn btn-success">Редактировать</a></td>
                <td>
                    <form action="{{ route('admin-anekdots.destroy', $anekdot->id) }}" method="post">
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