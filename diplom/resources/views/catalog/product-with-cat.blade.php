@extends('layouts.main-page')

@section('content')

    <section>
        @foreach ($cathegories as $cathegory)
        <h1>{{$cathegory->name}}</h1>
        <div id="ajaxtest"></div>

        <div class="way">
            <a href="/" class="stepWay input-value">Главная</a>
            <span class="arrowWay input-value">&nbsp; &gt; &nbsp;</span>
            {{--<a href="/catalog/" class="stepWay input-value">Каталог товаров</a>
            <span class="arrowWay input-value">&nbsp; &gt; &nbsp;</span>--}}
            <span class="stepWay input-value">{{$cathegory->name}}</span>
            @endforeach
        </div>

    </section>
    <section class="catalog">
        <nav class="control">
            <div class="control-head"><span class="control-head-title">ФИЛЬТР:</span></div>
            <form action="{{ route('product.filtr')}}" method="get" class="filrt-form">
                @csrf
                <input type="hidden" name="id[]" value="1">
                <hr>
                {{--<label for="cash"><span class="input-title">Стоимость</span><br>
                    <input type="text" name="cash">
                </label>
                <hr>--}}
                @foreach ($properties as $property)

                    @foreach(json_decode($property->properties, true) as $key => $value)

                    @if($value['type'] == "radio")
                            <label for={{$key}}><span class="input-title">{{$value['title']}}</span><br>

                                @foreach($value['values'] as $value_en_name => $value_ru_name)


                                <input type="radio" class="input-value" name={{$key}} value={{$value_en_name}}><span class="input-value">{{$value_ru_name}}</span><br>

                                @endforeach

                            </label>
                            <hr>
                        @elseif($value['type'] == "select")

                        <label for={{$key}}><span class="input-title">{{$value['title']}}</span><br>
                            <select name={{$key}}>
                                {{--{{dd($value['values'])}}--}}
                                @foreach($value['values'] as $value_en_name => $value_ru_name)


                                <option class="input-value" value="{{$value_en_name}}"><span class="input-value">{{$value_ru_name}}</span></option>

                                @endforeach

                            </select>
                        </label>
                            <hr>
                        @elseif($value['type'] == "checkbox")
                            <label for={{$key}}><span class="input-title">{{$value['title']}}</span><br>
                                @foreach($value['values'] as $value_en_name => $value_ru_name)

                                <input type="checkbox" name="{{$key}}[]" value={{$value_en_name}}><span class="input-value">{{$value_ru_name}}</span><br>

                                @endforeach

                            </label>
                            <hr>
                        @endif
                    @endforeach
                @endforeach
                <input type="submit" name="submit" value="Показать" class="input-submit btn_orange-black">
            </form>

        </nav>
        <article class="visual">
            <div class="visual-head"><span class="visual-head-title">СОРТИРОВКА:</span>
                <button class="visual-head-option input-value" id="sort-cash" type="button">По цене</button>
                <div class="ordering-arrows">
                    <button class="down-arrow ordering-active"><img src="{{asset('images/iconDownDir.png')}}" alt="down"></button>
                    <button class="up-arrow"><img src="{{asset('images/iconUpDir.png')}}" alt="up"></button>
                </div>

            </div>
            <div class="products">
                @foreach ($products as $product)

                <div class="card">
                    <div class="cardImage"><img src="{{asset('images/products/'. $product->image)}}" alt="{{$product->title}}"></div>
                    <div class="cardDescription">
                        <div class="cardName input-title">{{$product->title}}</div>
                        <div class="cardCash"><span class="product-cash">{{$product->price. " "}}</span><span>BYN</span></div>
                    </div>
                    {{--Для проверки работоспособности фильтра--}}
                    {{--@foreach(json_decode($product->options, true) as $key => $value)
                        <div>{{$key}} : {{$value}}</div>
                        @endforeach--}}
                </div>
            @endforeach

            </div>
        </article>
    </section>

    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $.extend({
                getUrlVars: function(){
                    var vars = [], hash;
                    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                    for(var i = 0; i < hashes.length; i++)
                    {
                        hash = hashes[i].split('=');

                        if (hash[0].indexOf('%5B%5D') != -1,hash[0].indexOf('id%5B%5D') == -1){
                            hash[0] = hash[0].replace('%5B%5D','' + i +'%%%');
                        }
                        vars.push(hash[0]);
                        vars[hash[0]] = hash[1];
                    }
                    return vars;
                },
                getUrlVar: function(name){
                    return $.getUrlVars()[name];
                }
            });
            console.log($.getUrlVars());
                //Удаляем ненужные символы
            if ($.getUrlVar(1) != undefined){
                var allVars = $.getUrlVars();
                var names = [];
                var values = [];
                $.each(allVars,function(index,value){
                    $value = $.getUrlVar(value);
                    if ($value.includes('+')) {
                        $value = $value.split('+').join(" ");
                    }
                    values.push($value);
                    if (value.includes('%5B%5D')) {
                        value = value.replace('%5B%5D','');
                    }
                    names.push(value);
                });
            }else{
                var id = $.getUrlVar(0).slice(-1);
                console.log(id);
            }
            var orderingArrow = $('.ordering-active').attr('class').replace(' ordering-active', '');
            //$("#sort-cash").on('click', function (){console.log()});

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            function sorting(e){
                e.preventDefault();
                //$('.down-arrow').addClass("ordering-active");
                $.ajax({
                    type:'POST',
                    url:'/catalog/filtr',
                    data:{names:names, values:values, ordering:orderingArrow, id:id},
                    success:function(data){
                        $('.products').empty();
                        $('.products').html(data.view);
                    }
                });
            }
            $("#sort-cash").click(sorting);
        });

    </script>
@endsection