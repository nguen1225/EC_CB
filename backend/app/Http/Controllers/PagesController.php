<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getApp(){
      return view('app');
    }

    // Homeを表示
    public function getHome(){
      return view('home');
    }

    // Aboutを表示
    public function getAbout(){
      return view('about');
    }

    // Contactを表示
    public function getContact(){
      return view('contact');
    }
}
