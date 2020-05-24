<?php

namespace App\Http\Controllers;

use App\BonPoint;
use App\Tache;
use App\User;
use Illuminate\Http\Request;
use DB;

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
        $tache_id = $bonPointData['tache'];;
        $is_avec_bonus = $bonPointData['isBonus'];

        $tache = Tache::find($tache_id);

        $points = SELF::calculerPoint($tache, $is_avec_bonus);

        $bonPoint = new BonPoint();
        $bonPoint->responsable_id = $bonPointData['responsable'];
        $bonPoint->enfant_id = $bonPointData['enfant'];
        $bonPoint->date_bonpoint = $bonPointData['dateBonPoint'];
        $bonPoint->tache_id = $tache_id;
        $bonPoint->is_avec_bonus = $is_avec_bonus;
        $bonPoint->points = $points;
        $bonPoint->save();
    }

    private function calculerPoint(Tache $tache, $is_avec_bonus)
    {
        $points = $tache->nombre_points;
        $pointsBonus = $tache->nombre_points_bonus;
        if ($is_avec_bonus) {
            $points = $points + $pointsBonus;
        }
        return $points;
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

    public function voirStatistiques()
    {
        return view('bonspoints.statistiques');
    }

    public function calcul()
    {
        $enfants = User::where('is_admin', false)->get();
        $data = array();
        $arrayMois = array('1' => 'janvier', '2' => 'fevrier', '3' => 'mars', '4' => 'avril', '5' => 'mai', '6' => 'juin', '7' => 'juillet', '8' => 'aout', '9' => 'septembre', '10' => 'octobre', '11' => 'novembre', '12' => 'decembre',);
        $i = 0;
        foreach ($enfants as $enfant) {
            $dataEnfant = array();
            $enfantId = $enfant->id;
            $statistiques = DB::table('bon_points')
                ->selectRaw('month(date_bonpoint) as mois,year(date_bonpoint) as annee,sum(points) as total')
                ->where('enfant_id', '=', $enfantId)
                ->groupBy('enfant_id', 'mois', 'annee')
                ->get();
            $j = 0;
            foreach ($statistiques as $item) {
                $numeroMois = $item->mois;
                $item->mois = $arrayMois[$numeroMois];
                $dataEnfant[$j] = $item;
                $j++;
            }
            $arrayDonneesEnfant = array('enfant' => $enfant->prenom, 'donnees' => $dataEnfant);
            $data[$i] = $arrayDonneesEnfant;
            $i = $i + 1;

            /*      $data = [
                      ['day' => 'Wednesday', 'totalStudents' => 201], ['day' => 'Tuesday', 'totalStudents' => 1000], ['day' => 'Thursday', 'totalStudents' => 150], ['day' => 'Friday', 'totalStudents' => 120]
                  ];*/

        }
        return $data[0];
    }

}
