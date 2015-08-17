<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
   public function about()
   {
   		$people = [
   		'Tylor Ottwell','Robert DeNiro','Bred Pit'
   		];
   	return view('pages.about',compact('people'));
   }
}
