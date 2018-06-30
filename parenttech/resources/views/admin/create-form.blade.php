<div class="form-container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('events.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputName">Nombre del evento</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
            <i><small id="inputNameHelp" class="form-text text-muted">(Ej. Torneo de FIFA)</small></i>
        </div>

        <div class="form-group">
            <label for="description">Descripción del evento</label>
            <textarea class="form-control" id="description" name="description" rows="3" ></textarea>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
                    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
                    <script>
                        $( function() {
                            $( "#date" ).datepicker({

                            });
                        } );
                    </script>
                    <label for="date">Fecha del evento</label><br>
                    <input type="text" class="form-control" id="date" name="date">
                </div>
                <div class="col">
                    <label for="hour">Hora </label><br>
                    <input type="time" class="form-control" name="hour" id="hour">
                </div>
                <div class="col">
                    <label for="price">Precio </label>
                    <div class="input-group mb-2" >

                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="number" class="form-control" id="price" name="price" placeholder="0.00">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="location">Lugar/Dirección</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Dirección">
            <i><small id="inputNameHelp" class="form-text text-muted">
                    (Ej. ARENA Fashion Drive.
                    Av. Batallón de San Patricio 1000, 3er Piso, San Pedro Garza García)</small></i>
        </div>
        <button type="submit" class="btn btn-primary">
            {{ __('Guardar') }}
        </button>

    </form>
</div>


