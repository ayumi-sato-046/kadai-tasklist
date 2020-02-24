<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task; // 追加



class UsersController extends Controller
{
    public function index()
    {   
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $tasks = $user->tasks()->orderBy('created_at' , 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'tasks' => $tasks,
            ];
        }
             
            return redirect('/');
         
    }
