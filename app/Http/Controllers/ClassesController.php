<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;

class ClassesController extends Controller
{
    public function index()
    {
        $classes = Classe::all();
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        Classe::create($request->all());
    }

    public function show($id)
    {
        $classe = Classe::findOrFail($id);
    }

    public function edit($id)
    {
        $classe = Classe::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $classe = Classe::findOrFail($id);
        $classe->update($request->all());
    }

    public function destroy($id)
    {
        $classe = Classe::findOrFail($id);
        $classe->delete();
    }
}
