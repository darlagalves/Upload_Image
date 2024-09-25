<?php

namespace App\Http\Controllers;

use App\Models\Pacient;
use App\Models\Diagnosis;
use Illuminate\Http\Request;

class DiagnosesController extends Controller
{
    public function create($pacient_id)
    {
        $paciente = Pacient::find($pacient_id);
        return view('diagnosis.create_diagnosis', compact('paciente'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'diagnostico' => 'required|string',
            'paciente_id' => 'required|exists:pacients,id',
        ]);

        $diagnostico = new Diagnosis();
        $diagnostico->pacient_id = $request->paciente_id;
        $diagnostico->comment = $request->diagnostico;
        $diagnostico->save();

        return redirect()->route('pacient.pacient', ['id' => $request->paciente_id]);
    }

    public function edit($pacient_id)
    {
        $paciente = Pacient::findOrFail($pacient_id);
        $diagnostico = Diagnosis::where('pacient_id', $pacient_id)->first();

        return view('diagnosis.edit_diagnosis', compact('paciente', 'diagnostico'));
    }

    public function update(Request $request, $pacient_id)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        $diagnostico = Diagnosis::where('pacient_id', $pacient_id)->first();
        $diagnostico->comment = $request->input('comment');
        $diagnostico->save();

        return redirect()->route('pacient.pacient', $pacient_id)->with('success', 'Diagnóstico atualizado com sucesso!');
    }
}
