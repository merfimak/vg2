<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class SiteController extends Controller
{
  

	protected $template;//имя шаблона
	protected $title;
	protected $footer;
	protected $main_video;
	protected $vars = array();// масив передаваемых переменных в шаблон

	
		protected function renderOutput(){

		$this->vars = array_add($this->vars, 'title',$this->title);		

		$navigation = view('.parts.navigation')->render();
		$this->vars = array_add($this->vars,'navigation',$navigation);

		$this->footer = view('.parts.footer')->render();
		$this->vars = array_add($this->vars, 'footer',$this->footer);

		return view($this->template)->with($this->vars);
	}



	
}
