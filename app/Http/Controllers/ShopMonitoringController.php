<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\ShopMonitoring;
use App\Models\Manufacturer;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Price;
use Illuminate\Http\Request;
use DateTime;

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
        $colProducts = Product::all();
        $colProducts = $colProducts->count();
        $shopmonitorings = ShopMonitoring::all();
        return view('shopmonitorings.index', ['shopmonitorings'=>$shopmonitorings, 'colproducts'=>$colProducts,]);
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'shop_id' => 'required',
        ]);

        if ($request->hasFile('image')){
            $datePrefix = new DateTime();
            $datePrefix = $datePrefix->format('y/m/d/');

            $file = $request->file('image');
            $upload_folder = '/public/uploads/' . $datePrefix;
            $fileName = $file->getClientOriginalName();
            $file->move(public_path().$upload_folder, $fileName);
        }

        $shopmonitoring = new ShopMonitoring([
            'shop_id' => $request->get('shop_id'),
            'user_id' => $request->get('user_id'),
            'image' => $upload_folder . $fileName,
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
        return view('shopmonitorings.edit', [
            'shopmonitoring'=>$shopmonitoring, 
            'manufacturers' => $manufacturers, 
            'brands' => $brands, 
            'products' => $products,
         ]);
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

        $shopmonitoring = ShopMonitoring::find($id);
        $shopmonitoring->name = $request->get('name');
        $shopmonitoring->description = $request->get('description');
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

    public function show($id)
    {
        $shopmonitoring = Shopmonitoring::find($id);
        $prices = Price::all();
        return view('prices.index', compact('prices'));
    }

}
