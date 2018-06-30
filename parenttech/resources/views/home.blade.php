@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach( $data as $data)
            @include('dashboard.user-album',['data' => $data])
        @endforeach
    </div>
</div>
@endsection
