<?php

namespace App\Http\Controllers;

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
}