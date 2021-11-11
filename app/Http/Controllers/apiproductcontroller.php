<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Storage;
use Illuminate\Http\Request;

class apiproductcontroller extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    

    public function store(Request $request)
    {


        
        foreach ($request->photos as $photo) {

            $photos[] = Storage::Insert([

                "path"=>$request->path.".jpg",
                "origin"=>$photo,
                "contenttype"=>1

            ]);
        }

        dd($photos);

        product::create(

            [

                "path"=>$request->path,
                "title"=>$request->title,
                "price"=>$request->price,
                "caption"=>$request->caption,
                "link"=>$request->link,
                "shop"=>$request->shop

            ]

        );
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
