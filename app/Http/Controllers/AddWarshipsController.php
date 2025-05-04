<?php

namespace App\Http\Controllers;

use App\Models\Warships;
use Illuminate\Http\Request;

class AddWarshipsController extends Controller
{

    //show create form
    public function create(){
        return view('addWarships');
    }

    //logic for updating form
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

    //show warships list
    public function warships(Request $request){
        $warships = Warships::all();
      

        return view('warships',compact('warships'));
    }

    //search func
    public function search(Request $request) {
        $search = $request->search;
    
        $warships = Warships::where('name', 'like', '%'.$search.'%')
                    ->orWhere('type', 'like', '%'.$search.'%')
                    ->orWhere('country', 'like', '%'.$search.'%')
                    ->orWhere('mainarmaments', 'like', '%'.$search.'%')
                    ->get();
    
        return view('warships', compact('search', 'warships'));
    }

    //show edit form
    public function edit($id){
        $warships = Warships::findOrFail($id);

        return view('editWarships',compact('warships'));
    }

    //logic for updating warships
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

    //delete a warship
    function destroy($id){
        
        $warships = Warships::findOrFail($id);

        $warships->delete();

        return redirect()->route('warships.list');
    }







    
}
