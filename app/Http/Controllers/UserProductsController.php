<?php

namespace App\Http\Controllers;

use App\Models\ProductImages;
use App\Models\Products;
use Illuminate\Http\Request;

class UserProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Products $products, Request $request)
    {
        $list = $products::where('email' , $request->num)->paginate(5)->withQueryString();
        return view('ProductList/layout', ['products' => $list]);
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
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Request $request, Products $products, ProductImages $images)
    {
        return view('ProductList.editlayout', [
            'product' => $products->where('id', $request->num)->get()->toArray(),
            'images' => $images->where('product_id', $request->num)->get()->toArray(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Products $products)
    {
        $products->where('id', $request->id)
            ->update([
                "name" => $request->name,
                "price" => $request->price,
                "description" => $request->description,
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Products $products)
    {
        return $products->where('id', $request->num)->delete();
    }
}
