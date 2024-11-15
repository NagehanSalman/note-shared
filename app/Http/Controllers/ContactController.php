<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{
    public function create() {
        return view('contacts.create');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'category' => 'required|nullable|integer',
            'sub_category' => 'required|nullable|integer',
            'description' => 'required|string',  // 'requires' yerine 'required' olmalı
        ]);
        

        Contact::create($request->all());

        return redirect()->back()->with('success', 'İletiniz başarıyla kaydedildi!');
    }
}