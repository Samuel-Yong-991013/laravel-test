<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Rules\Uppercase;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SELECT * FROM TABLE cars
        // $cars = Car::where('name', '=', 'Audi')
        //     ->get();;
         //possible to just do this right into the view like: return view (Car::all())

        // the 'chunk' command is used when there are simply too many records to display, memory will be locked.
        // the 'chunk command prevents that by displaying a finite amount
        // $cars = Car::chunk(2, function ($cars){
        //     foreach($cars as $car) {
        //         print_r($car);
        // //     }
        // });

        $cars = Car::all();

        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $car = new Car;
        // $car->name = $request->input('name');
        // $car->founded = $request->input('founded');
        // $car->description = $request->input('description');
        // $car->save();

        $request->validate([
            'name' => 'required|unique:cars',
            'founded' => 'required|integer|min:0|max:2021',
            'description' => 'required',
        ]);

        //if the validation passes, it will proceed
        //else, it will throw a ValidationException

        $car = Car::create([
            'name' => $request->input('name'), 
            'founded' => $request->input('founded'), 
            'description' => $request->input('description')
        ]);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);

        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::where('id', $id)->update([
                'name' => $request->input('name'), 
                'founded' => $request->input('founded'), 
                'description' => $request->input('description')
        ]);
        
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect('/cars');
    }
}
