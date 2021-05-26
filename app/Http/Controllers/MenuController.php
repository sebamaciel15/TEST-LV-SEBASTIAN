<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;


class MenuController extends Controller
{
    public function index()
    {
        $menues = Menu::latest('id')->paginate(8);

        return view('menu.index', compact('menues'));
    }

    public function show(Menu $menu)
    {
        //dd(Menu::all());
            $similares = Menu::where('category_id', $menu->category)
            ->latest('id')
            ->take(4)
            ->get();

        return view('menu.show', compact('menu', 'similares'));
    }
}
