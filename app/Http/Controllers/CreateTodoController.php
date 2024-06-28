<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class CreateTodoController extends Controller
{
    public function index() {
        return view("create");
    }

    public function store(Request $request) {
        $request->validate([
            "taskname"=> "required",
            "description"=> "required",
            "duedate"=> "required|date",
        ]);

        $todo = Todo::create($request->all());
        $todo->save();
        return redirect()->route("home")->with("success","Created");

        #$todo = new Todo();
        #$todo->taskname = $request->taskname;
        #$todo->description = $request->description;
        #$todo->duedate = $request->duedate;
        #$todo->save();
        #return redirect()->route("home")->with("success","Created");
    }
}
