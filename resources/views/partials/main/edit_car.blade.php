<section class="container-fluid">
    <div class="row justify-content-center p-3">
        <div class="row justify-content-center p-3">
        <div class="col-7">
            @if ($errors->any())
                
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
                
            @endif
        </div>
        <div class="col-8">
            <h1 class="text-uppercase fw-bolder"> Edit car :  <strong> {{$car->model}} -  {{$car->numero_telaio}} </strong> </h1>

            <form action="{{route("cars.update",$car)}}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="picture">Insert car picture</label>
                    <input class="form-control" type="text" name="picture" id="picture" value="{{$car->picture}}">
                </div>

                <div class="form-row justify-content-between">
                    <div class="form-group">
                        <label for="numero_telaio">Numero di telaio</label>
                        <input class="form-control" type="text" name="numero_telaio" id="numero_telaio" value="{{ old('numero_telaio') ?? $car->numero_telaio }} ">
                    </div> 
    
                    <div class="form-group">
                        <label for="model">Modello</label>
                        <input class="form-control" type="text" name="model" id="model" value="{{ old('model') ?? $car->model}}">
                    </div>
    
                    
                    <div class="form-group">
                        <label for="porte">Porte</label>
                        <input class="form-control" type="text" name="porte" id="porte" value="{{ old('porte') ?? $car->porte}}">
                    </div>
                </div>

                <div class="form-row justify-content-between">
                    
                    <div class="form-group">
                        <label for="data_immatricolazione">Immatricolazione</label>
                        <input class="form-control" type="text" name="data_immatricolazione" id="data_immatricolazione" value="{{old('data_immatricolazione') ?? $car->data_immatricolazione}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="brand_id">Brand</label>
                        <select name="brand_id" id="brand_id" class="brand_id">
                            <option value="">Select brand</option>
                            @foreach ($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                            @endforeach
                        </select>
                    </div>
        
                    <div class="form-group">
                        <label for="alimentazione">Alimentazione</label>
                        <input class="form-control" type="text" name="alimentazione" id="alimentazione"  value="{{old('alimentazione') ?? $car->alimentazione}}"> 
                    </div>

                    <div class="form-group">

                        @foreach ($colors as $colour_item)
                            <input class="form-check-input" type="checkbox" name="colour_item[]" value="{{$colour_item->id}}"
                            {{-- @if($post->categories->contains($category)) checked @endif --}}
                            {{ $car->colours->contains($colour_item) ? 'checked' : '' }}
                            >
                            <label for="colour_item" class="badge rounded-pill me-3" style="background-color: {{ $colour_item->color }}">
                                {{$colour_item->name}}
                            </label>
                            
                        @endforeach
                    </div> 

                    <div class="form-group">
                        <label for="prezzo">Prezzo</label>
                        <input class="form-control" type="text" name="prezzo" id="prezzo"  value="{{old('prezzo') ?? $car->prezzo}}"> 
                    </div>

                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-50 text-uppercase fw-bolder">Update info</button>
                </div>
            </form>
        </div>
    </div>
</section>