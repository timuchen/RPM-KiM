<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function data(Request $request)
    {

        if($request->has('manufacturer_id')){
            $parentId = $request->get('manufacturer_id');
            //$manufacturer = Manufacturer::where('id', $parentId)->get(['id','name']);
            $manufacturer = Manufacturer::find($parentId);
            $data= $manufacturer->brands;
            
            return ['data'=>$data];
        }
        elseif($request->has('brand_id')){
            $parentId = $request->get('brand_id');
            //$manufacturer = Manufacturer::where('id', $parentId)->get(['id','name']);
            $brand = Brand::find($parentId);
            $data= $brand->products;
            
            return ['data'=>$data];
        }

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $product = new Product([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'manufacturer_id' => $request->get('manufacturer_id'),
            'brand_id' => $request->get('brand_id'),
        ]);
        $product->save();
        return redirect('/products')->with('success', 'Product saved!');
    }
    
    public function create()
    {
        $manufacturers = Manufacturer::all();
        $brands = Brand::all();
        return view('products.create', ['manufacturers' => $manufacturers, 'brands' => $brands]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
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
        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->manufacturer_id = $request->get('manufacturer_id');
        $product->save();
        return redirect('/products')->with('success', 'Product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = Product::find($id);
      $product->delete();


      return response()->json('Product Deleted Successfully.');
    }
}
