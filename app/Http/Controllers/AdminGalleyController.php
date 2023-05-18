<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGalleyController extends Controller
{
    public function index()
    {
        return view('pages.admin.gallery');
    }
}
