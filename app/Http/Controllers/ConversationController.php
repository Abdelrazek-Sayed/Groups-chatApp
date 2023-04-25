<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index(Request $request)
    {
        $conversations = $request->user()->conversations;
        return view('conversations.index', compact('conversations'));
    }
    public function show(Conversation $conversation, Request $request)
    {
        $conversations = $request->user()->conversations;
        return view('conversations.show', compact('conversation', 'conversations'));
    }
}
