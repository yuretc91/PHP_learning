@extends('admin-panel')

@section('content')

        <table>

            {{--@dd($products)--}}
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->url }}</td>
                <td>{{ $product->content }}</td>
                <td>{{ $product->price }}</td>
            </tr>
            @endforeach
            {{--@else {{$products}}--}}
            {{--@endif--}}
        </table>


@endsection