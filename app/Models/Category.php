<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Asignación masiva de atributos. Se deben respetar líneas o estructura
    // en el código ya existente en este fichero (no se elimina nada previo)
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'long_description',
        'active',
        'parent_id'
    ];

    // Relación para el padre
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    // Relación para las categorías hijas
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}