<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatformController extends Controller
{
    public function showChatform()
    {
        return view('chatform');
    }
}