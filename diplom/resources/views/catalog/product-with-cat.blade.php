@extends('layouts.main-page')

@section('content')

    <section>
        @foreach ($cathegories as $cathegory)
        <h1>{{$cathegory->name}}</h1>
        <div id="ajaxtest"></div>

        <div class="way">
            <a href="{{ route('home')}}" class="stepWay">Главная</a>
            <span class="arrowWay">&nbsp; &gt; &nbsp;</span>
{{--            <a href="{{ route('catalog.index')}}" class="stepWay">Каталог товаров</a>--}}
            <span class="arrowWay">&nbsp; &gt; &nbsp;</span>

            <span class="stepWay">{{$cathegory->name}}</span>
            @endforeach
        </div>

    </section>
    <section class="catalog">
        <aside class="control">
            <div class="control-head"><span class="control-head-title">ФИЛЬТР:</span></div>
            <form action="{{ route('product.filtr')}}" method="get">
                @csrf
                <input type="hidden" name="id[]" value="1">
                <hr>
                <label for="cash"><span class="input-title">Стоимость</span><br>
                    <input type="text" name="cash">
                </label>
                <hr>
                @foreach ($properties as $property)
                    @foreach(json_decode($property->properties, true) as $key => $value)

                    @if($value[0]['type'] == "radio")
                            <label for={{$key}}><span class="input-title">{{$value[1]['title']}}</span><br>

                                @foreach($value[2]['values'] as $values)

                                    @foreach($values as $value_en => $value_ru)
                                <input type="radio" name={{$key}} value={{$value_en}} {{ request()->input('type') == true ? 'selected' : '' }}>{{$value_ru}}<br>
                                @endforeach
                                @endforeach

                            </label>
                        @elseif($value[0]['type'] == "select")

                        <label for={{$key}}><span class="input-title">{{$value[1]['title']}}</span><br>
                            <select name={{$key}}>
                                @foreach($value[2]['values'] as $values)
                                    @foreach($values as $value_en => $value_ru)
                                <option value="{{$value_en}}">{{$value_ru}}</option>
                                        @endforeach
                                @endforeach

                            </select>
                        </label>
                        @elseif($value[0]['type'] == "checkbox")
                            <label for={{$key}}><span class="input-title">{{$value[1]['title']}}</span><br>
                                @foreach($value[2]['values'] as $values)
                                    @foreach($values as $value_en => $value_ru)
                                <input type="checkbox" name="{{$key}}[]" value={{$value_en}}>{{$value_ru}}<br>
                                        @endforeach
                                @endforeach

                            </label>
                        @endif
                    @endforeach
                @endforeach
                <input type="submit" name="submit" value="Показать">
            </form>

        </aside>
        <article class="visual">
            <div class="visual-head"><span class="visual-head-title">СОРТИРОВКА:</span>
                <button class="visual-head-option" id="sort-cash" type="button">По цене</button>
                <a href="catalogMain.php" class="visual-head-option">По типу</a>
                <a href="catalogMain.php" class="visual-head-option">По популярности</a>
                <a href="catalogMain.php" class="down-arrow"><img src="{{asset('images/iconDownDir.png')}}" alt="down"></a>
                <a href="catalogMain.php" class="up-arrow"><img src="{{asset('images/iconUpDir.png')}}" alt="up"></a>
            </div>
            <div class="products">
                @foreach ($products as $product)

                <div class="card">
                    <div class="cardImage"><img src="{{asset('images/products/'. $product->image)}}" alt="{{$product->title}}"></div>
                    <div class="cardDescription">
                        <div class="cardName">{{$product->title}}</div>
                        <div class="cardCash"><span class="product-cash">{{$product->price. " "}}</span><span>BYN</span></div>
                    </div>

                    @foreach(json_decode($product->options, true) as $key => $value)
                        <div>{{$key}} : {{$value}}</div>
                        @endforeach

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

            $.urlParam = function(name){
                var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
                if (results==null) {
                    return null;
                }
                return decodeURI(results[1]) || 0;
            };
            $("[name]");



            var url_string = window.location.href
            var url = new URL(url_string);
            var utm = url.searchParams.get("type");
            //$("#sort-cash").on('click', function (){console.log($.urlParam())});
            $("#sort-cash").on('click', function (){console.log($("[name]"))});

            $("#sort-cash").on('click', function (){
                $.ajax({
                        type:'POST',
                        url:"{{ route('product.ajax')}}",
                        data:"blabla",
                    }).done(function(response) {
                        $("#ajaxtest").text(response);
                    });
            });
        });

    </script>
@endsection