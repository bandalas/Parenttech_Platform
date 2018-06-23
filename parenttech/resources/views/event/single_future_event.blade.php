<div class="card mb-4 box-shadow">
    <div class="card-header">
        <h4 class="my-0 font-weight-normal">{{ $event -> name }}</h4>
    </div>
    <img class="card-img-top img-fluid" src="{{URL::to($event -> thumbnail )}}" alt="Card image cap">
    <div class="card-body">
        <h1 class="card-title pricing-card-title">${{ $event -> price }}<small class="text-muted">MXN</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
            <li>{{ $event -> location }}</li>
            <li>{{ $event -> date }}</li>
            <li>{{ $event -> hour }}</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Ver</button>
    </div>
</div>