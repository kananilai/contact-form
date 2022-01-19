<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index()
    {
        $items = Contact::paginate(10);
        return view('admin', ['items' => $items]);
    }

    public function search(Request $request)
    {
        $fullname =  $request->fullname;
        $gender = $request->gender;
        $start = $request->start;
        $end = $request->end;
        $email = $request->emial;
        $data = Contact::query();
        if(!empty($fullname)){
            $data->where('fullname', 'like',"%$fullname%");
        }
        if(!empty($gender)){
            $data->where('gender', $gender);
        }
        if(!empty($start)){
            $data->where('created_at', 'like', "%$start%");
        }
        if(!empty($end)){
            $data->where('created_at', 'like',"%$end%");
        }
        if(!empty($email)){
            $data->where('emial','like', "%$email%");
        }
        $finditems = $data->Paginate(10);
        return view('search',['finditems' => $finditems]);
    }

    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/admin');
    }
}
