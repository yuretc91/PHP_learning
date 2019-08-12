{{--@extends('layouts\admin-panel')--}}
@extends('adminlte::page')

@section('content')
{{--@if(Session::has("success"))
    <div class="alert alert-light">
        {{Session::get("success")}}
    </div>
@endif--}}
    {{--<a href="{{ route('anekdots.create') }}"
       class="btn btn-primary">Создать продукт</a>--}}


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
@endsection