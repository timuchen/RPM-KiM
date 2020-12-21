<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\ShopMonitoring;
use App\Models\Manufacturer;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Price;
use Illuminate\Http\Request;

class ShopMonitoringController extends Controller
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
        $shopmonitorings = ShopMonitoring::all();
        return view('shopmonitorings.index', compact('shopmonitorings'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $shopmonitoring = new ShopMonitoring([
            'shop_id' => $request->get('shop_id'),
            'user_id' => $request->get('user_id'),
        ]);
        $shopmonitoring->save();
        $id = $shopmonitoring->id;
        return redirect('/shopmonitorings/' . $id . '/edit')->with('success', 'Shop Monitoring saved!');
    }

    public function create()
    {
        $shops = Shop::all();
        
        return view('shopmonitorings.create', ['shops' => $shops]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $manufacturers = Manufacturer::all();
        $brands = Brand::all();
        $products = Product::all();
        $shopmonitoring = ShopMonitoring::find($id);
        return view('shopmonitorings.edit', ['shopmonitoring'=>$shopmonitoring, 'manufacturers' => $manufacturers, 'brands' => $brands, 'products' => $products]);
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
        $shopmonitoring = ShopMonitoring::find($id);
        $shopmonitoring->name = $request->get('name');
        $shopmonitoring->description = $request->get('description');
        $shopmonitoring->sity = $request->get('sity');
        $shopmonitoring->adress = $request->get('adress');
        $shopmonitoring->save();
        return redirect('/shopmonitorings')->with('success', 'ShopMonitoring updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $shopmonitoring = ShopMonitoring::find($id);
      $shopmonitoring->delete();
      return redirect('/shopmonitorings')->with('success', 'Shop Monitoring deleted!');
    }

    public function pricelist($id)
    {
        $shopmonitoring = Shopmonitoring::find($id);
        $prices = Price::all();
        return view('prices.index', compact('prices'));
    }
}
