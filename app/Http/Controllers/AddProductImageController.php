<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddImageRequest;
use App\Models\ProductImages;
use App\Models\Products;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AddProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return false|string
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AddImageRequest $request, Users $users, ProductImages $images)
    {
        $userId = $users->where('email',$request->validated()['email_image'])->get('id')->toArray();
        $file = $request->file;
        $imgHash = $file->hashName();
        $storeName = $userId[0]['id'] . "_" . $request->validated()['productId'] . "_" . $imgHash;
        if($images->where('hash_id', $imgHash)->doesntExist()){
            $images::create([
                "hash_id" => $imgHash,
                "product_id" => $request->validated()['productId'],
                "user_id" => $userId[0]['id'],
            ]);
            if($request->hasFile('file')){
                $file->storeAs('images', $storeName);
            }
        }
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
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
