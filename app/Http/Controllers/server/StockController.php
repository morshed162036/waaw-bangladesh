<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = Stock::with('product')->get()->all();
        return view('server.stock.index')->with(compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stock = Stock::with('product')->findorFail($id);
        return view('server.stock.edit')->with(compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stock = Stock::findorFail($id);
        $stock->quantity = $request->quantity;
        $stock->update();
        return redirect(route('stock.index'))->with('success','Stock Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
