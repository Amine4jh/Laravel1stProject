<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFlightRequest;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function index()
    {
        $data = Flight::all();
        return view('Flights', ['data' => $data]);
    }

    public function create()
    {
        return view('Create_Flights');
    }

    public function store(CreateFlightRequest $request)
    {

        // ===== Simple Validation =====
        // $validated = $request->validate([
        //     'name' => 'required',
        // ]);

        $dataToInsert = [
            'name' => $request->name,
            'created_at' => date('Y-m-d H:i:s')
        ];
        Flight::create($dataToInsert);
        return redirect()->route('flights');
    }

    public function edit($id)
    {
        $data = Flight::find($id);
        return view('Edit_Flights', ['data' => $data]);
    }

    public function update($id, Request $request)
    {
        // === Method 1 ===
        // $flight = Flight::find($id);
        // $flight->name = $request->name;
        // $flight->save();

        // === Method 2 ===
        $dataToUpdate['name'] = $request->name;
        Flight::where('id', "=", $id)->update($dataToUpdate);

        return redirect()->route('flights');
    }

    public function delete($id)
    {
        // === Method 1 ===
        // $flight = Flight::find($id);
        // $flight->delete();

        // === Method 2 ===
        Flight::where('id', "=", $id)->delete();
        
        return redirect()->route('flights');
    }
}
