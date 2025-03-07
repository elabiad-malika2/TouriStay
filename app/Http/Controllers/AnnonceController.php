<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;


class AnnonceController extends Controller
{
    public function show($id){
        // dd( Annonce::with('owner')->find($id)->title);
        return view('editAnnonce' , ['annonce' => Annonce::with('owner')->find($id)]);
    }
    public function update(Request  $request ,$id)
    {      
        // dd($id);
       $data= $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|in:appartement,house,villa,studio',
            'description' => 'nullable|string|min:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'disponible_du' => 'nullable|date',
            'disponible_jusquau' => 'nullable|date|after_or_equal:available_from',
            'chambres' => 'nullable|integer|min:1|max:5',
            'prix' => 'required|numeric|min:0|max:9999999.99',
            'salles_de_bain' => 'nullable|integer|min:1|max:5',
            'location' => 'required|string|max:255',
        ]);
        

        $annonce = Annonce::findOrFail($id);

       

        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        } else {
            $data['image'] = $annonce->image;
        }


        

        $annonce->update($data);
        return redirect('/owner');

    } 
}
