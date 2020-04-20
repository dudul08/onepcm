<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResponsableRequest;
use App\Responsable;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    /**
     * ResponsableController constructor.
     */
    public function __construct()

    {
           $this->authorizeResource(Responsable::class,'responsable');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsables = Responsable::all();
        return view('responsables.index', ['responsables' => $responsables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responsable = new Responsable();
        return view('responsables.create', ['responsable' => $responsable]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResponsableRequest $request)
    {
        $data = $request->all();
        Responsable::create($data);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Responsable $responsable)
    {

        //$responsable = Responsable::find($id);
        return view('responsables.edit', ['responsable' => $responsable]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ResponsableRequest $request, Responsable $responsable)
    {
        $data = $request->all();
        $responsable->update($data);
        return redirect()->route('responsables.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Responsable $responsable)
    {

        Responsable::where('id', $responsable->id)->delete();
        return redirect()->route('responsables.index');

    }

    public function confirmation(Responsable $responsable)
    {

        //$responsable = Responsable::find($id);
        return view('responsables.confirmationSuppression', ['responsable' => $responsable]);
    }
}
