<?php

namespace App\Http\Controllers;

use App\CategorieTache;
use App\Http\Requests\TacheRequest;
use App\Tache;
use Illuminate\Http\Request;


class TacheController extends Controller
{
    /**
     * TacheController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Tache::class, 'tache');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taches = Tache::all();
        return view('taches.index', ['taches' => $taches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tache = new Tache();
        $categoriesTaches = CategorieTache::all();
        return view('taches.create', ['tache' => $tache, 'categoriesTaches' => $categoriesTaches]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TacheRequest $request)
    {
        $data = $request->all();

        Tache::create($data);
        return back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tache = Tache::find($id);
        $categoriesTaches = CategorieTache::all();
        return view('taches.edit', ['tache' => $tache, 'categoriesTaches' => $categoriesTaches]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(TacheRequest $request, $id)
    {

        $attributsFillable = Tache::getAttributsFillable();
        $data = $request->only($attributsFillable);
        Tache::where('id', $id)->update($data);

        return redirect()->route('taches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function confirmation($id)
    {

        $tache = Responsable::find($id);
        return view('taches.confirmationSuppression', ['tache' => $tache]);
    }
}
