<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller{
	function aboutus()

{
	return view ('pages.aboutus');

}
function welcome(){
	return view ('welcome');
}
}
