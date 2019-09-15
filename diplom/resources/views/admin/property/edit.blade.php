@extends('adminlte::page')



@section('title', 'Dashboard')



@section('content_header')

    <h1>Редактирование категории</h1>

@stop



@section('content')
    <div class="row">
        <div class="col-lg-12">




            <form action="{{ route('admin-properties.update', $property->id) }}"
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

                        {{--<a href="{{ route('admin-properties.edit', $property->id, $value['title']) }}" class="btn btn-danger">Удалить опцию</a>--}}

                        {{--<label for="type">Выберите тип отображения в фильтре</label>
                            <select name="type">
                                    <option value="select">Выбор одного значения из выпадающего списка</option>
                                    <option value="radio">Выбор одного значения</option>
                                    <option value="checkbox">Выбор нескольких сначений</option>
                            </select>--}}

                        {{--<label for="title">Введите название опции</label>
                    <input type="text" class="form-control" name="title" value="{{$value['title']}}" placeholder="{{$value['title']}}">--}}
                        {{--<h3>Существующие значения данной опции</h3>--}}
                        @if($value['type'] != 'radio')

                        <table class="table table-striped">

                            <tbody>
                            @foreach($value['values'] as $values_key => $values_value)
                                <tr>
                                    <td><p>{{$values_value}}</p></td>
                                    {{--<td><a href="{{ route('admin-properties.edit', $property->id) }}" class="btn btn-danger">Удалить</a></td>--}}
                                    <td><button type="submit" class="btn btn-warning pull-right" value="{{$key.'%'.$values_key}}" name="value-delete">Удалить параметр опции</button></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                            {{--<button type="submit" class="btn btn-success" name="new-value">Обновить</button>--}}
                            @endif
                    </div>
                @endforeach


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="update">Обновить</button>
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
