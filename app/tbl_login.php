<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class tbl_login extends Authenticatable
{
    protected $table = "tbl_login";
	public  $primaryKey = "id";
	public  $timestamps = false;
}
