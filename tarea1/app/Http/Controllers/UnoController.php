<?php

namespace App\Http\Controllers;

use App\Models\mensaje;
use Illuminate\Http\Request;

class UnoController extends Controller
{
    public function index()
   {
       $nomb = mensaje::get();
       return view('mensaje.uno', compact('nomb'));
   }

   public function store(Request $request)
   {
       mensaje::create($request->all());
       return redirect()->route('uno.index');
   }
}
