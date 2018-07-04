<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instru as Instru;
use App\Material as Material;
use App\Author as Author;

class InstruController extends Controller
{
    public function showAll(Request $request)
    {
      $instru = Instru::all()->sortBy('title');
      return view('instrument.show', ['instrus' => Instru::all()]);
    }

    public function insert(Request $request)
    {

      $materials = Material::all();
      $authors = Author::all();
      return view('instrument.insert', ['materials' => $materials], ['authors' => $authors]);
    }

    public function insertOne(Request $request)
    {
      $instru = new Instru();

      $instru->title = $request->input('title');
      $instru->price = $request->input('price');
      $instru->materials_id = $request->input('material');
      $instru->stock = $request->input('stock');
      $instru->save();
      foreach ($request->input('author') as $key => $value) {
    		$instru->authors()->attach($value);
    	}
      return redirect('/');
    }

    public function deleteOne(Request $request)
    {
    //$deleteInstru = Instru::find($request->input('id'));
    //$deleteInstru->genres()->detach();
    Instru::destroy($request->input('id'));
    return redirect('/');
    }

    public function update(Request $request)
    {

      $instru = Instru::find($request->input('id'));
      $materials = Material::all();
      $authors = Author::all();
    	return view('instrument.update', ['instru' => $instru, 'materials' => $materials], ['authors' => $authors]);
    }

    public function updateOne(Request $request)
    {
      $instru = Instru::find($request->input('id'));
      $instru->title = $request->input('title') ? $request->input('title') : "No Title";
      $instru->price = $request->input('price');
      $instru->stock = $request->input('stock');
      $instru->materials_id = $request->input('material');
      $instru->save();
      $instru->authors()->detach();
    	foreach ($request->input('author') as $key => $value) {
    		$instru->authors()->attach($value);
    	}
      return redirect('/');
    }

    public function stock(Request $request)
    {
      $instru = Instru::find($request->input('id'));
      $materials = Material::all();
    return view('instrument.stock', ['instru' => $instru, 'materials' => $materials]);
    }

    public function stockAction(Request $request)
    {
      $instru = Instru::find($request->input('id'));
      $instru->title = $request->input('title') ? $request->input('title') : "No Title";
      $instru->price = $request->input('price');
      $instru->stock = $request->input('stock');
      $instru->materials_id = $request->input('material');
      $instru->save();
      return redirect('/');
    }


}
