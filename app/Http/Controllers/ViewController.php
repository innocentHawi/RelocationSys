<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relocation;

class ViewController extends Controller
{
    public function dashboard(){
        $relocations = Relocation::all();
        return view("success", ['relocations' => $relocations]);
    }
    
    /*public function success(){
        $relocations = Relocation::all();
        return view("success.dashboard", ['relocations' => $relocations]);
    }*/
}