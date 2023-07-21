<?php

namespace App\Http\Controllers;

class PaginasController extends Controller
{
    public function inicio(){

        return view ('welcome');

    }
    public function serveisweb(){

        return view ('serveisweb');

    }
    public function formacion(){

        return view ('fbh');

    }
    public function contacto(){

        return view ('contacto');

    }
}