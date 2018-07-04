<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach( $data as $data)
                @include('dashboard.event-album',['data' => $data])
            @endforeach
        </div>
    </div>
</div>