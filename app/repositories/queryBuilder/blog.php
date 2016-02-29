<?php

namespace repositories\queryBuilder;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\insertComment;
use App\Http\Requests\BlogInsertRequest;
use Illuminate\Support\Facades\DB;
use repositories\blogInterface;


class blog implements blogInterface
{

	public function  index()
	{
		return DB::table('tbl_blog')->where('status', 'Active')->orderBy('id', 'desc')->paginate(5);
	}

	public function insertBlog(BlogInsertRequest $request,$d,$filename)
	{
		return  DB::table('tbl_blog')->insertGetId(
			array('title' => Input::get('title'), 'description' => Input::get('description'),
				  'image_path' => $filename,'active_from_date' => date('Y-m-d') ,
				  'active_to_date' => $d ));
	}

	public function viewBlog($id)
	{
		return  DB::table('tbl_blog')
			->select('*')
			->where('id', $id)
			->orderBy('id', 'desc')
			->get();
	}

	public function viewComment($id)
	{
		return  DB::table('tbl_comment')
			->Join('tbl_login', 'tbl_comment.user_id', '=', 'tbl_login.id')
			->where('article_id', $id)
			->orderBy('tbl_comment.id', 'desc')
			->get();
	}

	public function insertComment(insertComment $request,$id)
	{
		return DB::table('tbl_comment')->insertGetId(
			array('comment' => Input::get('comment'), 'user_id' => Auth::id(),
				  'article_id' => $id));

	}
}