<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Foto;

class FotoController extends Controller
{

    protected $foto_items;
    protected $title;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $this->title = 'Foto';
$this->foto_items = Foto::all();


         return view('admin.pages.admin_fotos')->with('title', $this->title)->with('foto_items', $this->foto_items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Foto $foto)
    {


    $request->validate([
        'portfolio_img_name' => 'required|min:1',
        'portfolio_img_info' => 'required|min:1'
        ]);

             $data = $request->except('_token','portfolio_img');

            //dump($data);die();



        if($request->hasFile('portfolio_img')) {
            $img = $request->portfolio_img;
            if($img->isValid()) {
            $img->move(public_path().'/img/portfolio',$img->getClientOriginalName());
            $data['portfolio_img'] = $img->getClientOriginalName();
            }
        }
        else{
            $data['portfolio_img'] = '';
        }

           $foto->fill($data)->save();
      if($foto){
        $ok = 'фото добавлено';
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
      
        $this->title = 'Foto edit';
         $this->foto_for_edit = Foto::find($id);
        if(!$this->foto_for_edit){
            abort(404);
        }

         return view('admin.pages.admin_foto_edit')->with('title', $this->title)->with('foto_for_edit', $this->foto_for_edit);
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
      $request->validate([
        'portfolio_img_name' => 'required|min:1',
        'portfolio_img_info' => 'required|min:1'
        ]);

             $data = $request->except('_token','portfolio_img');

            //dump($data);die();



        if($request->hasFile('portfolio_img')) {
            $img = $request->portfolio_img;
            if($img->isValid()) {
            $img->move(public_path().'/img/portfolio',$img->getClientOriginalName());
            $data['portfolio_img'] = $img->getClientOriginalName();
            }
        }
        else{
            $data['portfolio_img'] = $request->old_image;
        }
$foto = Foto::find($id);
           $foto->fill($data)->update();
      if($foto){
        $ok = 'фото исправлено';
        return redirect()->back()->withSuccess($ok);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $foto_item = Foto::find($id);
        $foto_item->delete();
        $ok = 'фото удалено';
        return redirect()->back()->withSuccess($ok);
    }
}
