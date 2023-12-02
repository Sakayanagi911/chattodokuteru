<?php

namespace App\Http\Controllers;

use App\Models\CFDatabase;
use Illuminate\Http\Request;

class ChatformController extends Controller
{
    public function showChatform()
    {
        return view('chatform');
    }
    public function saveFormData(Request $request)
    {
        // Validasi formulir jika diperlukan
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country_code' => 'required',
            'phone' => 'required',
            'age' => 'required|integer',
            'dob' => 'required|date',
        ]);

        // Simpan data ke dalam database
        CFDatabase::create($request->all());

        // Redirect atau lakukan apa pun sesuai kebutuhan
        return redirect()->route('chatify.show', ['userId' => 1]);
    }
    public function showChat($userId)
    {
        // Logika untuk menampilkan chat dengan user tertentu
        return view('chat.show', ['userId' => $userId]);
    }
}