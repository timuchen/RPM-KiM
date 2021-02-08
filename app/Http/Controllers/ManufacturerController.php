<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('manufacturers.index', compact('manufacturers'));
    }
    public function getAll()
    {
        $manufacturers = Manufacturer::all();
        return view('brands.create', [
            'manufacturer' => $manufacturers
          ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $manufacturer = new Manufacturer([
            'name' => $request->get('name'),
            'description' => $request->get('description'),

        ]);
        $manufacturer->save();
        return redirect('/manufacturers')->with('success', 'Manufacturer saved!');
    }
    public function create()
    {
        return view('manufacturers.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $manufacturer = Manufacturer::find($id);
        return view('manufacturers.edit', compact('manufacturer'));
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
        $request->validate([
            'name'=>'required',
        ]);
        $manufacturer = Manufacturer::find($id);
        $manufacturer->name = $request->get('name');
        $manufacturer->description = $request->get('description');
        $manufacturer->save();
        return redirect('/manufacturers')->with('success', 'Manufacturer updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $manufacturer = Manufacturer::find($id);
      $manufacturer->delete();


      return redirect('/manufacturers')->with('success', 'Manufacturer updated!');
    }
}
