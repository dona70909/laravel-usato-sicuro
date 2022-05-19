<section class="container-fluid">
    <div class="row">
        <div class="col-12 p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <h1 class="navbar-brand"> Boolcars </h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route("home")}}"> Homepage </a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="{{route("cars.index")}}"> Show all cars</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="{{route("cars.create")}}">Insert new car </a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</section>
