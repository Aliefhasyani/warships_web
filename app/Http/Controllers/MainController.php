<?php

namespace App\Http\Controllers;

use App\Models\Warships;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //show home and big warships
    public function home(){
        $warships = Warships::where('mainarmaments', '>=','381mm')->get();
        return view('welcome',compact('warships'));
    }

}
