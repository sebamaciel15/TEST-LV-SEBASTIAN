<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menues = Menu::latest('id')->paginate(8);

        return view('menu.index', compact('menues'));
    }

    public function show(Menu $menu)
    {
        $similares = Menu::where('menu_id', $menu->category)
            ->latest('id')
            ->take(4)
            ->get();

        return view('menu.show', compact('menu', 'similares'));
    }
}
