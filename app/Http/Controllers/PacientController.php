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

    public function dashboard()
    {
        $pacients = Pacient::all();
        return view('doctor_dashboard', compact('pacients'));
    }

    public function edit($id)
    {
        $pacient = Pacient::findOrFail($id);
        return view('pacient.edit_pacient', compact('pacient'));
    }

    public function update(Request $request, $id)
    {
        // Validação
        $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer',
            'peso' => 'required|numeric',
            'altura' => 'required|numeric',
            'reincidente' => 'required|string',
            'cor' => 'required|string',
        ]);

        // Buscar o paciente
        $paciente = Pacient::find($id);

        // Verifica se o paciente existe
        if (!$paciente) {
            return redirect()->route('doctor_dashboard')->with('error', 'Paciente não encontrado.');
        }

        // Atualiza os dados
        $paciente->name = $request->nome;
        $paciente->age = $request->idade;
        $paciente->weight = $request->peso;
        $paciente->height = $request->altura;
        $paciente->relapses = $request->reincidente;
        $paciente->race = $request->cor;

        // Salva as alterações
        $paciente->save();

        return redirect()->route('pacient')->with('success', 'Paciente atualizado com sucesso.');
    }


    public function destroy($id)
    {
        $pacient = Pacient::findOrFail($id);
        $pacient->delete();
        return redirect()->route('doctor_dashboard')->with('success', 'Paciente excluído com sucesso');
    }

    public function show($id)
    {
        $paciente = Pacient::find($id);
        $diagnostico = $paciente->diagnosticos()->first();

        return view('pacient.pacient', compact('paciente', 'diagnostico'));
    }


    /*public function show($id)
    {
        $paciente = Pacient::findOrFail($id);
        return view('pacient.pacient', compact('paciente'));
    }*/

    public function index(Request $request)
    {
        $query = Pacient::query();

        // Verifica se há uma pesquisa no request
        if ($request->has('search')) {
            $search = $request->input('search');
            // Filtra pacientes cujo nome contém o termo pesquisado (ignora maiúsculas e minúsculas)
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        // Obtém os pacientes filtrados ou todos, se não houver filtro
        $pacients = $query->get();

        return view('doctor_dashboard', compact('pacients'));
    }


}