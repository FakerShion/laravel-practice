<?php
declare(strict_types=1);

namespace IntelliHR\Http\Controllers;

use Illuminate\Routing\Controller;
use IntelliHR\People;

class PeopleController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $people = People::orderBy('name', 'asc')
            ->get();
        return view('people.index',compact('people'));
    }


    public function edit($id)
    {
        $person = People::find($id);
        return view('people.edit',compact('person'));
    }

    public function store($id)
    {
        $person =People::find($id);
        $person->name = request('newname');
        $person->save();
        return redirect('/');
    }


}
