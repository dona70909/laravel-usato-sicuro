<section class="container-fluid">
    <div class="row d-flex p-3 justify-content-center cars-wrapper">  

        
        @if(session('message'))
            <div class="alert alert-success">
                <p>{{session('message')}}</p>
            </div>
        @endif
        
        @foreach ($cars as $car)
            <div class="card car-card col-4">
                <img class="card-img-top" src="{{$car->picture}}" alt="Card image cap">

                <div class="card-body">
                    <h5 class="card-title text-uppercase">{{$car->marca}} - {{$car->model}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item condizione"></li>
                    <li class="list-group-item"> Prezzo {{$car->prezzo}} euro  </li>
                </ul>
                <div class="card-body d-flex justify-content-around">
                    <a class="card-link btn btn-secondary"  href="{{route("cars.show", $car->id)}}">Dettagli auto</a>
                    <a class="btn btn-warning" href="{{route('cars.edit',$car)}}">Edit car</a>
                    <form action="{{route("cars.destroy", $car)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Elimina </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</section>

<script type='text/javascript'>

    const cars = <?php echo json_encode($cars); ?>;

    const conditions = document.querySelectorAll('.condizione');

    
    /* call the function checkNew */
    checkNew()


    /**
     *  function that CHECK if the boolean value $car->"is_new" from PHP is true
     *  INSERT a String "Condizione: Nuova" if $car->"is_new" is true or
     *  A String "Condizione: Usata" if $car->"is_new" is false 
     * 
    */
    function checkNew() {
        for (let i= 0; i < cars.length; i++) {
            if(cars[i]['is_new'] == 1) {
                conditions[i].innerText = "Condizione: Nuova"
            } else {
                conditions[i].innerText = "Condizione: Usata"
            }
        }
    }

    
</script>
