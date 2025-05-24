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

    public function showForm(){
        return view('calculate');
    }


    public function calculate(Request $request){
        $a = $request->input('a');
        $b = $request->input('b');
        $operator = $request->input('operator');


        if($operator == '+'){
            $result =  $a + $b;
        }elseif($operator == '-'){
            $result = $a - $b;
        }elseif($operator == '*'){
            $result = $a * $b;
        }elseif($operator == '/'){
            if($a || $b == 0){
                $result = 'invalid input';
            }else{
                $result = $a / $b;
            }
        }
     
        return view('calculate',compact('result'));
       

    }
}



