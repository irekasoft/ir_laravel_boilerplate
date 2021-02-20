<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {

    public function index(){
      return view('admin.dashboard_index');
    }

    public function masterdetail(){
      return view('admin.masterdetail_index');
    }
    
}
