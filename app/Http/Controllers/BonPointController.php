<?php

namespace App\Http\Controllers;

use App\BonPoint;
use Illuminate\Http\Request;

class BonPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bonsPoints = BonPoint::all();
        return view('bonspoints.index', ['bonsPoints' => $bonsPoints]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bonPoint = new BonPoint();
        return view('bonspoints.create', ['bonPoint' => $bonPoint]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $bonPointData = $data['bonPoint'];

        $bonPoint = new BonPoint();
        $bonPoint->responsable_id = $bonPointData['responsable'];
        $bonPoint->enfant_id = $bonPointData['enfant'];
        $bonPoint->date_bonpoint = $bonPointData['dateBonPoint'];
        $bonPoint->tache_id = $bonPointData['tache'];
        $bonPoint->is_avec_bonus = $bonPointData['isBonus'];
        $bonPoint->points = 12;
        $bonPoint->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function confirmation()
    {

    }
}
