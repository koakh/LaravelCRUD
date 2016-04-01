<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
  public function home()
  {
    $var = 'Welcome home koakh. go to bed!';
    return $var;
  }
}
