<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\GroupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class GroupController extends Controller
{

    public function create(){
        return view('groups.create');
    }

    public function store(GroupRequest $groupRequest){
        $group = Group::create($groupRequest->all());

        //Image
        if($groupRequest->file('file')){
            $path = Storage::disk('public')->put('image', $groupRequest->file('file'));
            $group->fill(['logo' => asset($path)])->save();
            //$group['file']=$path;
        }
        
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
