<?php

namespace App\Http\Controllers;

use App\Enfant;
use App\Http\Requests\EnfantRequest;
use Illuminate\Http\Request;

class EnfantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $enfant = Enfant::actif();
        return view('enfants.index', compact('enfant', $enfant));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enfant = new Enfant();

        return view('enfants.create', compact('enfant', $enfant));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnfantRequest $request)
    {
        $data = $request->all();
        Enfant::create($data);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enfant = Enfant::find($id);
        return view('enfants.edit', compact('enfant', $enfant));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EnfantRequest $request, Enfant $enfant)
    {
        $data = $request->all();
        $enfant->update($data);
        return redirect()->route('enfants.index');
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
}
