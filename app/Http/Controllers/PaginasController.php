<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function inicio(){

        return view ('welcome');

    }
    public function serveisweb(){

        return view ('serveisweb');

    }
    public function fbh(){

        return view ('fbh');

    }
    public function contacto(){

        return view ('contacto');

    }
}