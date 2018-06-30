<div id="media-form">

    <form method="POST" action="{{ route('events-media.store', ['id'=>$id]) }}">
        {{ csrf_field() }}

         <div class="form-group">
            <label for="thumbnail">Link del thumbnail</label>
            <input type="text" class="form-control" id="thumbnail" name="thumbnail" placeholder="Link">
            <i><small id="inputNameHelp" class="form-text text-muted">(Ej. https://i.imgur.com/kXbzckz.png)</small></i>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="img1">Link primera imagen</label>
                    <input type="text" class="form-control" id="img1" name="img1" placeholder="Link">
                    <i><small id="inputNameHelp" class="form-text text-muted">(Ej. https://i.imgur.com/CEzRKot.png)</small></i>
                </div>
                <div class="col">
                    <label for="img2">Link segunda imagen</label>
                    <input type="text" class="form-control" id="img2" name="img2" placeholder="Link">
                    <i><small id="inputNameHelp" class="form-text text-muted">(Ej. https://i.imgur.com/mwPruDP.png)</small></i>
                </div>
                <div class="col">
                    <label for="img3">Link tercera imagen</label>
                    <input type="text" class="form-control" id="img3" name="img3" placeholder="Link">
                    <i><small id="inputNameHelp" class="form-text text-muted">(Ej. https://i.imgur.com/Xgu0g8P.png)</small></i>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="shopify_link">Link a Shopify</label>
            <input type="text" class="form-control" id="shopify_link" name="shopify_link" placeholder="Link">
        </div>
        <button type="submit" class="btn btn-primary">
            {{ __('Guardar') }}
        </button>
    </form>
</div>