@foreach ($products as $product)

    <div class="card">
        <div class="cardImage"><img src="{{asset('images/products/'. $product->image)}}" alt="{{$product->title}}"></div>
        <div class="cardDescription">
            <div class="cardName input-title">{{$product->title}}</div>
            <div class="cardCash"><span class="product-cash">{{$product->price. " "}}</span><span>BYN</span></div>
        </div>
    </div>
@endforeach