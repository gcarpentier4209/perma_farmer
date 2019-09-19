<?php

namespace App\Http\Controllers;

use App\Http\Requests\Stock;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Product as ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.CreateProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $productRequest)
    {
        //Product::create($productRequest->all());
        //return redirect()->route('product')->with('info', 'Le produit a été ajouté ');

        $product = new Product([
                'label' => $productRequest->get('label'),
                'sales_unit' => $productRequest->get('sales_unit'),
                'weight' => $productRequest->get('weight')
            ]);
        $product->save();

        $insertedId = $product->id;

        $stock = $product->stock()->create([
            'id_product' => $insertedId,
            'stock_quantity' => 0,
        ]);

//        $stock = new Stock([
//          //  'id_product' => $insertedId,
//            'stock_quantity' => 0
//        ]);
        //$stock->save();


        return redirect()->route('product')->with('info', 'Le produit a été ajouté ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Product $product)
    {
        return view('admin.EditProduct', compact('product'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $productRequest, Product $product)
    {
        $product->update($productRequest->all());
        return redirect()->route('product')->with('info', 'Le produit a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('info', 'Ce produit a bien été supprimé!');
    }
}
