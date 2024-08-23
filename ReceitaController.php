<?php
namespace App\Http\Controllers;

use App\Models\Receita;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    
    public function index()
    {
        return Receita::all();
    }

    
    public function show($id)
    {
        return Receita::findOrFail($id);
    }

  
    public function store(Request $request)
    {
        $dadosValidados = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'ingredientes' => 'required|string',
            'instrucoes' => 'required|string',
        ]);

        return Receita::create($dadosValidados);
    }

  
    public function update(Request $request, $id)
    {
        $receita = Receita::findOrFail($id);

        $dadosValidados = $request->validate([
            'titulo' => 'sometimes|required|string|max:255',
            'descricao' => 'sometimes|required|string',
            'ingredientes' => 'sometimes|required|string',
            'instrucoes' => 'sometimes|required|string',
        ]);

        $receita->update($dadosValidados);

        return $receita;
    }

   
    public function destroy($id)
    {
        $receita = Receita::findOrFail($id);
        $receita->delete();

        return response()->json(null, 204);
    }
}