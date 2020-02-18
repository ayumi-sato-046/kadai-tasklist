<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class MicropostsController extends Controller
{
    public function index()
    {
     $data = [];
        if (\Auth::check()) {
            
            
            $data = [
                'tasks' => $tasks,
                'microposts' => $microposts,
            ];
        }
        
        return view('welcome', $data);
    }
}