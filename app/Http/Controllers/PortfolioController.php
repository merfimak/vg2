<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Foto;

class PortfolioController extends SiteController
{



	protected $portfolio_videos;
	protected $portfolio_fotos;


     public function __construct(){

        $this->template = '.layouts.primary';

    }




    public function show()
    {
    	

$this->portfolio_videos = Video::all();
$this->portfolio_fotos = Foto::all();


		$this->title = 'YAVORSKYI VG Portfolio';

		
    	$content = view('.pages.portfolio_content')->with(['portfolio_videos'=>$this->portfolio_videos,'portfolio_fotos'=>$this->portfolio_fotos])->render();
        $this->vars = array_add($this->vars,'content',$content);

        return $this->renderOutput();

}
}
