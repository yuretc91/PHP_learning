@extends('layouts.main-page')

@section('content')

    <section>
{{dd($cathegories)}}
        <h1>All products</h1>

        <div class="way">
            <a href="/" class="stepWay">Главная</a>
            <span class="arrowWay">&nbsp; &gt; &nbsp;</span>
            <span href="{{route('catalog.index')}}" class="stepWay">Каталог товаров</span>
        </div>

    </section>
    <section class="catalog">
        <aside class="control">
            <div class="control-head"><span class="control-head-title">КАТЕГОРИИ:</span></div>

                <hr>
                @foreach ($cathegories as $cathegory)
                <a href="/catalog/{{$cathegory->id}}" class="input-title">{{$cathegory->name}}</a><br>
                @endforeach
                <hr>


        </aside>
        <article class="visual">
            <div class="visual-head"><span class="visual-head-title">СОРТИРОВКА:</span>
                <button class="visual-head-option" id="sort-cash" type="button">По цене</button>
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
                </div>
            @endforeach

            </div>
        </article>
    </section>

    {{--<script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>--}}
    <script>
        $(document).ready(function () {
            $.extend({
                getUrlVars: function(){
                    var vars = [], hash;
                    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                    for(var i = 0; i < hashes.length; i++)
                    {
                        hash = hashes[i].split('=');
                        vars.push(hash[0]);
                        vars[hash[0]] = hash[1];
                    }
                    return vars;
                },
                getUrlVar: function(name){
                    return $.getUrlVars()[name];
                }
            });

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
                $.ajax({
                    type:'POST',
                    url:'/catalog/filtr',
                    data:{names:names, values:values, ordering:orderingArrow},
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