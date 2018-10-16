<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
        return view('home');
    }
    public function getMindjuse()
    {
        return view('mindjuse');
    }
    public function getOgrlice()
    {
        return view('ogrlice');
    }
    public function getNarukvice()
    {
        return view('narukvice');
    }
    public function getAksesoari()
    {
        return view('aksesoari');
    } 
    public function getContact()
    {
        return view('contact');
    }
    public function getMain()
    {
        return view('main');
    }
}
