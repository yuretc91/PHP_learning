@extends('admin-panel')

@section('content')

        <table>


            @foreach($products as $product)
            <tr>
                <td>{{ $product->cathegory->name }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->url }}</td>
                <td>{{ $product->content }}</td>
                <td>{{ $product->price }}</td>
            </tr>
            @endforeach

        </table>


@endsection