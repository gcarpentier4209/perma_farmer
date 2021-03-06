<?php

namespace App\Http\Controllers;

use App\Http\Requests\Stock as StockRequest;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
        //return view('index', compact('stocks'));
        return view('admin.stock', ['stocks'=> $stocks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.CreateStock');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(StockRequest $stockRequest)
    {
        Stock::create($stockRequest->all());
        return redirect()->route('stock')->with('info', 'Le produit a été ajouté au stock');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        return view('admin.ShowStock', compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        return view('admin.EditStock', compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stock = Stock::all()->find($id);
        $stock->update([
            'stock_quantity' => $request->stock_quantity]);
        return redirect()->route('stock')->with('info', 'Le produit a été mis à jour');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        $stock->delete();
        return back()->with('info', 'Ce produit a bien été supprimé du stock.');
    }
}
