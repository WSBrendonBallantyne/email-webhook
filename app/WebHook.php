<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebHook extends Model
{
    protected $fillable = ['data', 'header', 'body'];
}
