<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mes;

class MesesController extends Controller
{
    public function index()
    {
        $meses = Mes::all();
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        Mes::create($request->all());
    }

    public function show($id)
    {
        $mes = Mes::findOrFail($id);
    }

    public function edit($id)
    {
        $mes = Mes::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $mes = Mes::findOrFail($id);
        $mes->update($request->all());
    }

    public function destroy($id)
    {
        $mes = Mes::findOrFail($id);
        $mes->delete();
    }
}
