<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::where('user_id', Auth::user()->id)->get();
        return response()->json($notes, 200);
    }

    public function store(Request $request)
    {
        $note = new Note;
        $note->user_id = Auth::user()->id;
        $note->content = $request->content;
        $note->save();
        return response()->json(['message' => 'Success'], 200);
    }
}
