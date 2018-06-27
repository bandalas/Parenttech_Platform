<html>
<head>
    <link href="{{ URL::asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div class="container">
        <nav class="main-nav">
            <a href="/" class="navbar-brand">
                <img src="{{ URL::asset('img/parenttechlogo.png') }}">
            </a>
            <ul class="main-nav-items">
                <li>
                    <a href="#about">Nosotros</a>
                </li>
                <li>
                    <a href="#future-events">Futuros eventos</a>
                </li>
                <li>
                    <a href="#past-events">Eventos pasados</a>
                </li>
                <li>
                    <a href="{{ URL::route('register') }}">Regístrate</a>
                </li>
                <li>
                    <a href="{{ URL::route('login') }}">Iniciar sesión</a>
                </li>
            </ul>

        </nav>
        <header id="main-header">

                <h1>Disfruta de nuevas experiencias<br>
                    en compañía de tus hijos.
                </h1>
                <button type="button" class="btn btn-primary btn-lg">Comienza</button>

        </header>
        <div id="main-content">
            <div id="about">
                <h1 class="section-title">¿Quiénes somos?</h1>
                <div class="left-box">
                    <p>
                        <span class="strong-text">Parent-Tech</span> es una empresa enfocada a entender, crear y facilitar
                        nuevos vínculos de valor para promover y mejorar la relación entre padres e hijos.<br><br>
                        A través de la investigación del comportamiento humano y el uso de nuevas tecnologías, generamos
                        conciecia y detonamos oportunidades de convivencia.<br><br>
                        ParenTTech es una plataforma iniciada por padres de familia que disfrutan e invierten tiempo de
                        calidad para estar cerca de sus hijos; padres que consideran que la tecnología no necesariamente
                        genera separación.
                    </p>
                </div>
                <div class="right-box">
                    <div id="carousel-about" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ URL::asset('img/enjoy_together.jpg') }}" alt="enjoy together">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('img/explore_together.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ URL::asset('img/learn_together.jpg') }}" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="future-events">
                @include('event.list_future_events',['data'=>$futureevents])
            </div>

            <div id="past-events">
                @foreach( $pastevents as $event => $data)
                    <div class="card events" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">
                                <span class="card-title">{{ $data -> name }}</span><br>
                                {{ $data -> date  }} <br>
                                {{ $data -> location }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</body>


</html>