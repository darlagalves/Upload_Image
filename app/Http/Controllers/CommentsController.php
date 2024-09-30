<?php

namespace App\Http\Controllers;


use App\Models\Pacient;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create($pacient_id)
    {
        $paciente = Pacient::find($pacient_id);
        return view('diary.create_diary', compact('paciente'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
            'pacient_id' => 'required|integer',
        ]);

        Comment::create([
            'comment' => $request->input('comment'),
            'pacient_id' => $request->input('pacient_id'),
            'created_at' => now(),
        ]);

        return redirect()->route('comments.diary', $request->input('pacient_id'))->with('success', 'Comentário adicionado com sucesso!');
    }

    public function index($pacient_id)
    {
        $paciente = Pacient::findOrFail($pacient_id);
        $comentarios = Comment::where('pacient_id', $pacient_id)->get();

        return view('diary.diary', compact('paciente', 'comentarios'));
    }

    public function destroy($id)
    {
        $comentario = Comment::find($id);

        if ($comentario) {
            $comentario->delete();
            return redirect()->back()->with('success', 'Comentário excluído com sucesso.');
        } else {
            return redirect()->back()->with('error', 'Comentário não encontrado.');
        }
    }

}
