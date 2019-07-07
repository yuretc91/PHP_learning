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
                <th>Показать продукты</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cathegories as $cathegory)
            <tr>
                <td>{{ $cathegory->name }}</td>
                <td>{{ $cathegory->url }}</td>
                <td>{{ $cathegory->description }}</td>
                <td><a href="{{ route('cathegories.edit', $cathegory->id) }}" class="btn btn-success">Редактировать</a></td>
                <td>

                    <form action="{{ route('cathegories.destroy', $cathegory->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
                <td><a href="{{ route('cathegory.prod', $cathegory->id) }}" class="btn btn-success">Продукты</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection