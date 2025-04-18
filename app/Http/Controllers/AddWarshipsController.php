<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddWarshipsController extends Controller
{

 
    public function create(){
        return view('welcome');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max"225',
        ]);
    }
}
