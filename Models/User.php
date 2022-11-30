<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection = 'dupak';
    protected $table = 'user';
    protected $primaryKey = 'id';
    // public $incrementing = true;
    public $timestamps = false;
    protected $guarded = [];
}
