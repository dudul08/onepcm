<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResponsableRequest;
use App\Http\Requests\ResponsableRequestUpdate;
use App\Responsable;
use App\User;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    /**
     * ResponsableController constructor.
     */
    public function __construct()

    {
           $this->authorizeResource(User::class,'responsable');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsables = User::where('is_admin',true)->get();
        return view('responsables.index', ['responsables' => $responsables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responsable = new User();
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
        $user = new User();
        $user->name = $data['name'];
        $user->prenom = $data['prenom'];
        $user->genre = '-1';
        $user->date_naissance = '1900-01-01';
        $user->email = $data['email'];
        $user->password =\Illuminate\Support\Facades\Hash::make($data['password']) ;
        $user->is_admin=true;
        $user->save();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $responsable)
    {
        $responsable->password='';
        return view('responsables.edit', ['responsable' => $responsable]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ResponsableRequestUpdate $request, User $responsable)
    {
        $data = $request->all();
        $responsable->name = $data['name'];
        $responsable->prenom = $data['prenom'];
        $responsable->email = $data['email'];
        if ($data['password']!=''){
            $responsable->password =\Illuminate\Support\Facades\Hash::make($data['password']) ;
        }
        $responsable->update();
        return redirect()->route('responsables.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $responsable)
    {
        User::where('id', $responsable->id)->delete();
        return redirect()->route('responsables.index');
    }

    public function confirmation(User $responsable)
    {
        return view('responsables.confirmationSuppression', ['responsable' => $responsable]);
    }
}
