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
