<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCollectionController extends Controller
{
    public function index()
    {
        return view('pages.admin.collection');
    }
}
