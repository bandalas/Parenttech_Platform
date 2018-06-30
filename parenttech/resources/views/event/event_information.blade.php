<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Parent-Tech</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">

    <main class="py-4">
        <div class="col-lg-9">
            <div class="card mt-4">
                <div id="carousel-pics" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ URL::to($media->img1) }}" alt="enjoy together">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ URL::to($media->img2) }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ URL::to($media->img3) }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-pics" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-pics" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="card-body">
                    <h3 class="card-title">{{ $event->name }}</h3>
                    <h4>${{ $event->price }} MXN</h4>
                    <h5>Hora: <span class="badge badge-info">{{$event -> hour}}</span></h5>
                    <h5>Fecha: <span class="badge badge-success">{{ $event -> date }} </span></h5>
                    <p class="card-text">{{ $event->description }}</p>
                    <h6>Lugar: {{ $event -> location }}</h6>
                    <form method="GET" action=" {{ URL::to($media->shopify_link) }}">
                        <button type="submit" class="btn btn-primary btn-lg active">Comprar</button>
                    </form>
                </div>
            </div>

        </div>
    </main>
</div>
</body>
</html>
