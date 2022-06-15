<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about(){
        return view('about');
    }
    public function  home(){
        return view('home');
    }

    public function signinindex(){
        return view('signin');
    }

    public function signupindex(){
        return view('signup');
    }

    public function adminView(){
        $data = User::all()->sortBy('id');;
        return view('adminview' ,['users' => $data]);
    }


    public function event(){
        $events = Event::all();
        return view('events', ['events' => $events]);
    }

    public function eventview(){
        $event= Event::all()->sortBy('id');
        return view('adminviewevent', ['events' => $event], compact('event'));
    }

    public function addnewevent(){
        return view('adminaddevent');
    }


    public function insert(Request $request){
        $event =  new Event();
        $event-> title = $request->input('title');
        $event-> description = $request->input('description');
        $event-> imagePath = $request->input('imagePath');
        $event-> city = $request->input('city');
        $event-> time = $request->input('time');
        $event-> price = $request->input('price');
        $event->save();
        return redirect()->route('event-view');
    }

    public function eventdestroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('event-view');
    }
}
