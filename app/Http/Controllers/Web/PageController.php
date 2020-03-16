<?php

namespace App\Http\Controllers\Web;

use App\Group;
use App\GroupResearcher;
use App\GroupUnit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use App\Researcher;
use App\Unit;
use App\User;

class PageController extends Controller
{
    public function projects(){
        $projects = Project::orderBy('id','DESC')->paginate(10);
        return view('web.projects', compact('projects'));
    }

    public function researchersP($id){

        
        $researchers=Researcher::orderBy('id','ASC')->paginate(100);
        $groups = Group::all();
        $groups_researchers = GroupResearcher::all();
        $users = User::all();
        $projects = Project::all();
        $idGroup = 0;

        return view('web.researchersP',compact('id','projects','researchers','groups','groups_researchers','users','idGroup'));
    }

    public function researchers(){

        $researchers=Researcher::orderBy('id','ASC')->paginate(3);
        $groups = Group::all();
        $groups_researchers = GroupResearcher::all();
        $users = User::all();

        return view('web.researchers',compact('researchers','groups','groups_researchers','users'));
    }

    public function administrarGrupos(){
        $groups=Group::orderBy('id','DESC')->paginate(3);
        $groupsUnits = GroupUnit::all();
        $units = Unit::all();
        return view('web.administrarGrupos',compact('groups','groupsUnits','units'));
    }
}
