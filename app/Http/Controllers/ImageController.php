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

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->storeAs('images', $imageName, 'public');

        $image = new Image();
        $image->path = $imageName;
        $image->name = $request->image->getClientOriginalName();
        $image->doctor_id = Auth::id();
        $image->save();

        return redirect()->route('list_exam')->with('success', 'Imagem carregada com sucesso.');
    }

    public function list()
    {
        $images = Image::where('doctor_id', Auth::id())->get();
        return view('exam.list_exam', compact('images'));
    }
}

