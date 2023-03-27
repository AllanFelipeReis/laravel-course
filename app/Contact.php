<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    /**
     * Autoriza o campos para o método create
     */
    protected $fillable = [
        "name",
        "phone",
        "email",
        "subject",
        "message"
    ];
}
