@extends('adminlte::page')



@section('title', 'Dashboard')



@section('content_header')

    <h1>Редактирование категории</h1>

@stop



@section('content')
    <div class="row">
        <div class="col-lg-12">

            <form action="{{ route('properties.update', $property->id) }}"
                  method="post"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                @foreach(json_decode($property->properties, true) as $key => $value)
                    <div class="form-group">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td><h2>{{$value['title']}}</h2></td>
                                    <td><button type="submit" class="btn btn-danger btn-lg pull-right" value="{{$key}}" name="option-delete">Удалить опцию</button></td>
                                </tr>
                            </tbody>
                        </table>
                        {{--@if($value['type'] != 'radio')--}}
                        <table class="table table-striped">
                            <tbody>
                            @foreach($value['values'] as $values_key => $values_value)
                                <tr>
                                    <td><p>{{$values_value}}</p></td>
                                    <td><button type="submit" class="btn btn-warning pull-right" value="{{$key.'%'.$values_key}}" name="value-delete">Удалить параметр опции</button></td>
                                </tr>
                            @endforeach
                            <tr>
                                <td><input type="text" class="form-control" name="en_name" placeholder="Введите название параметра на английском"></td>
                                <td><input type="text" class="form-control" name="ru_name" placeholder="Введите название параметра на русском"></td>
                                <td><button type="submit" class="btn btn-success pull-right" value="{{$key}}" name="value-add">Добавить параметр опции</button></td>
                            </tr>
                            </tbody>
                        </table>
                            {{--@endif--}}
                    </div>
                @endforeach
                <div class="form-group">
                    <label for="">Введите название опции</label>
                    <input type="text" class="form-control" name="en_option_name" placeholder="на английском языке">
                    <input type="text" class="form-control" name="ru_option_name" placeholder="на русском языке">
                    <label for="">Первый параметр</label>
                    <label for="type">Выберите тип отображения в фильтре</label><br>
                    <select name="type">
                        <option value="select">Выбор одного значения из выпадающего списка</option>
                        <option value="radio">Выбор одного значения</option>
                        <option value="checkbox">Выбор нескольких значений</option>
                    </select>
                    <input type="text" class="form-control" name="en_value_name[]" placeholder="на английском языке">
                    <input type="text" class="form-control" name="ru_value_name[]" placeholder="на русском языке">
                    <label for="">Второй параметр</label>
                    <label for="type">Выберите тип отображения в фильтре</label><br>
                    {{--<select name="type">
                        <option value="select">Выбор одного значения из выпадающего списка</option>
                        <option value="radio">Выбор одного значения</option>
                        <option value="checkbox">Выбор нескольких значений</option>
                    </select>--}}
                    <input type="text" class="form-control" name="en_value_name[]" placeholder="на английском языке">
                    <input type="text" class="form-control" name="ru_value_name[]" placeholder="на русском языке">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="option-add" value="true">Добавить опцию</button>
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
