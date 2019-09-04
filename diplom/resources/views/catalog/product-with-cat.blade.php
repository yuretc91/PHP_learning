@extends('layouts.main-page')

@section('content')

    <section>
        @foreach ($cathegories as $cathegory)
        <h1>{{$cathegory->name}}</h1>

        <div class="way">
            <a href="../../" class="stepWay">Главная</a>
            <span class="arrowWay">&nbsp; &gt; &nbsp;</span>
            <a href="../catalog" class="stepWay">Каталог товаров</a>
            <span class="arrowWay">&nbsp; &gt; &nbsp;</span>

            <span class="stepWay">{{$cathegory->name}}</span>
            @endforeach
        </div>

    </section>
    <section class="catalog">
        <aside class="control">
            <div class="control-head"><span class="control-head-title">ФИЛЬТР:</span></div>
            <form action="{{ route('product.filtr')}}" method="post">
                @csrf
                <hr>
                <label for="cash"><span class="input-title">Стоимость</span><br>
                    <input type="text" name="cash">
                </label>
                <hr>
                <label for="color"><span class="input-title">Цвет</span><br>
                    <input type="checkbox" name="color" value="black">Чёрный<br>
                    <input type="checkbox" name="color" value="white">Белый<br>
                    <input type="checkbox" name="color" value="green">Зелёный<br>
                </label>
                <hr>
                <label for="gyroscope"><span class="input-title">Gyroscope</span><br>
                    <input type="radio" name="gyroscope" value="true">Есть<br>
                    <input type="radio" name="gyroscope" value="false">Нет<br>
                </label>
                <label for="microphone"><span class="input-title">Microphone</span><br>
                    <input type="radio" name="microphone" value="true">Есть<br>
                    <input type="radio" name="microphone" value="false">Нет<br>
                </label>
                <label for="accelerometer"><span class="input-title">Accelerometer</span><br>
                    <input type="radio" name="accelerometer" value="true">Есть<br>
                    <input type="radio" name="accelerometer" value="false">Нет<br>
                </label>
                <input type="submit" name="submit" value="Показать">
            </form>

        </aside>
        <article class="visual">
            <div class="visual-head"><span class="visual-head-title">СОРТИРОВКА:</span>
                <a href="catalogMain.php" class="visual-head-option">По цене</a>
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
                        <div class="cardCash">{{$product->price . ' BYN'}}</div>
                    </div>

                    @foreach(json_decode($product->options, true) as $key => $value)
                        <div>{{$key}} : {{$value}}</div>
                        @endforeach

                </div>
            @endforeach

            </div>
        </article>
    </section>



@endsection