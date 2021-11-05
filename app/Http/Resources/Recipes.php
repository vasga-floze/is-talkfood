<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Recipes extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
       // return parent::toArray($request);
       return[
           'id'=>$this->id,
           'nameRecipe'=>$this->nameRecipe,
           'time'=>$this->time,
           'description'=>$this->description,
           'recipePhotography'=>$this->recipePhotography,
           'levelRate'=>$this->levelRate,
           'id_user'=>$this->id_user,
           'id_album'=>$this->id_album,
           'id_category'=>$this->id_category,
           'id_privacy'=>$this->id_privacy,
           'id_stepsRecipe'=>$this->id_stepsRecipe,

       ];
    }
}