<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menue = Menu::all();

        return view('admin.menues.index', compact('menue'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:menus',
            'description' => 'required',
            'price' => 'required',
        ]);

        $menu = Menu::create($request->all());

        return redirect()->route('admin.menues.edit', $menu)->with('info', 'El menú se creó con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menue)
    {
        return view('admin.menues.show', compact('menue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menue)
    {
        return view('admin.menues.edit', compact('menue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menue)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:menus,slug,$menue->id",
            'description' => 'required',
            'price' => 'required',
        ]);

        $menue->update($request->all());

        return redirect()->route('admin.menues.edit', $menue)->with('info', 'El menu se actualizo con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menue)
    {
        $menue->delete();

        return redirect()->route('admin.menues.index')->with('info', 'El menu se elimino con éxito');
    }
}
