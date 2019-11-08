@extends('layouts.main')

@section('content')

            <post-component :postdata="{{json_encode($post_data)}}"></post-component>


@endsection