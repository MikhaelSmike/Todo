<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        $context = [
            "todos"=> $todos
        ];

        return view("home", $context);
    }

    public function store(Request $request){
        $request->validate([
            'taskname' => 'required',
            'description' => 'required',
            'duedate' => 'required'
        ]);

        #$request->user()->posts()->create([
         #   "body"=> $request->body
        #]);
        
        #$todo = Todo::create($request->all());
        $todo = new Todo;
        $todo->name=$request['taskname'];
        $todo->work=$request['description'];
        $todo->duedate=$request['duedate'];
        $todo->save();

        return redirect(route("home"));
        }
    
    public function delete($id){
        Todo::find($id)->delete();
        return redirect(route("todo.home"));
    }

    public function edit($id){
        $todo=Todo::find($id);
        $data=compact('todo');
        return view("update")->with($data);
    }

    public function updateData(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'work'=>'required',
                'duedate'=>'required'
            ]
            );
            $id = $request['id'];
            $todo=Todo::find($id);            
            
            $todo->name=$request['name'];
            $todo->work=$request['work'];
            $todo->duedate=$request['duedate'];
            $todo->save();
            return redirect(route("todo.home"));
    }
}
