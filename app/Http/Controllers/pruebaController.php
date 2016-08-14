<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;

class pruebaController extends Controller
{
    public function index(){
    	return 'Estas en index';
    }

    public function show($id){
    	return $id;
    }

    public function create(){
    	return "Para crear";
    }

    public function store(Request $request){

    }

    public function edit(){
    	return "para editar";
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }

}
