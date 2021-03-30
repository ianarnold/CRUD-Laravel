<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterPeopleRequest;
use Illuminate\Http\Request;
use App\Models\People;
use Illuminate\Support\Facades\DB;


class PeoplesController extends Controller
{
    
    public function registerPeopleView()
    {
        return view('registerpeople');
    }

    public function registerPeople(RegisterPeopleRequest $request) 
    { 
        People::create($request->all());
        $peoples = DB::select('select * from peoples');   

        return redirect()->route('listPeopleView');
    }

    public function listPeopleView() 
    {
        $peoples = DB::select('select * from peoples');   
        return view('listPeoples', ['peoples'=>$peoples]);
    }

}
