<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterPeopleRequest;
use App\Http\Requests\UpdatePeopleRequest;
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
        $data = $request->only(['name', 'cpf', 'email', 'address', 'age']);
        People::create($data);
        return redirect()->route('listPeopleView');
    }

    public function listPeopleView()
    {
        $peoples = People::paginate(15);
        return view('listPeoples', ['peoples' => $peoples]);
    }

    public function editPeopleView(People $people)
    {
        return view('editpeople', ['people' => $people]);
    }

    public function editPeople(UpdatePeopleRequest $request, People $people)
    {
        $data = $request->only(['name', 'email', 'address', 'age']);
        $people->update($data);
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
