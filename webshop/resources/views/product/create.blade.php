@extends('admin-panel')

@section('content')
    {{--@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif--}}
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('products.store') }}"
                  method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="form-group {{$errors->first("name") ? "has-error" : ""}}">
                    <label for="">Имя продукта</label>
                    <input type="text" class="form-control" name="name" value="{{old("name")}}">
                    @if($errors->first("name"))
                        <span class="help-block">{{$errors->first("name")}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Ссылка продукта</label>
                    <input type="text" class="form-control" name="url" value="{{old("url")}}">
                </div>
                <div class="form-group">
                    <label for="">Картинка продукта</label>
                    <input type="text" class="form-control" name="image" value="{{old("image")}}">
                </div>
                <div class="form-group">
                    <label for="">Описание продукта</label>
                    <textarea name="content" class="form-control" id="" cols="30" rows="10">{{old("content")}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Цена продукта</label>
                    <input type="text" class="form-control" name="price" value="{{old("price")}}">
                </div>
                <div class="form-group">
                    <label for="">Категория продукта</label>
                    <select name="cathegory_id" id="">
                        @foreach($cathegories as $cathegory)
                        <option value="{{ $cathegory->id }}">{{ $cathegory->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Наличие продукта</label>
                    <input type="text" class="form-control" name="stock" value="{{old("stock")}}">
                </div>
                <div class="form-group">
                    <label for="">Активный не активный</label>
                    <select name="active" id="">
                        <option value="1">Активный</option>
                        <option value="0">Не Активный</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection
