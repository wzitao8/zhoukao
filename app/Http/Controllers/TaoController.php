<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TaoController extends Controller
{
 	public function test(){
		$res = DB::table('tao');
		return view('tao/tao');

	}    
}
