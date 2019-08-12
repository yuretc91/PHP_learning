@extends('layouts.main-page')

@section('content')


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">All anekdots</h2>
                    <hr>
                </div>
    @foreach($anekdots as $anekdot)

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <h2>{{ $anekdot->title }}
                        <br>
                        <small>{{ $anekdot->created_at }}</small>
                    </h2>
                    <p>{{ $anekdot->content }}</p>
                    <hr>
                    <small>{{ $anekdot->cathegory->name }}</small>
                </div>
            </div>
        </div>

    </div>
    @endforeach
            </div>
            </div>
            </div>

@endsection