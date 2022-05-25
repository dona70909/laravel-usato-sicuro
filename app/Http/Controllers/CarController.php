<?php

namespace App\Http\Controllers;
use App\Car;
use App\Model\Brand;
use App\Model\Colour;
use ColoursTableSeeder;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars= Car::all();
        $colors = Colour::all();
        return view("cars.index", ["cars" => $cars,'colors' => $colors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view("cars.create",compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $data = $request->all();

        $request->validate([
            'numero_telaio' => 'required',
            'model' => 'required|min:3',
            'porte' => 'required|integer|max:5',
            'data_immatricolazione' => 'required|date',
            'alimentazione' => 'required|min:3',
            'brand_id' => 'required|',
            'prezzo' => 'required|numeric|min:4',
        ]);

        $car = new Car();
        
        $car->numero_telaio = $data["numero_telaio"];
        $car->model = $data["model"]; 
        $car->porte = $data["porte"];
        $car->data_immatricolazione = $data["data_immatricolazione"];
        $car->brand_id = $data["brand_id"];
        $car->alimentazione = $data["alimentazione"];
        $car->prezzo = $data["prezzo"];
        $car->picture = $data["picture"];
        $car->save();

        return redirect()->route("cars.show", $car->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car= Car::findOrFail($id);
        $brand = Brand::all();
        return view("cars.show", ["car" => $car , "brand" => $brand ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Car $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $brands = Brand::all();
        $colors = Colour::all();
        return view('cars.edit',["car" => $car , "brands" => $brands , 'colors' => $colors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Car $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $data = $request->all();

        $request->validate([
            'numero_telaio' => 'required',
            'model' => 'required|min:3',
            'porte' => 'required|integer|max:5|numeric',
            'data_immatricolazione' => 'required|date',
            'alimentazione' => 'required|min:3',
            'prezzo' => 'required|numeric|min:4',
        ]);
        
        $car->numero_telaio = $data["numero_telaio"];
        $car->model = $data["model"]; 
        $car->porte = $data["porte"];
        $car->data_immatricolazione = $data["data_immatricolazione"];
        $car->alimentazione = $data["alimentazione"];
        $car->prezzo = $data["prezzo"];
        $car->picture = $data["picture"];
        $car->save();

        return redirect()->route("cars.show", $car)->with('message', $car->model .' modified with success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Car $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        
        return redirect()->route("cars.index",$car)->with('message', $car->model .' deleted with success');
    }
}
