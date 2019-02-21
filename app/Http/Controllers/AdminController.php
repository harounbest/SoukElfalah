<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
class AdminController extends Controller
{
    //
    public function index()
    {
        //$ads=$this->ads->all();

        return view('welcome');
    }





}
