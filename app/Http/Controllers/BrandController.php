<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Manufacturer;

use Illuminate\Http\Request;

class BrandController extends Controller
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
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'manufacturer_id' => $request->get('manufacturer_id'),
            'brand_id' => $request->get('brand_id'),
        ]);
        
        $brand->save();
        return redirect('/brands')->with('success', 'Brand saved!');
    }
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brands.edit', compact('brand'));
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
        $brand = Brand::find($id);
        $brand->name = $request->get('name');
        $brand->description = $request->get('description');
        $brand->manufacturer_id = $request->get('manufacturer_id');
        $brand->save();
        return redirect('/brands')->with('success', 'Brand updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $brand = Brand::find($id);
      $brand->delete();


      return response()->json('Brand Deleted Successfully.');
    }
}
