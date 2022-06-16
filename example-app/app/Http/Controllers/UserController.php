<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function xinchao(){
        // echo "Xin Chao Tien Bui";
     
        return view('test',['var'=>"hỏng hiểu gì hết"]) ;
    }
}
