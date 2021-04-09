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

    public function editPeopleView($id)
    { 
        $people = People::findOrFail($id);
        return view('editpeople', ['people' => $people]);
    }

    public function editPeople(RegisterPeopleRequest $request, $id)
    {
        $people = People::findOrFail($id);
        $people->update([
            'name' => $request->input('name'),
            'cpf' => $request->input('cpf'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'age' => $request->input('age')
        ]);

        return redirect()->route('listPeopleView');
    }

    public function deletePeople($id)
    {
        $people = People::findOrFail($id);
        $people->delete();

        return redirect()->route('listPeopleView');
    }

    protected function getPeople($id)
    {
        return $this->people->find($id);
    }

}
