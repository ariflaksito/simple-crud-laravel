<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class ContentsController extends Controller
{
    function index(){
    	$data = Member::paginate();
    	return view('table', compact('data'));
    }
}


