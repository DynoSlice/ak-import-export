<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = auth()->user()->categories;
 
        return response()->json([
            'success' => true,
            'data' => $categories
        ]);
    }
 
    public function show($id)
    {
        $categorie = auth()->user()->categories()->find($id);
 
        if (!$categorie) {
            return response()->json([
                'success' => false,
                'message' => 'Categorie pas trouver'
            ], 400);
        }
 
        return response()->json([
            'success' => true,
            'data' => $categorie->toArray()
        ], 400);
    }
 
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom_Categorie' => 'required',
            'description_Categorie' => 'required'
        ]);
 
        $categorie = new Categorie();
        $categorie->nom_Categorie = $request->nom_Categorie;
        $categorie->description_Categorie = $request->description_Categorie;
 
        if (auth()->user()->categories()->save($categorie))
            return response()->json([
                'success' => true,
                'data' => $post->toArray()
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'Erreur insertion categorie'
            ], 500);
    }
 
    public function update(Request $request, $id)
    {
        $categorie = auth()->user()->categories()->find($id);
 
        if (!$categorie) {
            return response()->json([
                'success' => false,
                'message' => 'Aucune categorie trouver'
            ], 400);
        }
 
        $updated = $categorie->fill($request->all())->save();
 
        if ($updated)
            return response()->json([
                'success' => true
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'la categorie ne peut pas etre mise a jour'
            ], 500);
    }
 
    public function destroy($id)
    {
        $categorie = auth()->user()->categories()->find($id);
 
        if (!$categorie) {
            return response()->json([
                'success' => false,
                'message' => 'Aucune categorie trouver'
            ], 400);
        }
 
        if ($categorie->delete()) {
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'la categorie ne peut pas etre supprimer'
            ], 500);
        }
    }
}
