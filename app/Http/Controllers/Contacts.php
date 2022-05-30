<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;


class Contacts extends Controller
{
    public function index(){
        return view("guest.contacts");
    }
    public function store(Request $request){
        // dd($request->all());
        Mail::to("mailadmin@gmail.com")->send(new SendNewMail($request->fullName, $request->email, $request->guestMessage));
        // Mail::to("mailadmin@gmail.com")->send(new SendNewMail($request->fullName, $request->email, $request->guestMessage));
        return redirect()->route('guest.done')->with('message', "Grazie $request->fullName. Il messaggio è stato inviato correttamente");
    }
    public function done(){
        return view("guest.done");
    }
}
