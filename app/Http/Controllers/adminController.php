<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostRequest;
use App\Http\Requests\BlogSearchRequest;
use App\Http\Requests\BlogUpdateRequest;

use Illuminate\Support\Facades\Input;

use DB;

class adminController extends Controller
{
	public function index()
	{
		$users = DB::table('tbl_blog')->paginate(5);
		return view('admin', ['users' => $users]);
	}

	public function updateBlog($id)
	{
		$article_id = $id;
		$users = DB::table('tbl_blog')->select('*')->where('id',$article_id)->get();
		return view('updateBlog',compact('users','article_id'));
	}

	public function update(BlogUpdateRequest $request,$id)
	{
		if(!input::file('image'))
		{
			$filename = input::get('old_image');
		}
		else
		{
			$extensions = array("jpeg", "png", "jpg");
			if (in_array(Input::file('image')->getClientOriginalExtension(), $extensions) === false) {
				Session::flash('message', 'Extension Not allowed!!! Choose only JPEG,JPG,PNG files');
				Session::flash('alert-class', 'alert-danger');
				return Redirect::back();
			}
			$filename = date("d-m-Y") . "-" . time() .'.'.Input::file('image')->getClientOriginalExtension();
			$des= 'upload/';
			Input::file('image')->move($des, $filename);
		}


		$result = DB::table('tbl_blog')->where('id',$id)->update(
			array('title' => Input::get('title'), 'description' => Input::get('description'),
				  'image_path' => $filename,'active_from_date' => Input::get('from_date') ,
				  'active_to_date' =>  Input::get('to_date') , 'status' => Input::get('status')));

			return redirect()->action('adminController@index');

	}

	public function delete($id)
	{
		DB::table('tbl_blog')->where('id', '=', $id)->delete();
		return redirect()->back();
	}

	public function search()
	{

		$search = Input::get('search');

		$posts = DB::table('tbl_blog')->where('title', 'like', "%$search%")->paginate(5);

		//return json_encode($posts);
		return view('admin',['users' => $posts]);
	}

}
