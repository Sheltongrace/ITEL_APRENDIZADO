<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semana;

class SemanasController extends Controller
{
    public function index()
    {
        $semanas = Semana::all();
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        Semana::create($request->all());
    }

    public function show($id)
    {
        $semana = Semana::findOrFail($id);
    }

    public function edit($id)
    {
        $semana = Semana::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $semana = Semana::findOrFail($id);
        $semana->update($request->all());
    }

    public function destroy($id)
    {
        $semana = Semana::findOrFail($id);
        $semana->delete();
    }
}
