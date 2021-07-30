<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\UserMessage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pname'=>'required',
            'desc'=>'required',
            'price'=>'required',
            'qty'=>'required',
        ]);
        $filename=time().".".$request->img->getClientOriginalExtension();
       
        $request->img->storeAs('Myimages',$filename);
        return redirect('product');
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


    /**
     * Remove the specified resource from storage.
     *
     *Contact us page display
     */
    public function ContactusPageDisplay()
    {
        return view('contactus');
    }

     /**
     * Remove the specified resource from storage.
     *
     *send email
     */
    public function SendEmail(Request $request)
    {
        $name=$request['name'];
        $email=$request['email'];
        $message=$request['message'];
        $Emaildata=['name'=>$name,'email'=>$email,'msg'=>$message];
        \Mail::to($email)->send(new UserMessage($Emaildata));
        return redirect()->back()->with('success', 'Mail send successfull!');


    }

}
