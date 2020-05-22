<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\VendorCatalogue;

class VendorCatalogueController extends Controller
{
  public function __construct(){
    $this->middleware('auth:api')->except(['index', 'show']);
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = VendorCatalogue::all();
        return response()->json(['products' => $products], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), ['product_name' => 'required', 'description' => 'required', 'image_url' => 'required', 'quantity' => 'required', 'unit_price' => 'required']);
      if($validator->fails()){
        return response()->json(['error' => $validator->errors()], 401);
      }
      $input = $request->all();
      $input['user_id'] = Auth::id();

      $product = VendorCatalogue::Create($input);

      return response()->json(['product'=>$product], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = VendorCatalogue::find($id);

        return response()->json(['product'=>$product], 200);
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
        $product = VendorCatalogue::find($id);
        $product->update($request->all());

        return response()->json(['product' => $product], 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
