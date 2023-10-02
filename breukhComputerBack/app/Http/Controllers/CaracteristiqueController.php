<?php

namespace App\Http\Controllers;

use App\Models\Caracteristique;
use App\Traits\HttpResp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CaracteristiqueController extends Controller
{
    use HttpResp;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->success(200, "", Caracteristique::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'libelle' => 'required|unique:caracteristiques|string|min:2',
        ], [
            'libelle.required' => 'Le champ titre est obligatoire.',
            'libelle.unique' => 'Ce titre existe déjà.',
            'libelle.min' => 'Le champ titre doit avoir minimum deux caracteres.',
            'libelle.unique' => 'Le champ doit etre unique.',
        ]);
        if ($validator->fails()) {
            return $this->error(500, "Quelque s'est mal passé", ($validator->errors()));
        }
        return $this->success(200, "", Caracteristique::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Caracteristique $caracteristique)
    {
        return $this->success(200, "", $caracteristique);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
