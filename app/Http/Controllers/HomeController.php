<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function search(){
        $contactdata = Contact::all();
        return view('search',compact('contactdata'));
    }
}
