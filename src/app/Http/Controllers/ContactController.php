<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function confirm(Request $request)
     {
    $contact = $request->only(['name', 'email', 'tel', 'content','address','building_name']);
    return view('confirm', compact('contact'));
  }
   public function store()
      {
        $contact = $request->only(['name', 'email', 'tel', 'content','address','building_name']);
        Contact::create($contact);
        return view('thanks');
      }
}