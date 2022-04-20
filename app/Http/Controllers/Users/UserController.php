<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('login');
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
        $validator = Validator::make($request->all(), 
            [
                'email'    => 'required|email|unique:users',
                'password' => 'required|min:8|max:20',
            ],
            [
                'email.required'     =>  'Email field can not be empty',
                'email.email'        =>  'Please enter valid email id',
                'email.unique'       =>  'Please enter register email id',
                'password.required'  =>  'Password field can not be empty',
                'password.min'       =>  'Password  must contains at least 8 character or more',
                'password.max'       =>  'Password can not exceed 20 character'
            ]
        );
        if( $validator->fails() ) {
            return redirect('/login')->withErrors($validator)->withInput();
        }
        echo "<pre>";
        print_r($validator);
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        // echo "<pre>";
        // print_r($data);
        // die;
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
