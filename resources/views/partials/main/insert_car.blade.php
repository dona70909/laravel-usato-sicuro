<section class="container-fluid">
    <div class="row justify-content-center p-3">
        {{-- <div class="col-7">
            @dump($brands);
        </div> --}}
        <div class="col-7">
            <h1 class="text-uppercase fw-bolder"> New car </h1>

            <form action="{{route("cars.store")}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="picture">Insert car picture</label>
                    <input class="form-control" type="text" name="picture" id="picture">
                </div>

                <div class="form-row justify-content-between">
                    <div class="form-group">
                        <label for="numero_telaio">Numero di telaio</label>
                        <input class="form-control" type="text" name="numero_telaio" id="numero_telaio" value="{{old('numero_telaio') ?? '' }}">
                        @error('numero_telaio')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="model">Modello</label>
                        <input class="form-control" type="text" name="model" id="model" value="{{old('model') ?? '' }}">
                        @error('model')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    
                    <div class="form-group">

                        @foreach ($colors as $colour_item)
                            <input class="form-check-input" type="checkbox" name="colour_item[]" value="{{old('colour_item[]') ?? $colour_item->id}}" >
                            <label for="colour_item" class="badge rounded-pill me-3" style="background-color: {{ $colour_item->color }}">
                                {{$colour_item->name}}
                            </label>
                        @endforeach
                        
                        @error('colour_item')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div> 

                    <div class="form-group">
                        <label for="porte">Porte</label>
                        <input class="form-control" type="text" name="porte" id="porte" value="{{old('porte') ?? '' }}">
                        @error('porte')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>

                
                <div class="form-row justify-content-between">
                    <div class="form-group">
                        <label for="data_immatricolazione">Immatricolazione</label>
                        <input class="form-control" type="date" name="data_immatricolazione" id="data_immatricolazione" value="{{old('data_immatricolazione') ?? '' }}">
                        @error('data_immatricolazione')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="brand_id">Marca</label>
                        <select name="brand_id" id="brand_id" class="brand_id">
                            <option value="">Select brand</option>
                            @foreach ($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                            @endforeach
                        </select> 
                        @error('brand_id')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
            
                    <div class="form-group">
                        <label for="alimentazione">Alimentazione</label>
                        <input class="form-control" type="text" name="alimentazione" id="alimentazione" value="{{old('alimentazione') ?? '' }}"> 
                        @error('alimentazione')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="prezzo">Prezzo</label>
                        <input class="form-control" type="text" name="prezzo" id="prezzo" value="{{old('prezzo') ?? '' }}"> 
    
                        @error('prezzo')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-50 text-uppercase fw-bolder">Add new car</button>
                </div>
            </form>
        </div>
    </div>
</section>