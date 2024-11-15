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
            'category' => 'required',
            'sub_category' => 'required',
            'description' => 'requires|string',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'İletiniz başarıyla kaydedildi!');
    }
}