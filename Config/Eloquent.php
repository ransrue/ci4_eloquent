<?php

namespace Config;

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * 
 */
class Eloquent
{

    function __construct()
    {

        $capsule = new Capsule;
        $conf = config('Database');
        // // DBDriver
        $capsule->addConnection(array(
            'driver'    => $conf->dupak['DBDriver'],
            'host'      => $conf->dupak['hostname'],
            'port'      => $conf->dupak['port'],
            'database'  => $conf->dupak['database'],
            'username'  => $conf->dupak['username'],
            'password'  => $conf->dupak['password'],
            'charset'  =>  $conf->dupak['charset'],
            'collation' => $conf->dupak['DBCollat'],
            'prefix'    => $conf->dupak['DBPrefix']
        ), 'default');

        $capsule->addConnection(array(
            'driver'    => $conf->dupak['DBDriver'],
            'host'      => $conf->dupak['hostname'],
            'port'      => $conf->dupak['port'],
            'database'  => $conf->dupak['database'],
            'username'  => $conf->dupak['username'],
            'password'  => $conf->dupak['password'],
            'charset'  =>  $conf->dupak['charset'],
            'collation' => $conf->dupak['DBCollat'],
            'prefix'    => $conf->dupak['DBPrefix']
        ), 'dupak');

        $capsule->setAsGlobal();

        $capsule->bootEloquent();
    }
}
