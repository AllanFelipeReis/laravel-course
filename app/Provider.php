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
 * Method ::whereIn("column", [array]) {whereNotIn} Return one query builder
 * Method ::whereBetween("column", [to, from]) {whereNotBetween} Return one query builder
 * Method ::orWhere()
 * Method ::whereNull {whereNotNull}
 * Method ::whereDate()
 * Method ::whereDay()
 * Method ::whereMonth()
 * Method ::whereYear()
 * Method ::whereTime()
 */
