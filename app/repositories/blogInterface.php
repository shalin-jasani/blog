<?php

namespace repositories;
use App\Http\Requests\BlogInsertRequest;
use App\Http\Requests\insertComment;

interface blogInterface
{
			public function index();
			public function insertBlog(BlogInsertRequest $request,$d,$filename);
			public function viewBlog($id);
			public function viewComment($id);
			public function insertComment(insertComment $request,$id);
}