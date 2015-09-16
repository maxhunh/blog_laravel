<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products; // NOTE: Call model class to use
use App\Http\Requests;
use App\Http\Requests\CheckProductsRequest; // NOTE: use this class instand for  Request class
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    // *
    //  * Display a listing of the resource.
    //  *
    //  * @return Response

    public function index()
    {
      $list_product = Products::all();
      return view('products.index')->with('list_product', $list_product);
    }

    // *
    //  * Show the form for creating a new resource.
    //  *
    //  * @return Response

    public function create()
    {
      return view('products.create');
    }

    // *
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  Request  $request
    //  * @return Response

    // NOTE: Use moudle CheckProductsRequest instead module Request to handle validate for params
    public function store(CheckProductsRequest $request)
    {
      // NOTE: use this way when use module Request
      // $this->validate($request, [
      //   'name'       => 'required|min:6',
      //   'pro_code'   => 'required|max:4',
      //   'created_at' => 'required|date',
      // ]);

      // NOTE: long code to create product
      // NOTE: init add asign value for obj
      // $pro = new Products();
      // $pro->name = $request["name"];
      // $pro->pro_code = $request["pro_code"];
      // $pro->desc = $request["desc"];
      // $pro->created_at = $request["created_at"];
      // $pro->save();

      // NOTE: short code to create product
      //       $request->all() return array all params
      Products::create($request->all());

      // NOTE: redirect to product (get)
      return redirect('products');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
    public function show($id)
    {
      $pro = Products::findOrFail($id);
      return view('products.show',compact('pro'));
    }

    // *
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return Response

    public function edit($id)
    {
      $pro = Products::findOrFail($id);
      return view('products.edit',compact('pro'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  Request  $request
    //  * @param  int  $id
    //  * @return Response
    //  */
    public function update(Request $request, $id)
    {
      $pro = Products::findOrFail($id);
      $pro->update($request->all());
      return redirect('products');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
    public function destroy($id)
    {
      Products::findOrFail($id)->delete();
      return redirect('products');
    }
}
