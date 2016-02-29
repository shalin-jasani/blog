<?php

namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\insertComment;
use App\Http\Requests\BlogInsertRequest;
use Illuminate\Support\Facades\Session;
use repositories\blogInterface;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class blogController extends Controller
{
	protected $interface;

	public function __construct(blogInterface $interface)
	{
		$this->interface = $interface;
	}


	public function index()
	{
		$users = $this->interface->index();
		return view('index', ['users' => $users]);
	}

    public function insertBlog(BlogInsertRequest $request)
	{
		$date = date("Y-m-d");
		$date = strtotime($date);
		$new_date = strtotime('+ 1 year', $date);
		$d = date('Y/m/d', $new_date);

		/*$extensions = array("jpeg", "png", "jpg");
		if (in_array(Input::file('image')->getClientOriginalExtension(), $extensions) === false) {
			Session::flash('message', 'Extension Not allowed!!! Choose only JPEG,JPG,PNG files');
			Session::flash('alert-class', 'alert-danger');
			return redirect()->back();
		}*/

		$filename = date("d-m-Y") . "-" . time() .'.'.Input::file('image')->getClientOriginalExtension();
		$des= 'upload/';
		Input::file('image')->move($des, $filename);

		$results = $this->interface->insertBlog($request,$d,$filename);

		if($results)
		{
			return Redirect::to('/');
		}
		else{
			Session::flash('Error','Data Not Inserted');
		}
	}

	public function viewBlog($id)
	{
		$article_id = $id;
		$blogs = $this->interface->viewBlog($article_id);
		$comment = $this->interface->viewComment($article_id);
		return view('viewBlog', compact('blogs','comment','article_id'));
	}

	public function insertComment(insertComment $request,$id)
	{
		$this->interface->insertComment($request,$id);
		return redirect()->back();
	}

}
