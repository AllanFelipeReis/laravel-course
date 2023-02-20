<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    /**
     * Name table in BD
     */
    protected $table = 'providers';

    /**
     * Autoriza o campos para o método create
     */
    protected $fillable = [
        "name",
        "site",
        "uf",
        "email"
    ];
}

/**
 * 
 * Method ::all() -> Return Collections
 * Method ::find($primary_key) -> Return one object or one collection (if passed one array)
 * Method ::where("column", "operator", "value") -> Return one Builder // Operators = [like, =, <, >, !=, <=, =>, <>]
 * Method ->get() -> return one collection
 */
