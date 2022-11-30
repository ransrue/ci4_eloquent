<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    public function index()
    {
        $sql = User::firstOrNew(array('nama' => 'ransrue'));
        $sql->nama = 'ransrue';
        $sql->save();

        $sql = User::find(1);
        echo json_encode($sql);
        echo '<br>';
        
        $sql = User::where('nama', 'buroq');
        $sql->update(array('nama' => 'buroq.app'));

        $sql = User::get();
        echo json_encode($sql);
        echo '<br>';
    }
}
