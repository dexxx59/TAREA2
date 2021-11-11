<?php

namespace App\Http\Controllers;

use App\Models\mensaje;
use Illuminate\Http\Request;

class DosController extends Controller
{
    public function show($id)
   {
       $nombre = mensaje::find($id);
       return view('mensaje.tres', compact('nombre'));
   }

   public function edit($id)
   {
        $cat = mensaje::find($id);
        return view('mensaje.dos', compact('cat'));
   }

   public function update(Request $request, $id)
   {
        $cat = mensaje::find($id);
        $cat->update($request->all());
        return redirect()->route('uno.index');
   }
}
