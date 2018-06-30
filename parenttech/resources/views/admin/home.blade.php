@extends('layouts.app')
@section('content')

    <div class="container">
        <form  method="GET" action="{{ route('events.create') }}">
            <button type="submit" class="btn btn-info float-right">Crear Evento</button>
        </form>
        @include('dashboard.album',['data'=>$data])
    </div>
@endsection
