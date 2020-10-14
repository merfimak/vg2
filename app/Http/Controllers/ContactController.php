<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;
use App\Mail\ContactMail;

class ContactController extends SiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


  public function __construct(){

        $this->template = '.layouts.primary';
    }



    public function index()
    {
        $this->title = 'YAVORSKYI VG Contact';
        $content = view('.pages.contact_content')->render();
        $this->vars = array_add($this->vars,'content',$content);

        return $this->renderOutput();
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
    public function store(Request $request)
    {
     $data = $request->except(['_token']);



 $massages = [
                'required'=> "Поле :attribute обязательно",
                'email'=> "Это поле должно соответствовать email адресу",
                'min'=>"Это поле должен быть не мение :min символов",
                'max'=>"Это поле должен быть не более :max символов"
            ];

    $this->validate($request, [
        'name' => 'required|max:100|min:2',
        'email' => 'required|email',
        'message' => 'required|max:225|min:5',
    ], $massages);

    /* Метод validate принимает два параметра экземпляр HTTP запроса и правила валидации. Если все правила не нарушены, код будет выполняться далее. Однако, если проверка не пройдена, будет выброшено исключение и сообщение об ошибке автоматически отправится обратно пользователю. По традициям HTTP запроса, ответ будет перенаправлен обратно с заполненными flash-переменными, в то время как на AJAX запрос отправится JSON.*/
    
Mail::to('merfimak3@gmail.com')->send(new ContactMail($data));


      $ok = 'Собщение отправленно';
        return redirect()->back()->withSuccess($ok);




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
        //
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
