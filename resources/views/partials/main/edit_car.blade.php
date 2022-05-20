<section class="container-fluid">
    <div class="row justify-content-center p-3">
        <div class="col-7">
            <h1 class="text-uppercase"> Creazione nuova auto </h1>

            <form action="{{route("cars.update",$car)}}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="picture">Insert car picture</label>
                    <input class="form-control" type="text" name="picture" id="picture" value="{{$car->picture}}">
                </div>

                <div class="form-group">
                    <label for="numero_telaio">Numero di telaio</label>
                    <input class="form-control" type="text" name="numero_telaio" id="numero_telaio" value="{{$car->numero_telaio}}">
                </div> 

                <div class="form-group">
                    <label for="model">Modello</label>
                    <input class="form-control" type="text" name="model" id="model" value="{{$car->model}}">
                </div>

                
                <div class="form-group">
                    <label for="porte">Porte</label>
                    <input class="form-control" type="text" name="porte" id="porte" value="{{$car->porte}}">
                </div>

                <div class="form-group">
                    <label for="data_immatricolazione">Immatricolazione</label>
                    <input class="form-control" type="text" name="data_immatricolazione" id="data_immatricolazione" value="{{$car->data_immatricolazione}}">
                </div>
                
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input class="form-control" type="text" name="marca" id="marca" value="{{$car->marca}}">
                </div>
    
                <div class="form-group">
                    <label for="alimentazione">Alimentazione</label>
                    <input class="form-control" type="text" name="alimentazione" id="alimentazione"  value="{{$car->alimentazione}}"> 
                </div>

                <div class="form-group">
                    <label for="prezzo">Prezzo</label>
                    <input class="form-control" type="text" name="prezzo" id="prezzo"  value="{{$car->prezzo}}"> 
                </div>

                <button  type="submit" class="btn btn-primary" >Send</button>
            </form>
        </div>
    </div>
</section>