@extends('layouts.main-page')

@section('content')

    <section>
        <h1>Моноподы для селфи</h1>
        <div class="way">
            <span class="stepWay">Главная</span>
            <span class="arrowWay">&nbsp; &gt; &nbsp;</span>
            <span class="stepWay">Каталог товаров</span>
            <span class="arrowWay">&nbsp; &gt; &nbsp;</span>
            <span class="stepWay">Моноподы для селфи</span>
        </div>

    </section>
    <section class="catalog">
        <aside class="control">
            <div class="control-head"><span class="control-head-title">ФИЛЬТР:</span></div>
            <form action="">
                <hr>
                <label for="cash"><span class="input-title">Стоимость</span><br>
                    <input type="text" name="cash">
                </label>
                <hr>
                <label for="color"><span class="input-title">Цвет</span><br>
                    <input type="checkbox" name="color" value="Black">Чёрный<br>
                    <input type="checkbox" name="color" value="White">Белый<br>
                    <input type="checkbox" name="color" value="Blue">Синий<br>
                </label>
                <hr>
                <label for="bluetooth"><span class="input-title">Bluetooth</span><br>
                    <input type="radio" name="bluetooth" value="true">Есть<br>
                    <input type="radio" name="bluetooth" value="false">Нет<br>
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
                <div class="card">
                    <div class="cardImage"><img src="{{asset('images/products/item1.png')}}" alt="item1"></div>
                    <div class="cardDescription">
                        <div class="cardName">Любительская селфи-палка</div>
                        <div class="cardCash">500 р.</div>
                    </div>

                </div>
                <div class="card">
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

                </div>
            </div>
        </article>
    </section>



@endsection