<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class TestController extends SiteController
{


  public function __construct(){

        $this->template = '.layouts.primary';

    }




    public function show()
    {
		$this->title = 'Test';
    	$content = view('.pages.test_content')->render();
        $this->vars = array_add($this->vars,'content',$content);

        return $this->renderOutput();

}
}