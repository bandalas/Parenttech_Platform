<div class="card-deck mb-3 text-center">
    @foreach($data as $event)
        @include('event.single_future_event', ['data' => $event])
    @endforeach
</div>
