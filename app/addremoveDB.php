<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addremoveDB extends Model
{
    protected $table = 'addremovedb';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
