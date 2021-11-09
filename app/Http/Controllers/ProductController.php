<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pords[] = ["id"=>456,"title"=>str_shuffle("abcdefgh"),"price"=>rand(150,999).",000","thumb"=>"https://image.freepik.com/free-photo/sample-tomato-seed-trial_46073-11.jpg"];
        $pords[] = ["id"=>456,"title"=>str_shuffle("abcdefgh"),"price"=>rand(150,999).",000","thumb"=>"https://image.freepik.com/free-photo/sample-tomato-seed-trial_46073-11.jpg"];
        $pords[] = ["id"=>456,"title"=>str_shuffle("abcdefgh"),"price"=>rand(150,999).",000","thumb"=>"https://image.freepik.com/free-photo/sample-tomato-seed-trial_46073-11.jpg"];
        $pords[] = ["id"=>456,"title"=>str_shuffle("abcdefgh"),"price"=>rand(150,999).",000","thumb"=>"https://image.freepik.com/free-photo/sample-tomato-seed-trial_46073-11.jpg"];
        $pords[] = ["id"=>456,"title"=>str_shuffle("abcdefgh"),"price"=>rand(150,999).",000","thumb"=>"https://image.freepik.com/free-photo/sample-tomato-seed-trial_46073-11.jpg"];
        $pords[] = ["id"=>456,"title"=>str_shuffle("abcdefgh"),"price"=>rand(150,999).",000","thumb"=>"https://image.freepik.com/free-photo/sample-tomato-seed-trial_46073-11.jpg"];
        $pords[] = ["id"=>456,"title"=>str_shuffle("abcdefgh"),"price"=>rand(150,999).",000","thumb"=>"https://image.freepik.com/free-photo/sample-tomato-seed-trial_46073-11.jpg"];

        return view("welcome",["products"=>$pords]);
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
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
