<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index() {
       $title = 'Benvenuto nel mio blog';
       return view('pages.index')->with('title', $title);

       // oppure posso fare la stessa cosa di chiamare una mia variabile con il metodo sotto
       // return view('pages.index', compact('title'));
        
   }

   public function about() {
       $title = 'Il nostro Blog';
       return view('pages.about')->with('title', $title);
   }

   public function services() {
       $data = array(
           'title' => 'Servizi',
           'services' => ['Web Design', 'Frontend', 'Database']
       );
       return view('pages.services')->with($data);
   }
}
