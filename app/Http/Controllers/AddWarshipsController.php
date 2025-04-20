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
            'type' => 'required|in:battleship,cruiser,destroyer,aircraftCarrier',   
            'mainarmaments' => 'required|in:120mm,127mm,130mm,152mm,203mm,280mm,320mm,356mm,381mm,406mm,460mm'   
        ]);
        
        Warships::create($validate);

        return redirect()->route('warships.list');
    }

    public function warships(){
        $warships = Warships::all();

        return view('warships',compact('warships'));
    }

    public function edit($id){
        $warships = Warships::findOrFail($id);

        return view('editWarships',compact('warships'));
    }

    public function update(Request $request, $id){
        $warships = Warships::findOrFail($id);

        $validate = $request->validate([
            'name' => 'required|string|max:225',
            'country' => 'required|string|max:225',
            'type' => 'required|in:battleship,cruiser,destroyer,aircraftCarrier',   
            'mainarmaments' => 'required|in:120mm,127mm,130mm,152mm,203mm,280mm,320mm,356mm,381mm,406mm,460mm'    
        ]);

        $warships->update($validate);
        
        return redirect()->route('warships.list');
    }

    function destroy($id){
        
        $warships = Warships::findOrFail($id);

        $warships->delete();

        return redirect()->route('warships.list');
    }







    
}
