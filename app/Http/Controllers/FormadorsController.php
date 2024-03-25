<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formador;
use Illuminate\Support\Facades\DB;
 
class FormadorsController extends Controller
{
    public function index()
    {
        $formadors = Formador::all();
    }

    public function create()
    {
        return view('formadors.create');
    }

    public function store(Request $request)
    {
      //  var_dump($request->input());die;
        try {
            DB::table('formadores')->insert($request->input());
            echo "Salvo";die;
        } catch (\Throwable $th) {
            echo $th;
        }
     
    }

    public function show($id)
    {
        $formador = Formador::findOrFail($id);
    }

    public function edit($id)
    {
        $formador = Formador::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $formador = Formador::findOrFail($id);
        $formador->update($request->all());
    }

    public function destroy($id)
    {
        $formador = Formador::findOrFail($id);
        $formador->delete();
    }
}
