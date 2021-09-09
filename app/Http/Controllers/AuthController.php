<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return ([
            'NIS'=> '3103119078',
            'Nama' => 'Febian Alan Saputra',
            'Gender' => 'Pria',
            'Phone' => '081568234000',
            'Class' => 'XII RPL 3'
        ]);
 }
}
