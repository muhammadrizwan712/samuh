<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

use App\Contact;
use App\News;
class FrontController extends Controller
{
    public function index(){
  $gallery=Gallery::all();
  $latgal=Gallery::take(2)->get();
  $html=Gallery::where('id',13)->first();
  $js=Gallery::where('id',14)->first();
  
  //dd($latgal);
$cont=Contact::first();
$news=News::first();
    	return view('welcome')->withgallery($gallery)->withcontact($cont)->withnews($news)->withlatgal($latgal)->withhtml($html)->withjs($js);
    }
}
