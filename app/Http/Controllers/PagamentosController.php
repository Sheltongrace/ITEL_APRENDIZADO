<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;

class PagamentosController extends Controller
{
    public function index()
    {
        $pagamentos = Pagamento::all();
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        Pagamento::create($request->all());
    }

    public function show($id)
    {
        $pagamento = Pagamento::findOrFail($id);
    }

    public function edit($id)
    {
        $pagamento = Pagamento::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $pagamento = Pagamento::findOrFail($id);
        $pagamento->update($request->all());
    }

    public function destroy($id)
    {
        $pagamento = Pagamento::findOrFail($id);
        $pagamento->delete();
    }
}
