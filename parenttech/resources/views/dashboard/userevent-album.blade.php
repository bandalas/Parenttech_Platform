<div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top" src="{{ URL::to($data -> thumbnail) }}" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
        <div class="card-body">
            <p class="card-text">{{ $data -> description }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <form method="GET" action="{{  route('ev.show', ['id' => $data->event_id]) }}">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Ver</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>