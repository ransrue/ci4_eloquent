<?php

namespace App\Controllers;

use App\Models\Copy;
use Illuminate\Database\Capsule\Manager as DB;

use CodeIgniter\CodeIgniter;

class Home extends BaseController
{
    public function index()
    {
        $sql = Copy::first();
        echo $sql;
    }
}
