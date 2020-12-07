<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
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
        $shops = Shop::all();
        return view('shops.index', compact('shops'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $shop = new Shop([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'sity' => $request->get('sity'),
            'adress' => $request->get('adress'),
        ]);
        $shop->save();
        return redirect('/shops')->with('success', 'Shop saved!');
    }
    public function create()
    {
        return view('shops.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('shops.edit', compact('shop'));
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
        $shop = Shop::find($id);
        $shop->name = $request->get('name');
        $shop->description = $request->get('description');
        $shop->sity = $request->get('sity');
        $shop->adress = $request->get('adress');
        $shop->save();
        return redirect('/shops')->with('success', 'Shop updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $shop = Shop::find($id);
      $shop->delete();


      return response()->json('Shop Deleted Successfully.');
    }
}
