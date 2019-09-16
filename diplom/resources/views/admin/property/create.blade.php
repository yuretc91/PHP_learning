@extends('adminlte::page')



@section('title', 'Dashboard')



@section('content_header')

    <h1>Создайте опции для вашей категории</h1>

@stop



@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('properties.store') }}"
                  method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    @foreach($cathegories as $cathegory)
                        <input type="hidden" name="cathegory_id" value="{{$cathegory->id}}">
                    @endforeach
                    <label for="">Введите название опции</label>
                    <input type="text" class="form-control" name="en_option_name" placeholder="на английском языке">
                    <input type="text" class="form-control" name="ru_option_name" placeholder="на русском языке">

                    <label for="">Первый параметр</label><br>
                    <label for="type">Выберите тип отображения в фильтре</label><br>
                    <select name="type">
                        <option value="select">Выбор одного значения из выпадающего списка</option>
                        <option value="radio">Выбор одного значения</option>
                        <option value="checkbox">Выбор нескольких значений</option>
                    </select>
                    <input type="text" class="form-control" name="en_value_name[]" placeholder="на английском языке">
                    <input type="text" class="form-control" name="ru_value_name[]" placeholder="на русском языке">
                    <label for="">Второй параметр</label><br>
                    <label for="type">Выберите тип отображения в фильтре</label><br>
                    <select name="type">
                        <option value="select">Выбор одного значения из выпадающего списка</option>
                        <option value="radio">Выбор одного значения</option>
                        <option value="checkbox">Выбор нескольких значений</option>
                    </select>
                    <input type="text" class="form-control" name="en_value_name[]" placeholder="на английском языке">
                    <input type="text" class="form-control" name="ru_value_name[]" placeholder="на русском языке">




                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="option-add">Добавить опцию</button>
                </div>
            </form>
        </div>
    </div>
@stop



@section('css')

    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}

@stop



@section('js')

    <script> console.log('Hi!'); </script>

@stop

