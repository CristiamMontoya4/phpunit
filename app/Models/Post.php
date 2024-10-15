<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Mutators o Cambiar, solo se ejecuta sobre las propiedades

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    //Accessors, transforma un atributo antes de ser presentado

    public function getSlugAttribute() 
    {
        return str_replace(' ', '-', $this->name);
    }

    //metodo personalizado, a diferencia de los anteriores que solo se ejecutan sobre las propiedades de la clase   
    public function href()
    {
        return "blog/{$this->slug}";
    }
}
