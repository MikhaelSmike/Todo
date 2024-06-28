<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class UpdateTodoController extends Controller
{
    public function index($id) {
        $todo = Todo::findOrFail($id);
        $context = [
            "todo"=> $todo,
        ];
        return view("update")->with($context);
    }

    public function update(Request $request, $id) {
        $request->validate([
            "taskname"=> "required",
            "description"=> "required",
            "duedate"=> "required|date",
            "isdone"=> "nullable",
        ]);

        $todo = Todo::findOrFail($id);
        $todo->update($request->all());
        return redirect()->route("home")->with("success","Updated");
    }
}
