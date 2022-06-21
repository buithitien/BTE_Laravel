<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class DataTableController extends Controller
{
    public function createTable(){
        Schema::create('demo1',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
        });

        Schema::create('demo2',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->image('image');
        });
        echo("tạo bảng thành công");
    }
}
