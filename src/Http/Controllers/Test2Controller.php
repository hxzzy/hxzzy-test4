<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/21
 * Time: 9:32
 */
namespace Hxzzy\Test4\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class Test2Controller extends Controller
{
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        dd(Config::get("test2.message"));
        //return view('Test2::test2');
    }
    public function test2(){
        return 'hello,hxzzy';
    }
}