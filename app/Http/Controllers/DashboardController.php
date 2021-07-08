<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){

        return view('dashboard');
    }
}
