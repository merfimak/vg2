<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

	protected $title;

    public function index()
    {
    	$this->title = 'admin';	


    	return view('admin.pages.admin_index')->with('title', $this->title);
    }
}
