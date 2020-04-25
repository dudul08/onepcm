<?php

namespace App\Http\Controllers;

use App\Enfant;
use App\Http\Requests\EnfantRequest;
use App\Http\Requests\EnfantRequestUpdate;
use App\User;
use Illuminate\Http\Request;

class EnfantController extends Controller
{
    /**
     * EnfantController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(User::class, 'enfant');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $enfant = User::where('is_admin',false)->get();
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
        $user = new User();
        $user->name = $data['name'];
        $user->prenom = $data['prenom'];
        $user->genre = $data['genre'];
        $user->date_naissance =  $data['date_naissance'];
        $user->email = $data['email'];
        $user->password =\Illuminate\Support\Facades\Hash::make($data['password']) ;
        $user->is_admin=false;
        $user->save();
         return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $enfant)
    {
        $enfant->password='';
        return view('enfants.edit', compact('enfant', $enfant));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EnfantRequestUpdate $request, User $enfant)
    {
        $data = $request->all();
        $enfant->name = $data['name'];
        $enfant->prenom = $data['prenom'];
        $enfant->email = $data['email'];
        $enfant->genre = $data['genre'];
        $enfant->date_naissance =  $data['date_naissance'];
        if ($data['password']!=''){
            $enfant->password =\Illuminate\Support\Facades\Hash::make($data['password']) ;
        }
        $enfant->update();
        return redirect()->route('enfants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $enfant)
    {
        $enfant->delete();

        return redirect()->route('enfants.index');
    }
    public  function confirmation(User $enfant){

        return view('enfants.confirmationSuppression',compact('enfant',$enfant));
    }
}
