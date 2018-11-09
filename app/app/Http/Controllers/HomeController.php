<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $dir = "template/";

    public function index()
    {
        return view($this->dir . "index");
    }

    public function  about(){
        return view($this->dir . "about");
    }

    public function contact(){
        return view($this->dir . "contact");
    }

    public function product(){
        return view($this->dir . "product");
    }

    public function productDetail(){
        return view($this->dir . "product-detail");
    }

    public function cart(){
        return view($this->dir . "cart");
    }

    public function blog(){
        return view($this->dir . "blog");
    }

    public function blogDetail(){
        return view($this->dir . "blog-detail");
    }

    public function home02(){
        return view($this->dir . "home-02");
    }

    public function home03(){
        return view($this->dir . "home-03");
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
