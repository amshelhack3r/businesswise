<?php

//include the controllers namespace to access the Controller class
//
use App\Http\Controllers\Controller;

//class for dealing with requests
use Illuminate\Http\Request;
//class for accessing DB class. make sure facades are enabled bootstrap to be able to use query builder
use Illuminate\Support\Facades\DB;

class Insertcontroller extends Controller
{

    //this is the method to be run after the endpoint has been accessed
    //the request object handles all post data. it can accept both x-form-urlencoded and json
    //
    public function insertData(Request $request)
    {
        //we use the $request object to access post object sent
        //eg if someone sent an email and username through post parameters we can access them as 
        $email = $request->input('email');
        $username = $request->input('username');


        //now for a simple insert we do
        //returns a boolean so you can check if the data was inserted 
        //use trycatch methods to traps exceptions
        DB::table('table-name')->insert([
            "username" => $username,
            "email" => $email
        ]);
    }
}
