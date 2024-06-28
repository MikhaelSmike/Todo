<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        #$todos = Todo::all();
        $todos = Todo::paginate(5);
        $context = [
            "todos"=> $todos
        ];

        return view("home", $context);
    }
   
}
