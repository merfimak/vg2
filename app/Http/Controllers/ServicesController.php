<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;


class ServicesController extends SiteController
{

protected $services_prices = [];


  public function __construct(){

        $this->template = '.layouts.primary';

    }




    public function show()
    {
    	$this->services_prices = Service::find(1);




		$this->title = 'YAVORSKYI VG Services';
    	$content = view('.pages.services_content')->with('services_prices',$this->services_prices)->render();
        $this->vars = array_add($this->vars,'content',$content);

        return $this->renderOutput();

}
}