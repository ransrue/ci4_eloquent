<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    protected $connection = 'dupak';
    protected $table = 'query';
    protected $primaryKey = 'id';
}