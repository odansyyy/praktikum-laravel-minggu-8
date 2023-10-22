<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function About() {
    return '<p> Nama : Odan Syaharta </p>
       <p> NIM : 2321771002</p>';
    }
}
