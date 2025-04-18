<?php

namespace App\Http\Controllers;

use App\Models\Warships;
use Illuminate\Http\Request;

class AddWarshipsController extends Controller
{

 
    public function create(){
        return view('addWarships');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:225',
            'country' => 'required|string|max:225',
            'type' => 'required|in:battleship,cruiser,destroyer,aircraftCarrier'    
        ]);
        
        Warships::create($validate);

        return view('addWarships');
    }

    public function warships(){
        $warships = Warships::all();

        return view('warships',compact('warships'));
    }
}
