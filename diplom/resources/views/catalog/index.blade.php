@extends('layouts.main-page')

@section('content')

    <section>

        <h1>All products</h1>

        <div class="way">
            <a href="../" class="stepWay">Главная</a>
            <span class="arrowWay">&nbsp; &gt; &nbsp;</span>
            <span class="stepWay">Каталог товаров</span>
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

                </div>
            @endforeach
                {{--<div class="card">
                    <div class="cardImage"><img src="{{asset('images/products/item2.png')}}" alt="item2"></div>
                    <div class="cardDescription">
                        <div class="cardName">Профессиональная селфи-палка</div>
                        <div class="cardCash">1500 р.</div>
                    </div>

                </div>
                <div class="card">
                    <div class="cardImage"><img src="{{asset('images/products/item3.png')}}" alt="item3"></div>
                    <div class="cardDescription">
                        <div class="cardName">Непотопляемая селфи-палка</div>
                        <div class="cardCash">2500 р.</div>
                    </div>

                </div>
                <div class="card">
                    <div class="cardImage"><img src="{{asset('images/products/item4.png')}}" alt="item4"></div>
                    <div class="cardDescription">
                        <div class="cardName">Селфи-палка "Следуй за мной"</div>
                        <div class="cardCash">4900 р.</div>
                    </div>

                </div>--}}
            </div>
        </article>
    </section>



@endsection