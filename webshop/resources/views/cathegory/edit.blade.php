@extends('admin-panel')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('cathegories.update', $cathegory->id) }}"
                  method="post"
                  enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="">Имя категории</label>
                    <input type="text" class="form-control" name="name" value="{{ $cathegory->name }}">
                </div>
                <div class="form-group">
                    <label for="">Ссылка на категорию</label>
                    <input type="text" class="form-control" name="url" value="{{ $cathegory->url }}">
                </div>
                <div class="form-group">
                    <label for="">Картинка категории</label>
                    <input type="text" class="form-control" name="image" value="{{ $cathegory->image }}">
                </div>
                <div class="form-group">
                    <label for="">Описание категории</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $cathegory->description }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
