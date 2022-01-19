<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class FormController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function check(Request $request)
    {
        $items=$request->all();
        return view('check', ['items'=>$items]);
    }

    public function store(Request $request)
    {
        $data=$request->all();
        Contact::create($data);
        return redirect('/thanks');
    }
    
    public function thanks()
    {
        return view('thanks');
    }
}
