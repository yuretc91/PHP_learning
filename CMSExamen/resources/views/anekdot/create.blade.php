@extends('layouts.main-page')

@section('content')
<div class="container">
<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">New anekdot
                <strong>form</strong>
            </h2>
            <hr>

            <form action="{{ route('anekdots.store') }}"
                  method="post"
                  enctype="multipart/form-data">
                {{--{{ csrf_field() }}--}}
                @csrf
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Author</label>
                        <input type="text" class="form-control" name="author">
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Cathegory</label>
                        <select name="cathegory_id" class="form-control">
                            @foreach($cathegories as $cathegory)
                                <option value="{{ $cathegory->id }}">{{ $cathegory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="approved" value="0">
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                        <label>Text</label>
                        <textarea class="form-control" rows="6" name="content"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="hidden" name="user_id" value="1">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection