<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class TestController extends Controller
{
/**
* Create a new controller instance.
*
* @return void
*/
public function __construct()
{
//略
}

/**
* Show the application dashboard.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{

return view('home');
}
}