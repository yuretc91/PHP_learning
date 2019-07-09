@extends('admin-panel')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('products.update', $product->id) }}"
                  method="post"
                  enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="">Имя продукта</label>
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="">Ссылка на продукт</label>
                    <input type="text" class="form-control" name="url" value="{{ $product->url }}">
                </div>
                <div class="form-group">
                    <label for="">Цена продукта</label>
                    <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                </div>
                <div class="form-group">
                    <label for="">Наличие продукта</label>
                    <input type="text" class="form-control" name="stock" value="{{ $product->stock }}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
