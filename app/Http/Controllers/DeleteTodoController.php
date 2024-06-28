<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class DeleteTodoController extends Controller
{
    public function delete($id){
        $todo = Todo::find($id)->delete();
        return redirect(route("home"));
    }
}
