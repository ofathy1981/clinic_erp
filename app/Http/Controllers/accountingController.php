<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accountingController extends Controller
{
    //

   public function index()
   {
       //
       return view('accounting.index');
   }
   public function tree()
   {
       //
       return view('accounting.accounts_tree');
   }
}
