@extends('admin-panel')

@section('content')
    <a href="{{ route('products.create') }}"
       class="btn btn-primary">Создать продукт</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Ссылка</th>
                <th>Цена</th>
                <th>Наличие</th>
                <th>Активность</th>
                <th>Редактирование</th>
                <th>Удаление</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->url }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->active }}</td>
                <td><a href="" class="btn btn-success">Редактировать</a></td>
                <td><a href="" class="btn btn-danger">Удалить</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection