<?php

/*namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048', // Validação da imagem
        ]);

        // Salva a imagem no diretório 'uploads'
        $imagePath = $request->file('image')->store('uploads');

        // Salva o caminho da imagem no banco de dados
        $image = new Image;
        $image->path = $imagePath;
        $image->save();

        // Redireciona para a página desejada
        return Redirect::route('home')->with('success', 'Imagem salva com sucesso!');
    }
}*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use App\Models\Pacient;


class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'paciente_id' => 'required|integer',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->storeAs('images', $imageName, 'public');

        $image = new Image();
        $image->path = $imageName;
        $image->name = $request->image->getClientOriginalName();
        $image->id_pacient = $request->input('paciente_id');
        $image->save();

        return redirect()->route('exam.list', ['pacient_id' => $request->paciente_id]);
    }

    public function create($pacient_id)
    {
        $paciente = Pacient::find($pacient_id);
        return view('exam.create_exam', compact('paciente'));
    }


    public function list($paciente_id)
    {
        // Busca o paciente pelo ID, caso não encontre retorna um 404.
        $paciente = Pacient::findOrFail($paciente_id);
        
        // Busca todas as imagens associadas ao paciente usando o 'id_pacient'.
        $images = Image::where('id_pacient', $paciente_id)->get();

        // Retorna a view com o paciente e as imagens
        return view('exam.list_exam', compact('paciente', 'images'));
    }

}

