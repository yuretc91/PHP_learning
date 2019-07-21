@extends('admin-panel')

@section('content')
@if(Session::has("success"))
    <div class="alert alert-light">
        {{Session::get("success")}}
    </div>
@endif
    <a href="{{ route('products.create') }}"
       class="btn btn-primary">Создать продукт</a>
<a href="{{ route('rasp.create') }}"
   class="btn btn-primary">Расписание</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Имя категории</th>
                <th>ID категории</th>
                <th>Имя</th>
                <th>Ссылка</th>
                <th>Цена</th>
                <th>Наличие</th>
                <th>Редактирование</th>
                <th>Удаление</th>
            </tr>
        </thead>
        <tbody>

            @foreach($products as $product)
            <tr>
                <td>{{ $product->cathegory['name'] }}</td>
                <td>{{ $product->cathegory['id'] }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->url }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>

                <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">Редактировать</a></td>
                <td>

                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{$products->links()}}
@endsection