<?php

namespace App\Http\Controllers\Admin;

use index;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    function index(){
        return view('admin.index');
    }
}
