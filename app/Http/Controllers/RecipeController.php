<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Resources\Recipes as RecipesResource;
use App\Models\Recipe;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //GET
        $recipes=Recipe::all();

        //coleccion
        return RecipesResource::collection($recipes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //guardar y actualizar
        $recipe = $request->isMethod('put') ? Recipe::findOrFail($request->id) : new Recipe;
        $recipe->id = $request->input('id');
        $recipe->nameRecipe = $request->input('nameRecipe');
        $recipe->time = $request->input('time');
        $recipe->description = $request->input('description');
        $recipe->recipePhotography = $request->input('recipePhotography');
        $recipe->levelRate = $request->input('levelRate');
        $recipe->id_user = $request->input('id_user');
        $recipe->id_album = $request->input('id_album');
        $recipe->id_category = $request->input('id_category');
        $recipe->id_privacy = $request->input('id_privacy');
        $recipe->id_stepsRecipe = $request->input('id_stepsRecipe');

        if($recipe->save()){
            return new RecipesResource($recipe);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //obtener por id
        $recipe = Recipe::findOrFail($id);

        //retornar datos
        return new RecipesResource($recipe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
         //eliminar
         $recipe=Recipe::findorFail($id);

         if($recipe->delete()){
             return new RecipesResource($recipe);
         }
    }
}
