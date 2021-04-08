<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $table = 'empleados';
    protected $primaryKey = 'id_legajo';
    public $incrementing = true;

}
