<?php

namespace App\Http\Controllers;

use App\CategorieTache;
use App\Http\Requests\CategorieTacheRequest;
use Illuminate\Http\Request;

class CategorieTacheController extends Controller
{
    /**
     * CategorieTacheController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(CategorieTache::class, 'categoriestach');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriesTaches = CategorieTache::all();

        return view('categoriestaches.index', ['categoriesTaches' => $categoriesTaches]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorieTache = new CategorieTache();

        return view('categoriestaches.create', ['categorieTache' => $categorieTache]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieTacheRequest $request)
    {
        $data = $request->all();
        CategorieTache::create($data);
        return back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieTache $categorieTache)
    {

        //$categorieTache = CategorieTache::find($id);
        return view('categoriestaches.edit', ['categorieTache' => $categorieTache]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieTacheRequest $request, CategorieTache $categorieTache)
    {
        $data = $request->only(['libelle']);
        CategorieTache::where('id', $categorieTache->id)->update($data);
        return redirect()->route('categoriestaches.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategorieTache::where('id', $id)->delete();

        return redirect()->route('categoriestaches.index');
    }

    public function confirmation($id)
    {

        $categorieTache = CategorieTache::find($id);
        return view('categoriestaches.confirmationSuppression', ['categorieTache' => $categorieTache]);
    }
}
