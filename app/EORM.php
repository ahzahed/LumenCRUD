<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EORM extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
