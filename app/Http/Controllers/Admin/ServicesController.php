<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $services_prices = [];
    protected $title;

    public function index()
    {
        $this->services_prices = Service::find(1);

        $this->title = 'Services'; 


        return view('admin.pages.admin_services')->with('title', $this->title)->with('services_prices',$this->services_prices);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Service $service)
    {
        //$data = $request->except('_token');
        //dump($data);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Service $service)
    {

//dump($request->except('_token'));die();

      $request->validate([
        'Light_drone_pakiet_old_price' => 'required|min:1',
        'Light_drone_pakiet_new_price' => 'required|min:1',
        'FPV_Drone_Pakiet_old_price' => 'required|min:1',
        'FPV_Drone_Pakiet_new_price' => 'required|min:1',
        'pakiet_360_old_price' => 'required|min:1',
        'pakiet_360_new_price' => 'required|min:1',
        ]);

       $data = $request->except('_token');
       $prices = Service::find(1);


     $prices->fill($data)->update();
     if($prices){
        $ok = 'данные изменины';
     return redirect()->back()->withSuccess($ok);
     }
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    echo 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
