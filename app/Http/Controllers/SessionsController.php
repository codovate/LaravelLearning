<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

	public function __construct(){
        //This can be access by everyone except for index and show method.
        $this->middleware('guest', ['execpt' => 'destory' ] );
    }

    public function create() {

   		return view('sessions.create');
    }

    public function store() {

    	//Attemp to authenticate user.
    	if( ! auth()->attempt(request(['email', 'password']) ) ){
    		return back()->withErrors([
    			'message' => 'Please check your credentials and try again'
    		]);
    	}

    	return redirect()->home();
    }

    public function destroy() {
   		
   		auth()->logout();

   		return redirect()->home();
   }

}
