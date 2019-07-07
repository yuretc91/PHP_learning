@extends('admin-panel')

@section('content')
    <a href="{{ route('cathegories.create') }}"
       class="btn btn-primary">Создать категорию</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Ссылка</th>
                <th>Описание</th>
                <th>Редактирование</th>
                <th>Удаление</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cathegories as $cathegory)
            <tr>
                <td>{{ $cathegory->name }}</td>
                <td>{{ $cathegory->url }}</td>
                <td>{{ $cathegory->description }}</td>
                <td><a href="{{ action('CathegoryController@edit', ['id' => $cathegory->id]) }}" class="btn btn-success">Редактировать</a></td>
                <td><a href="" class="btn btn-danger">Удалить</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection