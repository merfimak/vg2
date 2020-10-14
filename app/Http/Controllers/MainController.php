<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends SiteController
{
     public function __construct(){

        $this->template = '.layouts.main_primary';

    }




    public function show()
    {
		$this->title = 'Main   YAVORSKYI VG';
		$this->main_video = view('.parts.main_video')->render();
		$this->vars = array_add($this->vars, 'main_video',$this->main_video);
    	$content = view('.pages.main_content')->render();
        $this->vars = array_add($this->vars,'content',$content);

        $this->footer = view('.parts.footer')->render();

        return $this->renderOutput();

}
}
