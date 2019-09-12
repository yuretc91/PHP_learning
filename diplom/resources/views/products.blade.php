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