<section class="container-fluid">
    <div class="row justify-content-center py-3">

        <div class="col-12 py-2 edit-messsage">
            @if(session('message'))
                <div class="alert alert-success">
                    <p>{{session('message')}}</p>
                </div>
            @endif
        </div>

        <div class="car-card p-2 col-8">
            <div class="car-img">
                <img class="mb-2" src="{{$car->picture}}" alt="{{$car->model}}">
            </div>
            <div class="d-flex flex-column align-items-center mb-4">
                <h1><strong class="text-uppercase">{{$car->model}}</strong> - <strong class="text-uppercase">{{$car->marca}}</strong></h1>
                <h2 class="mb-2">Informazioni auto</h2>
                <div class="info-box" style="width: 18rem;">
                    <ul class="list-group text-center list-group-flush">
                        <li class="list-group-item">Numero telaio: {{$car->numero_telaio}}</li>
                        <li class="list-group-item">Data immatricolazione:{{$car->data_immatricolazione}}</li>
                        <li class="list-group-item condizione">Condizione {{$car->is_new}}</li>
                        <li class="list-group-item">alimentazione {{$car->alimentazione}}</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</section>

<script type='text/javascript'>

    const car = <?php echo json_encode($car); ?>;

    const condition = document.querySelector('.condizione');

    
    /* call the function checkNew */
    checkNew()


    /**
     *  function that CHECK if the boolean value $car->"is_new" from PHP is true
     *  INSERT a String "Condizione: Nuova" if $car->"is_new" is true or
     *  A String "Condizione: Usata" if $car->"is_new" is false 
     * 
    */
    function checkNew() {
        if(car['is_new'] == 1) {
            condition.innerText = "Condizione: Nuova"
        } else {
            condition.innerText = "Condizione: Usata"
        }
    }

    
</script>