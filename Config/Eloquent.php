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
            'driver'    => $conf->default['DBDriver'],
            'host'      => $conf->default['hostname'],
            'port'      => $conf->default['port'],
            'database'  => $conf->default['database'],
            'username'  => $conf->default['username'],
            'password'  => $conf->default['password'],
            'charset'  =>  $conf->default['charset'],
            'collation' => $conf->default['DBCollat'],
            'prefix'    => $conf->default['DBPrefix']
        ), 'default');

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
        ), 'dupak');

        $capsule->setAsGlobal();

        $capsule->bootEloquent();
    }
}
