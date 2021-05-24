<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menues = Menu::all();

        return view('menu.index', compact('menues'));
    }
}
