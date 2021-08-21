<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        try {
           
            return response()->json([
                'success' => true,
                'products'   =>$products
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'success'=>false,
                'message'=>$ex->getMessage(),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator= Validator::make($request->all(),[
            "category"=>'required|min:4',
            "name"=> 'required|min:3',
            "price"=>'required',
            "quantity"=>'required'
        ]);

  if ($validator->fails()) {
    return response()->json([
        'success'=>false,
        'message'=>$validator->errors()->all()
    ]);
  }
  else {
    try {

        $Data=$request->all();

        if (  Product::create($Data)) {
            return response()->json([
                'success'=>true,
                'message'=>'New Product Successfully created',
                'products'=>$Data
            ],200);
        }
        else {
            return response()->json([
                'success'=>false,
                'message'=>"New Product Successfully not created"
            ]);
        }

        } catch (Exception $th) {
            //throw $th;
            return response()->json([
                'success'=>false,
                'message'=>$th->getMessage()
            ]);
        }

    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
      $product =Product::findOrFail($id);
        if ($product) {
            return response()->json([
                'success' => true,
                'products'    => $product
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'Unauthorized',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request,$id)
    {

        // return response->json([
        //     'request'->$request->all,
        // ])
        try {
            $data=$request->all();

                $product=Product::find($id);
               $product->category=$request->category;
               $product->name="mango";
              $product->price="200";
               $product->quantity="1kg";

              $product->save();

                  return response()->json([
                      'success' => true,
                      'message' => 'Yay! Product has been successfully updated!',
                      'product'    =>$product,
                      "data"=>$data
                  ]);
              } catch (Exception $e) {
                  return response()->json([
                      'success' => false,
                      'message' => 'Oops! Unable to update product.',
                      "errors" =>$e->getMessage(),
                      "data"=>$data
                  ]);
              }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Product::find($id)->delete();

            return response()->json([
                'success' => true,
                'message' => 'Yay! Product has been successfully removed!',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Oops! Unable to delete this Product.',
                'error'=>$e->getMessage()
            ]);
        }
    }
  
}
