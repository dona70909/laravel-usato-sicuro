<section class="container-fluid">
    <div class="row">  
        @foreach ($cars as $car)
            <div class="card col-2">
                <img class="card-img-top" src="{{$car->picture}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$car->marca}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$car->numero_telaio}}</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a class="card-link"  href="{{route("cars.show", $car->id)}}">Dettagli auto</a>
                </div>
            </div>
        @endforeach

        {{--   <div class="buttons">
            <button><a href="{{route("home")}}">Torna alla Home</a></button>
            <button><a href="{{route("cars.create")}}">Aggiungi Auto</a></button>
        </div> --}}
    </div>
</section>