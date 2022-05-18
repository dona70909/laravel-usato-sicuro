<section class="container-fluid">
    <div class="row cars-wrapper">  
        @foreach ($cars as $car)
            <div class="card car-card col-2">
                <img class="card-img-top" src="{{$car->picture}}" alt="Card image cap">

                <div class="card-body">
                    <h5 class="card-title text-uppercase">{{$car->marca}} - {{$car->model}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item condizione"></li>
                    <li class="list-group-item"> Prezzo {{$car->prezzo}} euro  </li>
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

<script type='text/javascript'>

    const cars = <?php echo json_encode($cars); ?>;

    const conditions = document.querySelectorAll('.condizione')
    
    function checkNew() {
        for (let i= 0; i < cars.length; i++) {
            if(cars[i]['is_new'] == 1) {
                conditions[i].innerText = "Condizione: Nuova"
            } else {
                conditions[i].innerText = "Condizione: Usata"
            }
        }
    }
    
    checkNew()
    
</script>