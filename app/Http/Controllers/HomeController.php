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
    public function searchfeature(Request $request){
        $output = '';
        $employee = Contact::where('name','Like','%'.$request->searchfeature.'%')->orWhere('email','Like','%'.$request->searchfeature.'%')->get();

        foreach ($employee as $human) {
            $output.= 
            '<tr>
                <td>'.$human->name.'</td>
            <tr>
            ';
            return response($output);
        }
    }
}
