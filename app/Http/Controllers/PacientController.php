<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacientRequest;
use App\Models\Pacient;
use Illuminate\Http\Request;

class PacientController extends Controller
{
    /*public function store(PacientRequest $request)
    {
        $pacienteData = $request->validated(); 
        $pacienteData['doctor_id'] = $request->user_id; // Adiciona o ID do médico ao array de dados
        dd($request, $pacienteData, $paciente); // Mostra o conteúdo de todas as variáveis
        $paciente = Pacient::create($pacienteData); 
        return redirect()->route('pacient'); // Redireciona para a lista de pacientes
    }*/


    public function store(Request $request)
    {
        // Validação dos dados de entrada
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'race' => 'required|string|max:255',
            'relapses' => 'required|string|max:255',
            'doctor_id' => 'required|integer', // Adicione a validação para doctor_id
        ]);

        // Criação do usuário
        $pacient = Pacient::create([
            'name' => $request->name,
            'age' => $request->age,
            'height' => $request->height,
            'weight' => $request->weight,
            'race' => $request->race,
            'relapses' => $request->relapses,
            'doctor_id' => $request->doctor_id, // Pega o doctor_id da request
        ]);

        return redirect()->route('doctor_dashboard')->with('success', 'Paciente criado com sucesso.');
    }
}