<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Price;
use App\Models\ShopMonitoring;
use Illuminate\Http\Request;

class PriceController extends Controller
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
        $prices = Price::all();
        return view('prices.index', compact('prices'));
    }

    public function create()
    {
        $manufacturers = Manufacturer::all();
        $brands = Brand::all();
        $products = Product::all();
        $shopmonitoring = ShopMonitoring::all();
        return view('prices.create', ['manufacturers' => $manufacturers, 'brands' => $brands, 'products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price = new Price([
            'name' => $request->get('name'),
            'shopmonitoring_id' => $request->get('shopmonitoring_id'),
            'shop_id' => $request->get('shop_id'),
            'manufacturer_id' => $request->get('manufacturer_id'),
            'brand_id' => $request->get('brand_id'),
            'product_id' => $request->get('product_id'),
            'user_id' => $request->get('user_id'),
            'price' => $request->get('price'),
            'discount' => $request->get('discount'),
        ]);
        $price->save();

        return response()->json('Price Added Successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $price = Price::find($id);
        return response()->json($price);
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
        $price = Price::find($id);
        $price->name = $request->get('name');
        $price->description = $request->get('description');
        $price->save();


        return response()->json('Price Updated Successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $price = Price::find($id);
      $price->delete();


      return response()->json('Price Deleted Successfully.');
    }
}
