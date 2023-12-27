<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChatGptIndexController extends Controller
{
    public function __invoke(string $id=null):Response
    {
return Inertia::render('Chat/ChatIndex');
        
    }
}
