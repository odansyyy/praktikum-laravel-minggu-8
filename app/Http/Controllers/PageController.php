<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function odan() {
        return 'Hello World';
       }

    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '<p> Nama : Odan Syaharta </p>
        <p> NIM : 2321771002</p>';
    }

    public function articles($id) {
        return view ('articles', ['id'=>$id]);
    }
}
;