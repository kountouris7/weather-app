@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Choose City</h3>
                        @foreach($city as $name)
                            <div class="panel-heading">
                        <a href="{{route('showWeather', [$name->id])}}">{{ $name->name }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

