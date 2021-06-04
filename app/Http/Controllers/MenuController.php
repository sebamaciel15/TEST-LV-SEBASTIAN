<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;


class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::latest('id')->paginate(8);

        /* dd($menus); */
        return view('menu.index', compact('menus'));
    }

    public function show(Menu $menu)
    {
        /* dd(Menu::all('category_id', 'id')); */
        $similares = Menu::where('category_id', $menu->category_id)
            ->latest('id')
            ->where('id', '!=', $menu->id)
            ->take(4)
            ->get();

        return view('menu.show', compact('menu', 'similares'));
    }

    public function category(Category $category)
    {
        $menus = Menu::where('category_id', $category->id)
            ->latest('id')
            ->paginate(4);

        return view('menu.category', compact('menus', 'category'));
    }
}
