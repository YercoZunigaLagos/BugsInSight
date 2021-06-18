<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index()
   {
       if(Auth::user()->hasRole('user')){
            return view('home');
       }else
       if(Auth::user()->hasRole('manager')){
            return view('manager');
       }else
       if(Auth::user()->hasRole('admin')){
        return view('home');
        }
   }
   public function proyectos()
   {
    return view('proyectos.create');
   }

   public function postcreate()
   {
    return view('postcreate');
   }
}
