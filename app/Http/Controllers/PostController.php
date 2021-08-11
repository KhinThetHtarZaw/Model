<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	function index()
	{
		$posts=DB::select('SELECT * FROM posts');
		
		return view ('posts.index')->with('posts', $posts);
	}
	function create()
	{

		return view('posts.create');
	}
	public function save(Request $request)
	{
		$current_time =new \DateTime();
		DB::table('posts')->insert([
			'ID' => $request->id,
			'Title' => $request->title,
			'Description'=> $request ->descri,
			'CreatedAt' =>$current_time->format("Y-m-d H:i:s")
		]);
		return redirect('/posts');
	}
	function edit($id)
	{
		$post=DB::table('posts')->where('ID',$id)->get();
		return view('posts.edit')->with('post',$post);
	}
	public function update(Request $request)
	{
		DB::table('posts')->where('ID',$request->id)->update([
			'Title' => $request->title,
			'Description'=> $request ->descri
		]);
		return redirect('/posts');		
	}
	function delete($id)
	{
		DB::table('posts')->where('ID',$id)->delete();
		return redirect('/posts');
	}
	function index1()
	{
		$category=DB::select('SELECT * FROM category');
		return view ('category.index1')->with('category',$category);
	}
	function create1(){
		return view('category.create1');
	}
	function save1(Request $request){
		$current_time=new\DateTime();
			DB::table('category')->insert([
				'ID'=>$request->id,
				'Title'=>$request->title,
				'Description'=>$request->descri,
				'CreatedAt'=>$current_time->format("Y.m.d H:i:s")
			]);
			return redirect('/category');
	}
	function edit1($id){
		$catt=DB::table('category')->where('ID',$id)->get();
		return view('category.edit1')->with('catt',$catt);
	}
	function update1(Request $request){
		DB::table('category')->where('ID',$request->id)->update([
			'Title'=>$request->title,
			'Description'=>$request->descri
		]);
		return redirect('/category');
	}
	function delete1($id)
	{
		DB::table('category')->where('ID',$id)->delete();
		return redirect('/category');
	}
	// function welcome(){
	// 	return view ('welcome');
	// }
}








