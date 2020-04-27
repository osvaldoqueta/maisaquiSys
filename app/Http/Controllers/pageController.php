<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller{
    
    public $requests;
    
    public function __construct(request $requests){
        //
       $this->requests =  $requests;
       //
       //$this->middleware('auth');
       /*/->only([
            'index', 'show'
        ]);
        ou 
        ->except([
            'create', 'store', 'update', 'destroy'
        ]);
        */
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        return "pages aqui mostrando tudo";
        //dd($this->requests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
        //return view('docs');
        return "Mostrando Elemento id: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
        return "Editanndo Elemento id: " . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
        return "Atualizando Elemento id: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
        return "Deletando Elemento id: " . $id;
    }
}
