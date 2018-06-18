<html>
<head>
    <link href="{{ URL::asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
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
                    <a href="">Futuros eventos</a>
                </li>
                <li>
                    <a href="">Eventos pasados</a>
                </li>
                <li>
                    <a href="">Regístrate</a>
                </li>
                <li>
                    <a href="">Iniciar sesión</a>
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
                        <span class="strong-text">ParenTTech</span> es una empresa enfocada a entender, crear y facilitar
                        nuevos vínculos de valor para promover y mejorar la relación entre padres e hijos.<br><br>
                        A través de la investigación del comportamiento humano y el uso de nuevas tecnologías, generamos
                        conciecia y detonamos oportunidades de convivencia.<br><br>
                        ParenTTech es una plataforma iniciada por padres de familia que disfrutan e invierten tiempo de
                        calidad para estar cerca de sus hijos; padres que consideran que la tecnología no necesariamente
                        genera separación.
                    </p>
                </div>
            </div>
        </div>
    </div>


</body>


</html>