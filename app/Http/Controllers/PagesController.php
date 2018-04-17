<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Event;
class PagesController extends Controller
{
    public function index(){
        $pageName = "Home";
        $EC = new EventsController();
        $events = $EC->transformMultiEventDates(Event::orderBy('start','asc')->take(3)->get());
        return view('pages.index')->with('pageName', $pageName)->with('events',$events);
    }

    public function about(){
        $pageName = "About";
        return view('pages.about')->with('pageName', $pageName);
    }

    public function services(){
        $pageName = "Service Times";
        return view('pages.services')->with('pageName',$pageName);
    }

    public function contact(){
        $pageName = "Contact Us";
        return view('pages.contact')->with('pageName',$pageName);
    }
}
