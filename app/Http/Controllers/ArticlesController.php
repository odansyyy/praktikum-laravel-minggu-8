<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function articles($id) {
    return view ('articles', ['id'=>$id]);
    }
}
