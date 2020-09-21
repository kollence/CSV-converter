<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Imports\CategoryImport;
use App\Imports\ProductImport;

use Excel;

class ProductController extends Controller
{
     
    public function importForm()
    {
        return view('import-form');
    }

    public function import(Request $request)
    {   
        
        Excel::import(new CategoryImport, $request->csv_file);
        Excel::import(new ProductImport, $request->csv_file);
        
        return redirect('/');
        // dd($request->csv_file);
    }

    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('list-products', compact('products'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
