<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class UpdateTodoController extends Controller
{
    public function index() {
        return view("update");
    }

    public function store(Request $request, Todo $todo) {
        $request->validate([
            "taskname"=> "required",
            "description"=> "required",
            "duedate"=> "required|date",
        ]);
        
        $todo = Todo::findOrFail($id);
        $todo = Todo::findOrFail($request->id);
        $todo->update($request->all());
        return redirect()->route("home")->with("success","Updated");
    }
}
