<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\GroupRequest;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function create(){
        return view('groups.create');
    }

    public function store(GroupRequest $groupRequest){
        $group = new Group;

        $group->nombre = $groupRequest->nombre;

        $group->save();

        return redirect()->route('administrarGrupos')
                         ->with('info','El grupo fue guardado exitosamente');
    }

    public function update(GroupRequest $request, $id){
        $group = Group::find($id);

        $group->nombre = $request->nombre;

        $group->save();

        return redirect()->route('administrarGrupos')
                         ->with('info','El grupo fue actualizado');
    }

    public function edit($id){
        $group = Group::find($id);
        return view('groups.edit', compact('group'));
    }
}
