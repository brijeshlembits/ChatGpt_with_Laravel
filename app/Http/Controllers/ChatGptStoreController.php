<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChatRequest;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class ChatGptStoreController extends Controller
{
    public function __invoke(StoreChatRequest $request)
    {
        $messages=[];
        $messages[]=['role'=>'user','contect'=>$request->input('promt')];
        // dd($messages);
        $response=OpenAI::chat()->create([
            'model'=>"gpt-3.5-turbo",
            'message'=>$messages
        ]);
        $messages[]=['role'=>'assistant','contect'=>$request->choices[0]->message->content];
        dd($messages);
    }
}
