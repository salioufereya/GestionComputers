<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use App\Traits\HttpResp;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    use HttpResp;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->success(200, "", Marque::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
