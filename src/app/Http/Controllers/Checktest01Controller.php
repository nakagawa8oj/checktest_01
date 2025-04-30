<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class Checktest01Controller extends Controller
{
 public function index()
  {
    return view('index');
  }

   public function confirm(Request $request)
     {
      $contact = $request->only([
        'first_name', 
        'last_name',
        'Gender',
        'Email', 
        'Tel',
        'Address',
        'Building',
        'Content',
        'Detail'
        ]);
       return view('confirm', ['contact' => $contact]);
    }

    public function store(Request $request)
   {
      $contact = $request->only([
        'first_name', 
        'last_name',
        'Gender',
        'Email', 
        'Tel',
        'Address',
        'Building',
        'Content',
        'Detail'
        ]);
  Contact::create($contact);
   return view('thanks');
      }
  
}
