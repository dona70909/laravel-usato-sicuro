<section class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div>
                <h1>
                    Auto Singola
                </h1>
                <a href="{{route("home")}}">Home page</a>
                <a href="{{route("cars.index")}}">Lista Completa</a>
                <h3>
                    {{$car->model}} - {{$car->marca}}
                </h3>
            </div>
        </div>
    </div>
</section>