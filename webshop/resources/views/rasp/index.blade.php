@extends('admin-panel')

@section('content')
@if(Session::has("success"))
    <div class="alert alert-light">
        {{Session::get("success")}}
    </div>
@endif

<table class="table table-striped">
    <tr>
        <td>Your country</td>
        <td>{{$api_result_geo['country_name']}}</td>
    </tr>
    <tr>
        <td>Capital of your country</td>
        <td>{{$api_result_geo['location']['capital']}}</td>
    </tr>
    <tr>
        <td>Flag of your country</td>
        <td><img src="{{$api_result_geo['location']['country_flag']}}" alt="flag" style="width: 100px"></td>
    </tr>
</table>
{{--<table class="table table-striped">
    @foreach($api_result_rasp['segments'] as $cities)
        <tr>
            <td>From</td>
            <td>{{$cities['from']['title']}}</td>
            <td>To</td>
            <td>{{$cities['to']['title']}}</td>
        </tr>
        @endforeach
</table>--}}
<table class="table table-striped">

    @foreach($api_result_regions['countries'] as $country)
        <tr>
{{dd($country)}}
            <td>
                {{$country['title']}}
            </td>


            <td>
                {{$country['code']}}
            </td>

        </tr>

    @endforeach
</table>





@endsection