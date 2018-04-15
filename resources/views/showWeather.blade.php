@extends('layouts.app')

@section('content')
    @include('layouts.search')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="card-header">
                       <a href="#">{{$cityname .", ". $country}}</a> <br>
                        <div class="card-body">
                        {{$today}}<br>
                        {{"Max:" ." ". $temp_max . "C"}}<br>
                        {{"Min:" ." ". $temp_min . "C"}}<br>
                        {{$icon}}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection