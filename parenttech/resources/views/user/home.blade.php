@extends('user.layout')

@section('content')
    <div class="container">
        @foreach($event as $key => $data)
            <table class="table table-striped">
                <tr><td>{{$data->name}}</td></tr>
                <tr>
                    <td>{{$data->date}}</td>
                    <td>{{$data->hour}}</td>
                </tr>
                <tr><td>{{$data->location}}</td></tr>
                <tr><td>{{$data->description}}</td></tr>
            </table>
        @endforeach
    </div>
@endsection