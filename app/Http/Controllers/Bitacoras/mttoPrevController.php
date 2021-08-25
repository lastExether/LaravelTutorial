<?php

namespace App\Http\Controllers\Bitacoras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mttoPrevController extends Controller
{
    public function index(){
      return view('mttoPreventivo');
    }
}
