<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

use App\Task;

class UsersController extends Controller
{
     public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }
}
